<?php
class Controller { 
	function __construct(){  
		global $siteInfo;
		$this->siteInfo = $siteInfo;
		$this->loadHelpers();
	}

	protected function loadHelpers(){
		require 'libraries/helpers.php';
		$this->helpers = new Helpers();
	}

	public function index($view){   
		require MVC . 'view/template/header.php';
		require MVC . 'view/'.$view.'.php';
		require MVC . 'view/template/footer.php';
	}

	public function info($args){
		if (!is_array($args)){
			echo $this->siteInfo[$args];
		}
		else{
			$string = '<a ';

			if(isset($args[1])){
				$string .= 'href="'.$args[1].':'.$this->siteInfo[$args[0]].'"';
			}
			if(isset($args[2])){
				$string .= 'class="'.$args[2].'" ';
			}
			if(isset($args[3])){
				$string .= 'id="'.$args[3].'" ';
			}

			$string .= ' >'.$this->siteInfo[$args[0]].'</a>';
			echo $string;
		}

	}

	public function sendContactForm(){

		/** Available args:
		   "recipient" => by default is the email in config. Accepts multiple recipients. Comma separated eg: email1@domain.com,email2@domain.com
			"subject" => by default is the company name in config
			"from" => default is email_from in config
			"from_name" => by default is email_from_name in config
			"bcc" => by default is email_bcc in config
			"cc" => by default is email_cc
			"rules" => for full documentation on all available validators see: https://github.com/Wixel/GUMP#user-content-available-validators 
			"error_texts" => messages to display that correlates with the rules **/

			$args = [
			"rules" => [
			'name' => 'required',
			'email'  => 'required|valid_email',
			'message' => 'required',
			'phone' => 'phone_number'
			],
			"error_texts" => [
			'name' => 'Please enter your name',
			'email'    => 'Please enter a valid email address',
			'phone' => 'Please enter a valid phone number',
			'message' => 'Please enter your message'
			]
			];
			
			$this->helpers->sendEmail($args);
		}

	public function suspensionRedirect($view){
		if($view != "home" && $this->siteInfo["suspended"]){
			header("Location:".URL);
		}
	}
	public function checkSuspensionHeader(){
		if($this->siteInfo["suspended"]){
			echo '<div class="suspension-contain">';
		}
	}

	public function checkSuspensionFooter(){
		if($this->siteInfo["suspended"]){
			require MVC . 'view/template/suspension.php';
			echo '</div>';
		}
	}

	}