<?php

include_once '../includes/db_conn/dbh_ct.inc.php';
include_once '../includes/functionsBooking.php';
include_once '../includes/functions.php';

	if(isset($_POST['slotbk-submit'])){
	$date= strip_tags($_POST['date']);
    $name = strip_tags($_POST['name']);
	$email = strip_tags($_POST['email']);
	$group = strip_tags($_POST['group']);
	$session = strip_tags($_POST['session']);
	$subject = strip_tags($_POST['subject']);
	$notes = strip_tags($_POST['message']);
	$timeslot = strip_tags($_POST['ts_book'])?? '11:00AM - 12:00PM';
	$slot = 123;
	$msg='';
	}
	
	//echo( $date.$name.$email.$group.$session.$subject.$notes.$timeslot.$slot.$msg);
	
		
	if(	emptyInputBook($date,$timeslot,$group,$session,$name,$email,$subject) !== false){
		header("Location: ../forms/slotBooking.php?error=emptyinput&date=".$date."&ts=".$timeslot);
		exit();
	}else{
		//return $date;
		//return $timeslot;
	}
	
	
	if(invalidEmail($email) !== false){
		header("Location: ../forms/slotBooing.php?error=invalidemail&date=".$date."&ts=".$timeslot);
		exit();
	}else{
		//return $date;
		//return $timeslot;
	}
	
		
	createBooking($conncontacts, $date, $timeslot, $slot, $group, $session,$name,$email,$subject,$notes);
	
	
	
		header("Location: ../bookingsCalendar.php?error=none");
		exit();


?>
	

