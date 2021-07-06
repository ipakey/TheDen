
<head>
		
		<link rel='Stylesheet' href='../styles.css'>
		<meta name='viewport' content='width=device-width initial-scale=1.0'>
	    <title>Where . The Den Kettering</title>
</head>

<body>
		<?php 	
			include_once '../partPages/header.php';
			

			?>


 <div class='formHeaderText' style='color:LemonChiffon'>Where</div>

			
	
<head>
		
		<link rel='Stylesheet' href='style.css'>
		<meta name='viewport' content='width=device-width initial-scale=1.0'>
		<
	    <title> Gallery . The Den Kettering</title>
</head>

<body>
		<?php 	
		?>
 
<div class='Upload'>
 <?php 
	if (isset($_SESSION['user'])){
		include_once 'contentPrivate/gallery.php';
	}
	else{
		echo "<div class='sideNav gallery-upload gallery-add'>
	
		<form action='includes/gallery-upload.inc.php' method='post' class='sidnav' enctype='multipart/form-data'>
			<input type='text' name='filename' placeholder='File name...'>
			<button type='submit' name='submit' class='formButton'>Upload</button>
			<input type='text' name='filetitle' placeholder='Image title...'>
			<input type='text' name='filedesc' style='width: 45%' placeholder='Image Description...'>
			<input type='file' name='file' style='width:45%' class='button'>
		</form> </div>";
	}
?>

	<div class='textAreaForm' style='color:LemonChiffon'>
		<p>These pictures are all children that are connected with The Den Kettering. 
		We would ask that you help us to keep these children safe from harm by not downloading or using these pictures. 
		If you would like copies of any of these pictures then please get in touch using our contact form and we can supply you with a copy. 		
		</p>
	</div>
</div>

<section class='gallery-container'>

	<a class='gallery-img'
		<div><img href='assets/facilities/theden.jpg' ></div>
		<h4>This is The Den</h4>
		<p>Robust and usefull building</p>
	</a>
	
	<a href='assets/facilities/books.jpg' class='gallery-img'>
		<div></div>
		<h4>Free reading bookshelf</h4>
		<p>This is a paragraph</p>
	</a>
	<a href='assets/facilities/cooking.jpg' class='gallery-img'>
		<div></div>
		<h4>Food preparation area</h4>
		<p>This is a paragraph</p>
	</a>
	
	<a href='assets/facilities/gate security.jpg' class='gallery-img'>
	<div></div>
		<h4>Secure site measures</h4>
		<p>This is a paragraph</p>
	</a>
	<a href='assets/facilities/gatesecurity.jpg' class='gallery-img'>
		<div></div>
		<h4>Remote entry approval</h4>
		<p>This is a paragraph</p>
	</a>
	
	<a href='assets/facilities/handwashing.jpg' class='gallery-img'>
		<div></div>
		<h4>Washing station</h4>
		<p>This is a paragraph</p>
	</a>
	<a href='assets/facilities/mainroom.jpg' class='gallery-img'>
		<div></div>
		<h4>This is our main room</h4>
		<p>This is a paragraph</p>
	</a>
	
	<a href='assets/facilities/puzzelsandgames.jpg#' class='gallery-img'>
	<div></div>
		<h4>This is a Title</h4>
		<p>This is a paragraph</p>
	</a>
</section>




<footer class=''>
	
</footer>
</body>
</html>
	
	
<footer class=''>
	<?php include_once '../partPages/footer.php';?>
</footer>
</body>
</html>