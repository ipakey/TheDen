<?php



?>

<!DOCTYPE html>
<html lang='en'>
<head>
	<meta name='viewport' content='width=device-width initial-scale=1.0'>
	
	
	<link rel='Stylesheet' href='css/styles.css'>
	 <title>Contact Form . The Den Kettering</title>

</head>

<body>
	<?php include_once '../partPages/header.php';?>
	
	<div class='spanTitleCenter'>Contact Page</div>
	<div class='textAreaForm' style='color:LemonChiffon'>
			<p styel='width:95%'>Please use this form to contact The Den Kettering. 
			Please make it clear in the message what you need from us and any other contact details you would like to share e.g. a prefered phone number.
			We will respond to this email address within 2 working days. Thank you for your request.			
			</p>
	</div>
		
	 <form class='formBlockCenter' action='includes/contactform.inc.php' method ='post'>
		<input type ='text' name='name' class='formContent' style='width:17%' placeholder='Your full name'>
		<input type ='text' name='mail' class='formContent' style='width:17%'  placeholder='Your Email Address'>

		<label for="ofsted" class='formButtonText' style='width:15%; color: LemonChiffon'>Share this contact with Ofsted?</label>
		<label for="ofsted" class='formButtonText' style='width:3%; color: LemonChiffon'>Yes</label>
		<input type="radio" name="ofsted" id="Yes" value="Y">
		<label for="ofsted" class='formButtonText' style='width:3%; color: LemonChiffon'>No</label>
		<input type="radio" name="ofsted" id="No" value="N">

		<button class='formButton' style='margin-top: 5px; padding: 5px; margin-bottom:5px'  type='submit' name='submit-contact'>Send Message</button>
	 
		<input type ='text' name='pMethod' class='formContent' style='width:39%' placeholder='Your prefered method of contact from The Den. '>
		<input type ='text' name='learner' class='formContent' style='width:49%' placeholder='If you are contacting us about someone else (e.g. your child, or your company name)'>
		<input type ='text' name='subject' class='formContent' style='width:93%' placeholder='Subject'>
		<input type ='text' name='message' class='formTextArea' style='width:93%; height: 50px; overflow-y:auto'  placeholder='Message'>
		<input type ='blob' name='evidence' class='formTextArea formButtonText' style='width:94%; height: 50px; overflow-y:auto'  placeholder='Add other files/ evidence here'>
		<input type="hidden" id="userId" name="userId" value="$_SESSION['userId']">

	 </form>
	 
	 <footer class=''>
	<?php include_once '../partPages/footer.php';?>
</footer>
 </body>
 </html>
	

