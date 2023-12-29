<?php
	error_reporting(0);

	$siteInfo= [
			//general info
			"company_name" => "The Collision Shop", 
			"phone" =>  "(313) 541-2742", 		  //either no format or dashed format
			"email" => "email@domain.com",   //by default is used as recipient email  
			"address" => "16160 Telegraph Rd Detroit, MI 48219", 
			
			// email related
			"site_key" => "6Lc23x0UAAAAACGIT_C0_gyWO3bkj6Q5n-f_pqbe",
			"secret_key" => "6Lc23x0UAAAAAEhw1XBprAmlFaRVmS7-PZBmVwV5",
			"email_from" => "mailer@domain.com",
			"email_from_name" => "Company Name", //by default is the same as company name
			"email_bcc" => "", //accepts multiple emails. Comma separated eg: email1@domain.com,email2@domain.com
			"email_cc" => "", //accepts multiple emails. Comma separated eg: email1@domain.com,email2@domain.com

			//social media links
			"fb_link" =>"https://facebook.com",
			"tt_link" =>"https://twitter.com",
			"gp_link" =>"https://plus.google.com/",
			"ig_link" =>"https://instagram.com",
			"yt_link" =>"https://youtube.com",
			"li_link" =>"https://www.linkedin.com/",
			"tb_link" =>"https://www.tumblr.com",
			"yp_link" =>"https://yelp.com",
			"rs_link" =>"https://rss.com",

			//seo
			"ga_tracking_id" => '',

			//pivate policy link 
			"policy_link" => '', //change the value to privacy-policy for Privacy Policy Page

			//Cookie
			"cookie" => true, //false to disable cookie
			"save_form" => false, //save inquiry form on excel

			//suspension
			"suspended" => false
			];

			
	define('MVC', dirname(__DIR__) . '/' . 'app' . '/');
	define('URL_PUBLIC_FOLDER', '');
	define('URL_PROTOCOL', 'http://');
	define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
	define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
	if(substr(URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER, -1) == '/') {
		define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);
	} else{
		define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER . '/');
	}

	require MVC . 'controller/controller.php';
	require MVC . 'app.php';