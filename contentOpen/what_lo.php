<!DOCTYPE html>
<html lang='en'>

<head>
		<meta name='viewport' content='width=device-width initial-scale=1.0'>
		<title>Information . The Den Kettering</title>
		<link rel='Stylesheet' href='../styles.css'>

</head>

<body>
	
	<?php 	
		include_once '../partPages/header.php';
	?>

	<span class='formTextItalicTab'  style='color:LemonChiffon'>Our Offer</span>

<div>
<button class="tablink" onclick="openPage('Work', this)"id="defaultOpen" >How does it all work?</button>
<button class="tablink" onclick="openPage('Mornings', this)">Mornings</button>
<button class="tablink" onclick="openPage('Afternoon', this)">Afternoons</button>
<button class="tablink" onclick="openPage('Holidays', this )">Holidays</button>

</div>

<div class='page-content'>
		
	<div id="Holidays" class="tabcontent columns">
		<i style='font-size: 22px'>Our holiday service</i></br>
		<p style='font-size: 18px'>All day sessions are 7am to 6pm.</br>If arranged in advance can be split into two half day sessions.</br>All day sessions are offered in the holidays, run like the termtime sessions with routine, and order, Seasoned by interesing trips and outings, and a healthy dose of exericse and fun. </p>
	
	</div>

	<div id="Work" class="tabcontent columns">
			<p style='font-size: 22px'>We have three basic sessions:</p>
			<p style='font-size: 26px'>Mornings, Afternoons & All Day</p></br>
			<i style='font-size: 22px'>Our term time service</i></br>
			<p style='font-size: 18px'>A before and after school service, you can access one or both sessions, depending on how your own day is set up, and indeed you don’t have to have every day the same. <br>They are made up of a morning session and an afternoon session. comprising of 5 hours of care.</p></br>			
			<i style='font-size: 22px'>Morning sessions</i> </br>
			<p style='font-size: 18px'>are before school in the term time. This accounts for 2 hours care 
			</br> Breakfast is served in this session</p></br>
			<i style='font-size: 22px'>Afternoon sessions</i></br>
			<p style='font-size: 18px'>during termtime are from 3pm to 6pm  equalling three hours of care. 
			</br>Tea is served in this session</p>
			</br>
			<i style='font-size: 22px'>Our holiday service</i></br>
			<p style='font-size: 18px'>starts at 7am and end at 6pm, equating to 11 hours of care and includes all the extra odd days, such as training days and polling days. It doesn't include Bank Holidays unless by special arrangement.  </p></br>		
			<p style='font-size: 18px'>In addition to the breakfast and tea meals offered in the two sessions in the middle of the day we will serve a dinner meal. </p>
	</div>
	
	<div id="Mornings" class="tabcontent columns">
		<i style='font-size: 22px'>Morning sessions are from 7am to 9am</i>
		<p style='font-size: 18px'>	Before school:<br>includes breakfast from our standard menu, served between 7:15 & 8:10am. It also includes transfer to school in plenty of time for an excellent start to the day. We open at 7am and will take in any time after that until 8:30am.</p>
	</div>
	
	<div id="Afternoon" class="tabcontent columns">
		<i style='font-size: 22px'>Afternoon sessions are from 3pm to 6pm.</i>
		<p style='font-size: 18px'>	After school:<br>we pick up from the school gate and will take care of your child until 6pm.<br>Our general plan for afternoon sessions is from 3:30 to 4:30 we will be in one of our three local parks (unless the weather is truly dreadful) where we utilise a mixture of park furniture and team games, to let off steam in a safe environment. </br>Then walking back to The Den, we will provide tea, from 4:45ish to 5:15ish which will contain a savoury snack, a sweet snack or equivalent and a drink from our planned menus. <br>After which we will have child chosen activities with story time, jigsaws, quiet reading, storytelling circle, writing, art activities, any homework that they have been given, and social time with their peers. </p>
	</div>
</div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
	
	
<footer class='footerText'>
		<?php 	
		include_once '../partPages/footer.php';
	?>
</footer>


</body>

</html>