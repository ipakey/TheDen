<?php



?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width initial-scale=1.0'>
    <link rel='Stylesheet' href='css/styles.css'>

 
	    <title>Log In . The Den Kettering</title>
</head>

<body>

	<?php include_once '../partPages/header.php';?>
	

 <div class=''>

	 <div class='spanTitleCenter'></div>
		 <form class='formBlockCenter' action='includes/logIn.inc.php' method ='post'>
			<input type ='text' name='name' class='formContent'  placeholder='User name/ Email '>
			<input type ='password' name='password' class='formContent' style='width:33%'  placeholder='Password: '>
			<button class='formButton' type='submit' style='float: right; margin: 20px' name='submit-signup'>Log In</button>
		 
		 </form>


	
	</div>
</body>

</html>