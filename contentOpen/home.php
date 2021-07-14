<html lang='en'>
<head>
	<meta tags >
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width initial-scale=1.0'>
	<base href='http://localhost/TheDen/'>
	

	    <title>Home Page . The Den Kettering</title>
</head>
<body>
 <div class='spanTitleCenter'>Home Page</div>
 
 <div class='flex-container'>

	<section class='rows'>
	<div class='columns'>
		<div>
			<img src="assets/facilities/theden.jpg" class="mySlides" alt="theden">
			<img src="assets/facilities/thedendoor.jpg" class="mySlides" alt="door">
			<img src="assets/facilities/puzzlesandgames.jpg" class="mySlides" alt="games" >
			<img src="assets/facilities/handwashing.jpg" class="mySlides" alt="handwashing" >
			<img src="assets/facilities/mainroom.jpg" class="mySlides" alt="main" >
			<img src="assets/facilities/books.jpg" class="mySlides" alt="books" >
			<button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
			<button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
			
		</div>
		<div>
			
		</div>
		</div>
		<div class='columns'>
			<p class='pageText'>Welcome to The Den trading as The Den (Kettering). We offer your child a reliable, flexible term time and holiday childcare service to help you navigate life. </p>
			<p class='pageText'>
			We do this by providing the very best tailored care for our families in safeguarding and security, but more importantly we enjoy the company of active kind children, and do everything we can to encourage these traits in our everyday activities. Fully Ofsted regulated and a PACEY member dedicated to the continual development of your child and ourselves, we think you couldn't find a better place to bring your child. Please have a look through our gallery of images to see what we are offering.</p>
			
			<p class='pageText' style='text-align: left'>For our pricelist, to arrange a visit or any other questions please use our <a class='slotsButton' href='forms\contactForm.php' alt='Contact form' style='text-decoration: none; color: LemonChiffon'>Contact Us here</a> button.</p>
		</div>
		<div class='rows'>
		
			
			<button class='snackBarButton' onclick="mySnackbar()">Feeling left behind because of lockdown?<img class='denImage' src='assets/images_OC/babi.gif' style='width=280px; height= 150px'></button>

				<div id="snackbar">Check out our Tutoring classes <a class='snackBarButton' href='forms\contactForm.php' alt='Contact form' style='text-decoration: none; color: LemonChiffon'>Contact Us here</a></div>

		</div>
	</section>

	<section class='rows' style='margin-bottom: 25px'>
		<div class='columns'>
	
		<div class='rows'><img src ='assets/images_OC/playYellow.png'   style='width: 20%; margin-bottom: 25px; padding-right: 40px'>
		
		<p class='pageText'>I have over 30 years of working with children in a voluntary capacity, and know that no one does anything perfectly every time. So I don't laugh at anyone for trying, I offer the space and help to practice, and improve skills and knowledge of all sorts. And provide a variety of learning methods for those who find something difficult. We allow your child to have fun while being safe and engaged with their own lives. We have the time to help, and we use it well.</p>
	
		<p class='pageText'>We offer a routine that is full of activity, learning and relaxation, that fits around the school day, and your work day. You can book sessions online or schedule them by a longer term agreement.</p>
		</div>
		</div>
		
	</section>

</div>
</body>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusDivs(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
 // var dots = document.getElementsByClassName("demo");
 // var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  //for (i = 0; i < dots.length; i++) {
      //dots[i].className = dots[i].className.replace(" active", "");
 // }
  slides[slideIndex-1].style.display = "block";
  //dots[slideIndex-1].className += " active";
  //captionText.innerHTML = dots[slideIndex-1].alt;
}


function mySnackbar() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
</html>