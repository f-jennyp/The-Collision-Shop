<?php 
function write_to_excel($form='')
{
	$row = 0;

	if(file_exists('csvDB/contact_form_entry.csv')){
		$file = fopen('csvDB/contact_form_entry.csv', "r") or die("Cannot open");
	}else{
		$file = fopen('csvDB/contact_form_entry.csv', "w") or die("Cannot open");

		fputcsv($file,explode(',',"Name,Address,Email,Phone,Message")); //labels

		fclose($file);

		$file = fopen('csvDB/contact_form_entry.csv', "r") or die("Cannot open");
	}

	while(!feof($file)){
          $content = fgets($file);
      if($content)    $row++;
    }

    unset($form['g-recaptcha-response']);

    $handle = fopen("csvDB/contact_form_entry.csv", "a");
    fputcsv($handle, $form); # is an array of string values here
    fclose($handle);
}
?>