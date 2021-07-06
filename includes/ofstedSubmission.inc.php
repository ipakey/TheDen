<?php

session_start();


if(isset($_POST['submit-oLanding'])){
	$anon=strip_tags($_POST['ofsted']);	
	echo $anon;
	
	if($anon !== "Y"){
		header("Location: ../forms/ofstedForm.php");
		exit();
	}
	else{
		header("Location: ../forms/ofstedFormAnon.php");
			exit();
	}
}

if(isset($_POST['submit-ofstedAnon'])){
	$anon='Yes';
	$subject=strip_tags($_POST['subject']);
	$message=strip_tags($_POST['message']);
	$evidence=strip_tags($_POST['evidence']);
		$dateComponents=getdate();
		$month=$dateComponents['mon'];
		$year=$dateComponents['year'];
		$day=$dateComponents['mday'];
	$date=date('Y-m-d',mktime(0,0,0,$month,$day,$year));
	$detail='Anon';
	
	require_once 'db_conn/dbh_of.inc.php';
	require_once 'functions.php';

	createOfstedSubmissionAnon($connofsted,$date, $anon, $subject, $message, $evidence, $detail);	

}

if(isset($_POST['submit-ofsted'])){
	$anon='No';
	$subject=strip_tags($_POST['subject']);
	$message=strip_tags($_POST['message']);
	$evidence=strip_tags($_POST['evidence']);
		$dateComponents=getdate();
		$month=$dateComponents['mon'];
		$year=$dateComponents['year'];
		$day=$dateComponents['mday'];
	$date=date('Y-m-d',mktime(0,0,0,$month,$day,$year));
		$name=strip_tags($_POST['name']);
		$mail=strip_tags($_POST['mail']);
		$contact=strip_tags($_POST['pMethod']);
		$uid=$_SESSION['userId'];
		$learner=strip_tags($_POST['learner']);
	$detail=$name.':'.$mail.':'.$contact.':'.$_SESSION['userId'].':'.$learner ;
	
	
	require_once 'db_conn/dbh_of.inc.php';
	require_once 'functions.php';

	createOfstedSubmission($connofsted,$date, $anon, $subject, $message, $evidence, $detail);	

}