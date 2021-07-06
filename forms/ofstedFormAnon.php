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
	
	<div class='spanTitleCenter'>Leave Feedback for Ofsted about The Den</div>
	<div class='textAreaForm' style='color:LemonChiffon'>
			<p class='pageText' style='width:95%'>Please use this form to share your feedback with Ofsted. 
			 We are assuming that you want to share this feedback with Ofsted, if you don't want your name or details attached to this feedback please check the anonmyise contact button.</br>
			Whatever you say Thank you for your feedback.			
			</p>
	</div>
		
	 <form class='formBlockCenter' action='includes/ofstedSubmission.inc.php' method ='post'>
	
		<button class='formButton' style='margin-top: 5px; padding: 5px; margin-bottom:5px'  type='submit' name='submit-ofstedAnon'>Send Message</button>
	 
		<input type ='text' name='subject' class='formContent' style='width:93%' placeholder='Subject'>
		<input type ='text' name='message' class='formTextArea' style='width:93%; height: 50px; overflow-y:auto'  placeholder='Message'>
		<input type ='blob' name='evidence' class='formTextArea formButtonText' style='width:94%; height: 50px; overflow-y:auto'  placeholder='Add other files/ evidence here'>
		

	 </form>
	 
	 <footer class=''>
	<?php include_once '../partPages/footer.php';?>
</footer>
 </body>
 </html>
	

