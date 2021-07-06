<?php

if(isset($_GET['date'])){
	$date = $_GET['date'];
	$timeslot = $_GET['ts'];
}

if(isset($_POST['booking-submit'])){
	$date = strip_tags($_POST['date_book']);
	$timeslot = $_POST['ts_book'];
	
	
	echo $date.$timeslot;
}

$msg=null;
?>
<!DOCTYPE html>


<head>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../scripts/script.js"></script>

	
	<link rel='Stylesheet' href='../css/bootstrap.css'>
	<link rel='Stylesheet' href='../css/styles.css'>
	<title>Bookings Form Test System - Slot Booking . The Den Kettering</title>
	<base href='http://localhost/TheDen/'>
</head>

<body>
	
	<div class='spanTitleCenter'>
	
	<h4 class="formHeaderText" >
			Book Session at: <?php echo $timeslot?> on the <?php echo date('d M Y', strtotime($date)); ?>
		</h4>
</div>
	<div class='container'>

	</div>
	
    <div class='textAreaForm' style='align:center; color:LemonChiffon; width:65%; font-size:18px'>
	
		<?php
		if($msg != null){
			echo isset($msg)?$msg:'';
		}
		else{
			echo "<p style='width:85%'>Thanks for coming to this page, please fill in all the fields before pressing the Book button.  The information you provide in this 	form will be used for administration purposes within The Den (Kettering) only and will not be shared or resold.";
		}?>	
	</div>
	<div>	 
		<form class='formBlockCenter formTextItalic' action='includes/bookSession.inc.php' method ='post' style='width:75%'>
			<label for=''>Name of Student: </label>
			<input type ='text' name='name' class='formContent'  style='width:68%' placeholder='Name: '></br>
			
			<input type ='hidden' name='date' value='<?php echo date('Y-m-d', strtotime($date)); ?>'>
			
			<input type ='hidden' name='ts_book' value='<?php echo($timeslot);?>'>

			<label for=''>Session: </label>
			<select id='session' name='session' class='formContent'style='width: 200px' placeholder='Session'>
				<option value = '22'>Average Hours Plan</option>		
				<option value = '25'>Before School (2hrs)</option>
				<option value = '27'>After School (3hrs)</option>
				<option value = '01'>Whole Day (11hrs)</option>
				<option value = '12'>Whole Morning (6hrs)</option>
				<option value = '17'>Whole Afternoon (6hrs)</option>
				<option value = '32'>Whole Evening (3hrs) 7:30pm to 9:30pm</option>
				<option value = '35'>Half Evening Early (1.5hrs) 6:00pm to 7:00pm</option>
				<option value = '37'>Half Evening Late (1.5hrs) 7:30pm to 9:00pm</option>
				<option value = '42'>Evening Tuition (1hrs) 6:00pm to 7:00pm</option>
				<option value = '45'>Evening Tuition (1hrs) 7:00pm to 8:00pm</option>
				<option value = '47'>Evening Tuition (1hrs) 8:00pm to 9:00pm</option>
			</select>
			<label for=''>Subject: </label>
			<select id='subject' name='subject' class='formContent'style='width:200px' placeholder='Subject'>
				<option value = 'Childcare'>Childcare</option>
				<option value = 'Mathematics'>Mathematics</option>
				<option value = 'English'>English</option>
				<option value = 'Reading'>Reading</option>
				<option value = 'Biology'>Biology</option>
				<option value = 'Chemistry'>Chemistry</option>
				<option value = 'Physics'>Physics</option>
				<option value = 'CombinedScience'>Combined Sciences</option>
				<option value = 'InformationTechnology'>Information Technology</option>
				<option value = 'BusinessAdministration'>Business Administration</option>
				<option value = 'ProjectManagement'>Project Management</option>
				<option value = 'Bookkeeping&Budgeting'>Bookeeping & Budgeting</option>
				<option value = 'Accounting'>Accounting</option>
				<option value = 'CreativeWriting'>Creative & Business Writing</option>
				<option value = 'Other'>Other - please detail in notes field.</option>
			</select></br>
			<label for=''>Session Type: </label>
			<select id='group' name='group' class='formContent'style='width:150px' placeholder='Group Type'>
				<option value = 'Grp'>Group</option>
				<option value = 'Ind'>Individual</option>
			</select>

			<label for=''>Email : </label>
			<input type ='text' name='email' class='formContent'  placeholder='Contact Email: '>
			<input type ='text' name='message' class='formTextArea' style='width:93%; height: 50px; overflow-y:auto'  placeholder='Any other information regarding this session (optional)'>
			<button class='formButton' type='submit' style='float: right; margin: 20px; color:#25542b' name='slotbk-submit'>Book</button>
		 
		</form>

	</div>
	
</body>
</html>