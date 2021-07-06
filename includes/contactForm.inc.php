<?php
	if(isset($_POST['submit-contact'])){
		
		$username = strip_tags($_POST['name']);
		$emailFrom = strip_tags($_POST['mail']);
		$kwnas = strip_tags($_POST['learner']);
		$pMethod = strip_tags($_POST['pMethod']);
		$subject = strip_tags($_POST['subject']);
		$message = strip_tags($_POST['message']);
		$openQuery = 'Y';
		$ofsted = strip_tags($_POST['ofsted']);
		$evidence = strip_tags($_POST['evidence']);
		
		
		require_once 'db_conn/dbh_ct.inc.php';
		require_once 'functions.php';
		
		
		if(emptyInputContact($username, $emailFrom, $pMethod, $subject, $message, $ofsted) !== false){
			header("Location: ../contactForm.php?error=emptyinput");
			exit();
		}
		
		
		if(invalidemail($emailFrom) !== false){
			header("Location: ../contactForm.php?error=invalidemail");
			exit();
		}
		
		
	
		
		createContact($conncontacts, $username, $emailFrom, $learner, $pMethod, $subject, $message, $openQuery, $ofsted, $evidence );
		

	}
	else{
		header("Location: ../forms/contactForm.php");
		exit();
	}

