<?php 


?>


<!DOCTYPE html>
<html lang='en'>
<head>
	
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width'>

	
	<title>LI_Navigation . The Den Kettering</title>
</head>

<body>


	  <nav class="navbar">


		  <a href="index.php">Home</a>
		  
		  <div class="dropdown">
			<button class="dropbtn">The Den
			</button>
			
			<div class="dropdown-content">
			<a href="contentOpen/what.php">What</a>
			<a href="contentOpen/where.php">Where</a>
			<a href="contentOpen/how.php">How</a>
			</div>
		  </div>
		  
		  <div class="dropdown">
			<button class="dropbtn">Bookings
			  <i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
			
			<?php 
				if($_SESSION['verified'] = 'Y'){
					echo "
					<a href='forms/bookingsCalendar.php'>Make a Booking</a>
					<a href='contentPrivate/bookingsReview.php'>Review your bookings - printable</a>
					
					<a href='forms/ofstedLandingPage.php'>Leave Feedback for Ofsted</a>";
				}
				else{
					
					echo "<a class='formText'>'Thank you for registering your account with us. </br>To make or view your bookings we will email you a conformation as soon as your account is confirmed. Thank you.'</a>";
				}
			?>
		   
			</div>
		  </div>
			
		  <div class="dropdown">
			<button class="dropbtn">Oversight
			  <i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
			  <a href="contentPrivate/ofsted_li.php">Ofsted</a>
			  <a href="contentPrivate/ncc_li.php">Northamptonshire Childrens Services</a>
			  <a href="contentPrivate/info_li.php">Information update </a>
			</div>
		  </div>
		  <a href="forms/contactForm.php">Leave Feedback</a>
	</nav>


</body>
</html>