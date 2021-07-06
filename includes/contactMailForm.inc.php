<?php

if(isset($_POST['submit-contact'])){
	$name= $_POST['name'];
	$mail= $_POST['mail'];
	$subject= $_POST['subject'];
	$message= $_POST['message'];

	$mailTo= 'admin@thedenkettering.com';
	
	$headers = 'From: '.$mail;
	$txt='You have received an email from '.$name.'.\n\n.'.$message;

	mail($mail, $subject, $txt, $headers);
	
	header('Location: index.php?mailsent');
	
}

?>