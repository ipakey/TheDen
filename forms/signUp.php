<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width initial-scale=1.0'>
		<base href='http://localhost/TheDen/'>
		<link rel='Stylesheet' href='css/styles.css'>
		
	
			<title>Sign Up . The Den Kettering</title>
	</head>

	<body>

		<?php include_once '../partPages/header.php';?>
		

		<div class=''>

			<div class='spanTitleCenter'>Register for an Account
			</div>
			<div class='textAreaForm' style='align-items  : center; color:LemonChiffon; width:65%'>
				<p class='pageText'>Thanks for coming to this page, </br> please fill in all the fields before pressing the Sign Up button.</br> The information you proide in this form will be used for administration purposes within The Den (Kettering) only</br> and will not be shared (unless legally required) or resold for any reason. 
				</p>
			</div>
			<form class='formBlockCenter' action='includes/signUp.inc.php' method ='post'>
				<input type ='text' name='name' class='formContent'  style='width: 35%'  placeholder='Full Name: '>
				<input type ='text' name='user' class='formContent'  style='width: 35%' placeholder='The Name you want to be addressed as: '>
				<input type ='text' name='mail' class='formContent' style='width:75%' placeholder='Your Email Address: '></br>
				
				<input type ='password' name='password' class='formContent' style='width:35%'  placeholder='Password: '>
				<input type ='password' name='confirmpassword' class='formContent' style='width: 35%'  placeholder='Please confirm your password: '>
				<button class='formButton' type='submit' style='float: right; margin: 20px' name='submit-signup'>Signup</button>
			</form>
			<div class='textAreaForm' style='align-items  : center; color:LemonChiffon; width:65%'>
		
				<?php 
					if(isset($_GET['error'])){
						if($_GET['error']== 'emptyinput'){
							echo '<p>Opps Something went wrong, please fill in all fields to sign up.</p>';
						}
						if($_GET['error']=='invalidknwas'){
							echo '<p>Opps Something went wrong, we only allow western letters and numbers as part of our username, please choose another variant on your username.</p>';
						}
						if($_GET['error']=='invalidemail'){
							echo "<p>Opps Something went wrong, please look at the email you have entered,  it doesn't appear to be in the right format</p>";
						}
						if($_GET['error']=='pwdnomatch'){
							echo '<p>Opps Something went wrong, please reenter your password and confomation making sure they are the same. </p>';
						}
						if($_GET['error']=='usertaken'){
							echo "<p>Opps Something went wrong, I'm sorry we already have a user with that name or email address please choose a different one, or use our forgotton password button</p>";
						}
						if($_GET['error']=='none'){
							echo '<p>Congratulations you have sucessfully signed up. Please make a note of your password and username and "Log in" to enter our site.</p>';
						}
						if($_GET['error']=='none'){
							echo '<p>Congratulations you have sucessfully signed up. Please make a note of your password and username and "Log in" to enter our site.</p>';
						}
						if($_GET['error']=='stmtfailed'){
							echo '<p>Opps Something went wrong, please try again if the error persists please let us know through the contact form using the following error code: </p>';
						}
					}
				
				
				?>
				
			</div>
		</div>
			
		<footer>
		<?php include_once '../partPages/footer.php';?>
		</footer>
	</body>
</html>