<!DOCTYPE html>
<html lang='en'>
<head>
	<meta></meta>
	<meta name='viewport' content='width=device-width initial-scale=1.0'>		    
	<base href='http://localhost/TheDen/'>
	<link rel='Stylesheet' href='css/styles.css'>
	
	<title>Footer . The Den Kettering</title>
</head>

<body>




<div class='footer'>

	<a class='footerMid'> 
		
	</a>

	<div class='footerLeft'> 
		<p>Ofsted Number: 236664</br>
		we live at Ferrostones Northampton Rd Kettering</p>
	</div>

	<div class='footerRight'> 
	
	<a class='formButton' href='forms\contactForm.php' alt='Contact form'>Contact Us here</a>
	<?php
		if(isset($_SESSION['userId'])){?>
	<a class='formButton' href='forms\bookingsCalendar.php' alt='Booking Calendar'>Book a session here</a>
		</div>
		<?php } ?>
		
</div>


</body>
</html>


