<?php
include_once '../includes/functions.php';
include_once '../includes/functionsBooking.php';



if(isset($_GET['date'])){
	$date = $_GET['date'] ?? $date;
	$timeslot = $_GET['timeslot'] ?? null;
	$month = substr($date, 5, 2);
	$year  =  substr($date, 2,  2);
	//echo $date.'  '.$month.'   '.$year;
}	
	$msg=null;

?>

<!DOCTYPE html>
 <html lang="en">
  <head>
 
  <meta name ='bookingForm' content='Online booking form The Den Kettering'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href='http://localhost/TheDen/'>
	

    <title>Session Booking Slots Available Form </title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>
  <!--	<?php include_once '../partPages/header.php';?>  -->
    <div class="container pageBoarder" >
		<div class='spanTitleCenter'>
			<h4 class="formHeaderText" >
				Sessions available for: <?php echo '  '.date('D d M Y', strtotime($date)); ?>
			</h4>
		</div>		
			<?php 		
			
			
		
			$booked = array();
			$inds = array();
			$groups = array();
			
			
			/****************************call functions regarding previous bookings ********************/
			
			$date_type = findDayType($date);
			$len = count($date_type);
			$schs= findRoundNames($date_type, $len);
			$set = findTypeRounds($date_type, $len);
			$setCount = count($set);

			$timeslot = findTimeSlotArray($set, $setCount, $date);
			$booked = returnBookings($date); 
			if($len !== 0){					
//echo var_dump($booked).' $booked in bookingForm L.53 <-- ';
				/**********************create groups of booking types ****************/
				$inds = indBookings($date, $booked);
//echo var_dump($inds).' $inds in bookingForm L.55 <-- ';
				$groups=grpBookings($date, $booked);
//echo var_dump($booked).' $groups in bookingForm L.57 <-- ';
				$i=0;
			}
		/***************** group header identification and or null slots message ************************/
		?>
		<div class='pageText spanTitleCenter'>
		<?php
		foreach($timeslot as $tsi){ 
			if($i<$setCount){
				$slotHeading = $set[$i];
				$sB = 0;
				//echo($slotHeading.$i.$sB.' ## slotheading $i $sB ##');
			}
			$i++;
			if($slotHeading == 'TT' || $slotHeading == 'H'|| $slotHeading == 'TD'){ ?>
				<h4 class="spanFormCenter" >
					Childcare sessions available today:</br></br>
				</br></h4>
			<?php
			}
			elseif($slotHeading == 'DW' || $slotHeading == 'FT' || $slotHeading == 'WC' || $slotHeading == 'WT'|| $slotHeading == 'DT'){?>
				<h4 class="spanFormCenter" >
					</br></br>The Den Tutoring has these sessions available today:</br></br>
				</br></h4>
			<?php
			}
			elseif($slotHeading == 'DW' || $slotHeading == 'FT' || $slotHeading == 'WC' || $slotHeading == 'WT'){?>
				<h4 class="spanFormCenter" >
					</br></br>The Den Tutoring has these sessions available today:</br></br>
				</h4>
			<?php 
			}
			elseif($slotHeading == 'DC' ||  $slotHeading == 'BH'){
				$sB=1;?>						 
				<h4 class="spanFormCenter" >
				</br></br>	We are sorry there are no sessions available today:</br></br>
				</h4>
			<?php
			}	
			elseif($slotHeading == 'DK'){
				$sB=1;?>
				<h4 class="spanFormCenter" >
					</br></br>We are sorry there are no Tutoring sessions available today:</br></br>
				</h4>
			<?php
			}
			elseif($slotHeading == 'WK'){
				$sB=1;?>
				<h4 class="spanTFormCenter" >
				</br></br>We are sorry there are no Childcare sessions available today:</br></br>
				</h4>
			<?php
			}/************ draw out each timeslot ****************/
		
		?>
		</div>

		<div class='row ' style='justify-content: center'>
			<?php	
			//$timeslots= array();()
			if($sB != 1){	
				foreach($tsi as $ts){
					$ss = findSlotNumber($ts);
					//echo $ss;
					//$subject = subject($ts, $booked);
					$slotStatus = checkTimeSlot($ts, $booked);
					//echo $slotStatus;
					if($slotStatus == 'booked'){?>
						<button class='slotBookedButton'  type='text' ><?php echo $ts.'<br> '.$slotStatus; ?>
						<?php	
					}
					else{?>
						<form action='forms/slotBooking.php' method='post'>
							<input method='post' name='date_book' type='hidden' id='date_book' value='<?php echo $date; ?>' > 
							<input method='post' name='ts_book' type='hidden' id='ts_book' value='<?php echo $ts; ?>'>	
							<input method='post' name='uid_book' type='hidden' id='uid_book' value='<?php echo $_SESSION['userId']; ?>'>
							<input method='post' name='ss_book' type='hidden' id='ss_book' value='<?php echo $ss; ?>'>	

							
							<button class='slotsButton'  type='submit' name='booking-submit'><?php echo $ts.'<br> '.$slotStatus; ?></button>
						</form>
					<?php 
					}
				}
			}
		}?>
		</div> 

		<div style='float:right' style='margin-right: 5%'></br></br></br>
			<a class='slotsButton'  type='submit' style='text-decoration: none; color: LemonChiffon' href='forms/bookingsCalendar.php'>Return to Calendar</a>
		</div>
	</div>
  </body>

</html>




