<?php 
	//print_r($_POST);
	$email = $_POST['email'];
	$message = $_POST['message'];

	$error = '';
	if(trim($email)== ''){
		$error = "write your email";

	}else if(trim($message) == ''){
		$error = "write you message";

	}else if (strlen($message) < 10) {

		$error = "message will be more then 10 symbols";
	}

	if($error != ''){
		echo $error ;
		exit;

	}

	$subject = "=?utf-8?B?".base64_encode("text message")."?=";
	$headers ="From: $email\r\nReply-to: $email\r\nContent-type: text/html;chardet=utf-8\r\n";


	mail('admin@itproger.com', '$subject', '$message', '$headers')

	header('Lacation: /about.php');

?>