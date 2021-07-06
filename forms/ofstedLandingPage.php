<?php



?>

<!DOCTYPE html>
<html lang='en'>
<head>
	<meta name='viewport' content='width=device-width initial-scale=1.0'>
	
	
	
	 <title>Contact Form . The Den Kettering</title>

</head>

<body>
	<?php include_once '../partPages/header.php';?>
	
	<div class='spanTitleCenter'>Leave Feedback for Ofsted about The Den</div>
	<div class='textAreaForm' style='color:LemonChiffon'>
			<p class='pageText' style='width:95%'>Please use this form to share your feedback with Ofsted. 
			 We are assuming that you want to share this feedback with Ofsted, if you don't want your name or details attached to this feedback please check the anonmyise contact button.</br>
					
			</p>
	
		
	 <form class='formBlockCenter' style='width: 30%' action='includes/ofstedSubmission.inc.php' method ='post'>
	

		<label for="ofsted" class='formButtonText' style='width:20%; color: LemonChiffon'>Anonymise your comment?</label>	
		
		<label for="ofsted" class='formButtonText' style='width:3%; color: LemonChiffon'>Yes</label>
			<input type="radio" name="ofsted" id="Yes" value="Y">
			<label for="ofsted" class='formButtonText' style='width:3%; color: LemonChiffon'>No</label>
			<input type="radio" name="ofsted" id="No" value="N" checked>
		
		<button class='formButton' style='margin-top: 25px; padding: 5px; margin-bottom:5px; margin-right: 35%'  type='submit' name='submit-oLanding'>Confirm your choice and move to submission form</button>	

	 </form>
	 
	 		
	
		<p class='pageText' style='margin-left: 25%'>Whatever you say Thank you for your feedback.	</p>
	 </div>
	 <footer>
	<?php include_once '../partPages/footer.php';?>
</footer>
 </body>
 </html>
	

