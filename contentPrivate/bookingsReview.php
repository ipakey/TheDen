<?php
	
	include_once '../includes/functions.php';
	include_once '../includes/functionsBooking.inc.php';
	/*************** Get date information ***********/		
	$year = date('Y');
	$week = date('W');
	$month = date('mon');

?>

<!DOCTYPE html>
 <html lang="en">
  <head>
 
  <meta name ='bookingForm' content='Online booking form The Den Kettering'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href='http://localhost/TheDen/'>
	

    <title>Sessions booked . The Den Kettering </title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>

<body>

<?php 	include_once '../partPages/header.php';
		$user = $_SESSION['userId'];
		//echo $year.'  :  '.$week.'  :  '.$user;
		//$bkd = findBookingsReport($week, $year, $user);
	
		
	?>

<div class='spanTitleCenter'>Sessions Booked</div>

	<div class='flex-container'>

		<section class='rows'>
		<form class = 'pageText' method='post' action=''>
			<input class='pageText' type="radio" name="wk" value="wk">This Week</input>
			<input class='pageText'type="radio" name="wk" value="mt">One month Ahead</input>
			<input class='pageText'type="radio" name="wk" value="all">All Records</input>
			<button type ="submit" name="bookingsReptSubmit">Select</button>
		
	<?php
	if (isset($_POST['bookingsReptSubmit'])) {
		if(isset($_POST['wk']))
		{
			if($_POST['wk'] == 'wk'){$len = ' Week';}
			elseif($_POST['wk'] == 'mt'){$len = ' Month ';}
			elseif($_POST['wk'] == 'all'){$len = ' All Records';}
			else{$len = ' no selection made yet';}
		echo "/n You have selected : ".$len;  //  Displaying Selected Value
		$wk = $_POST['wk'];
		}
		$dates = getStartAndEndDateRpt($wk);
		//echo ' dates found ';
		
		$booked = findBookingsReport($dates, $user);
		//echo ' bookings found ';
		
		$timeSlotRpt = displayTimeSlotReport($booked);
	}
	?>
		
			<div class='columns'>
				
				<?php
				$timeSlotRpt = 0;
				if($timeSlotRpt = null){?>
					<p class='pageText'>Please select the time period you want to see:</p> <?php
				}else{?>
					 <?php
					//echo var_dump($timeSlotRpt);
				//echo $timeSlotRpt;
				}

				?>
				
			</div>
		</section>
	</div>	



</body>
</html>