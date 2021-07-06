<?php

	function emptyInputSignUp($username, $kwnas, $email, $pwd, $pwdc){
		$result = false;
			if(empty($username)|| empty($kwnas)|| empty($email)|| empty($pwd)|| empty($pwdc)){
				$result ;
			}
			else{
				$result = false;
		}
		return $result;
		
	}
	
	function emptyInputContact($username, $email, $pMethod, $subject, $message, $ofsted){
		$result;
			if(empty($username)|| empty($email)|| empty($pMethod)|| empty($subject)|| empty($message || empty($ofsted))){
				$result = true;
			}
			else{
				$result = false;
		}
		return $result;
		
	}	
	
	function emptyInputBook($date,$timeslot,$group,$session,$username,$email,$subject){
		$result;
			if(empty($date)|| empty($timeslot)|| empty($username)|| empty($email)|| empty($group)|| empty($session)|| empty($subject)){
				$result = true;
			}
			else{
				$result = false;
		}
		return $result;
		
	}

	function invalidkwnas($kwnas){
		$result;
			if(!preg_match("/^[a-zA-Z0-9]*$/", $kwnas)){
				$result = true;
			}
			else{
				$result = false;
			}
		return $result;
	}

	function invalidEmail($email){
		$result;
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$result = true;
			}
			else{
				$result = false;
			}
		return $result;
	}
	
	function pwdMatch($pwd, $pwdc){
		$result;
			if($pwd !== $pwdc){
				$result = true;
			}
			else{
				$result = false;
			}
		return $result;
	}

	function userexists($conncontacts, $kwnas, $email){
		$sql = "SELECT * FROM users WHERE cu_uid = ? OR cu_mail=?;";
		$stmt= mysqli_stmt_init($conncontacts);
		if (!mysqli_stmt_prepare($stmt, $sql)){
			header('Location: ../forms/signUp.php?error=stmtfailedcode=703:userexists&date='.$date);
			exit();
		}
		
		mysqli_stmt_bind_param($stmt, 'ss', $kwnas, $email);
		mysqli_stmt_execute($stmt);
		$resultData = mysqli_stmt_get_result($stmt);
		if($row=mysqli_fetch_assoc($resultData)){
			return $row;
		}
		else{
			$result=false;
			return $result;
		}
		mysqli_stmt_close($stmt);
	}

	function createUser($conncontacts, $username, $email, $kwnas, $pwd ){
		$sql = "INSERT INTO users (cu_name, cu_uid, cu_mail, cu_pwd) VALUES (?,?,?,?);";
		$stmt= mysqli_stmt_init($conncontacts);
			if (!mysqli_stmt_prepare($stmt, $sql)){
			header('Location: ../forms/signUp.php?error=stmtfailedcode=703:createuser&date='.$date);
			exit();
		}
		$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
		
		mysqli_stmt_bind_param($stmt, 'ssss', $username, $kwnas, $email, $hashedPwd);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		header('Location: ../forms/bookingsCalendar.php?error=none&date='.$date);
		exit();
	}
	
	function createContact($conncontacts, $username, $email, $learner, $pMethod, $subject, $message, $openQuery, $ofsted, $evidence ){
		$sql = "INSERT INTO enquiries (en_name, en_mail, en_learnerName, en_contactPref, en_subject, en_notes, en_openQuery,en_shareOfsted, en_evidence) VALUES (?,?,?,?,?,?,?,?,?);";
		$stmt= mysqli_stmt_init($conncontacts);
			if (!mysqli_stmt_prepare($stmt, $sql)){
			header('Location: ../forms/signUp.php?error=stmtfailedcode=703:createcontact&date='.$date);
			exit();
		}
				
		mysqli_stmt_bind_param($stmt, 'sssssssss', $username, $email, $learner, $pMethod, $subject, $message, $openQuery, $ofsted, $evidence);
		mysqli_stmt_execute($stmt);
		$mailTo="yvonne@1stKettering.co.uk";
		$headers="From: ".$mailFrom." sent you a message. \n";
		$txt ="It is regarding ".$subject.".";
		
		
		
		mysqli_stmt_close($stmt);
		header('Location: ../forms/bookingsCalendar.php?error=none&date='.$date);
		exit();
	}
	
	function createOfstedSubmissionAnon($connofsted, $date, $anon, $subject, $message, $evidence, $detail){
			
		$sql = ("INSERT INTO settingfeedback (fb_date, fb_anon, fb_subject, fb_message, fb_evidence, fb_persondetails) VALUES (?,?,?,?,?,?)");
		$stmt= mysqli_stmt_init($connofsted);
			if (!mysqli_stmt_prepare($stmt, $sql)){
			header('Location: ../forms/ofstedFormAnon.php?error=stmtfailedcode1=703:createfeedback');
			exit();
		}
			
		if(!mysqli_stmt_bind_param($stmt, 'ssssss', $date, $anon, $subject, $message, $evidence, $detail)){
			header('Location: ../forms/ofstedFormAnon.php?error=stmtfailedcode2=703:bindparfeedback');
			exit();
		}
		
		if(! mysqli_stmt_execute($stmt)){
			header('Location: ../forms/ofstedFormAnon.php?error=stmtfailedcode3=703:executefeedback');
			exit();
		}
		
		$msg = '<div class="alert alert-success">Feedback Stored Successful</div>';
		mysqli_stmt_close($stmt);
		header('Location: ../forms/ofstedFormAnon.php?error=successfeedbackreceived');
		exit();
	}
	
	function createOfstedSubmission($connofsted, $date, $anon, $subject, $message, $evidence, $detail){
			
		$sql = ("INSERT INTO settingfeedback (fb_date, fb_anon, fb_subject, fb_message, fb_evidence, fb_persondetails) VALUES (?,?,?,?,?,?)");
		$stmt= mysqli_stmt_init($connofsted);
			if (!mysqli_stmt_prepare($stmt, $sql)){
			header('Location: ../forms/ofstedFormAnon.php?error=stmtfailedcode1=703:createfeedback');
			exit();
		}
			
		if(!mysqli_stmt_bind_param($stmt, 'ssssss', $date, $anon, $subject, $message, $evidence, $detail)){
			header('Location: ../forms/ofstedForm.php?error=stmtfailedcode2=703:bindparfeedback');
			exit();
		}
		
		if(! mysqli_stmt_execute($stmt)){
			header('Location: ../forms/ofstedForm.php?error=stmtfailedcode3=703:executefeedback');
			exit();
		}
		
		$msg = '<div class="alert alert-success">Feedback Stored Successful</div>';
		mysqli_stmt_close($stmt);
		header('Location: ../forms/ofstedForm.php?error=successfeedbackreceived');
		exit();
	}
	
