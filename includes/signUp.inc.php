<?php
	if(isset($_POST['submit-signup'])){
		require 'db_conn/dbh_ct.inc.php';
		
		$username = $_POST['name'];
		$kwnas = $_POST['user'];
		$email = $_POST['mail'];
		$pwd = $_POST['password'];
		$pwdc = $_POST['confirmpassword'];
		
		require_once 'db_conn/dbh_ct.inc.php';
		require_once 'functions.php';
		
		if(emptyInputSignUp($username, $kwnas, $email, $pwd, $pwdc) !== false){
			header("Location: ../forms/signUp.php?error=emptyinput");
			exit();
		}
		
		if(invalidkwnas($kwnas) !== false){
			header("Location: ../forms/signUp.php?error=invalidknwas");
			exit();
		}
		
		if(invalidemail($email) !== false){
			header("Location: ../forms/signUp.php?error=invalidemail");
			exit();
		}
		
		if(pwdMatch($pwd, $pwdc) !== false){
			header("Location: ../forms/signUp.php?error=pwdnomatch");
			exit();
		}
		
		if(userexists($conncontacts, $kwnas, $email) !== false){
			header('Location: ../forms/signUp.php?error=userexists');
			exit();
		}
				
		createUser($conncontacts, $username, $email, $kwnas, $pwd );	
	}
	else{
		header("Location: ../forms/signUp.php");
		exit();
	}
