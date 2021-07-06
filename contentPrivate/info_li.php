<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width initial-scale=1.0'>
	<base href='http://localhost/TheDen/'>
	<link rel='Stylesheet' href='css/styles.css'>
	<title>Information Tabs . The Den Kettering</title>
</head>

<body>
	
	<?php 	include_once '../partPages/header.php';	?>

	<div class='spanTitleCenter' >Your Information & What we do with it. 
	
		<p class='pageText'>We are required to hold some data about you for regulating bodies and to follow best practice guidelines from other advisory bodies. </br>This page explains what information we keep and why. If you have any questions we will be happy to talk about your query. </br>
	</p>
	</div>

<div >
<button class="tablink" onclick="openPage('Policy', this)"id="defaultOpen">Our Policies</button>
<button class="tablink " onclick="openPage('Learning', this)">EY Journey</button>
<button class="tablink" onclick="openPage('Ofsted', this )">Ofsted</button>
<button class="tablink" onclick="openPage('NCC', this)" >NNC</button>
<button class="tablink" onclick="openPage('Business', this)">Business Data</button>
</div>



	<div id='Ofsted' class='tabcontent'>
		
		<div class='grid'>
			<div class='leftColumn'>
				<p class='pageText'>Information that Ofsted require on an Ad Hoc basis</p>
				<ul >
					<li>
						<a class='pageText'  href='assets/policies/Complaints Policy.pdf' target=' _blank'>Access to complaints, process and proceedure documents including all forms of documentation<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a>
					</li>
					<li>
						<a class='pageText' href='assets/policies/The Den Accident and Emergency Policy.pdf' target=' _blank'>Accident Reports including all visits to hospital and or medical professionals while the child is in my care.</a>
					</li>
					<li>
						<a class='pageText'>Access to attendance records over any given time period</a>
					</li>
					<li>
						<a class='pageText'>Access to EY Learning Journey Records including Parental Feedback.</a>
					</li>
				</ul>
			
			</div>
			
			<div class='rightColumn'>
				<p class='pageText'>Information that Ofsted require to be available to parents on request</p>		
				<ul>
					<li>
						<a class='pageText'  href='assets/policies/Complaints Policy.pdf' target=' _blank'>Complaints Policy<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a>
					</li>
					<li>
						<a class='pageText' onclick="mySnackbar()">Inspection Report</a>
						<div id="snackbar" class='pageText'>We don't have a report yet as we haven't been inspected. As soon as we have one we will share it here. </div>
					</li>
				</ul>
				
			</div>
		</div>
	</div>
	
	
	<div id='NCC' class='tabcontent' >
		<div class='grid'>
		
		<div class='leftColumn'>
			<p class='pageText'>Information that NNC require on a regular basis.</p> 
			<ul>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='#' target=' _blank'>First Aid Certification<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='#' target=' _blank'>Food Standards Agency Handbook<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'>Reportable Incidences Book</a>
				</li>
			</ul>
		</div>
		
		<div class='rightColumn'>
		<p class='pageText'> </p>
			<ul>
				<li>
					<a  class='pageText'>Attendance Records in summary</a>
				</li>
				<li>
					<a  class='pageText' >Places available in the setting</a>
				</li>
				<li>
					<a  class='pageText' >Prices being charged for childcare services</a>
				</li>
			</ul>
		</div>
		</div>
	</div>

	<div id="Business" class="tabcontent">
		<div class='grid'>

		<div class='leftColumn'>
			<p>Information held for the running and future planning of the business.</p>
			<ul>
				<li>
					<a style='color:LemonChiffon; text-decoration: none' href='assets/policies/Data Protection Policy.pdf' target=' _blank'>Data Protection Policy<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a>
				</li>
				<li>
					<a style='color:LemonChiffon; text-decoration: none'href='assets/policies/Fees & Admissions Policy 2.pdf' target=' _blank'>General Fees List<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a>
				</li>
				<li>
					<a style='color:LemonChiffon; text-decoration: none' href='assets/templates/#' target=' _blank'>Planned Shutdown dates<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a>
				</li>

			</ul>
		</div>
		<div class='rightColumn'>
			<p></p>
			<ul>
			  <li>
				<a  style='color:LemonChiffon; text-decoration: none' href='assets/templates/Data Sheet Template.pdf' target=' _blank'>Contract Information<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a>
			  </li>
			  <li>
				<a  style='color:LemonChiffon; text-decoration: none'  href='assets/templates/Data Sheet Template.pdf' download>Contract Information<img style='margin-left:10px; height:25px' src='assets/icons/dLoadYellow.ico.png'></a>
			  </li>
			  <li>
				<a  style='color:LemonChiffon; text-decoration: none'  href='assets/templates/Hours Required Template.pdf' target=' _blank'>Hours Required Template<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a>
			  </li>
			  <li>
				<a  style='color:LemonChiffon; text-decoration: none'  href='assets/templates/Hours Required Template.pdf' download>Hours Required Template<img style='margin-left:10px; height:25px ' src='assets/icons/dLoadYellow.ico.png'></a>
			  </li>
			</ul>
		</div>
		</div>
	</div>

	<div id="Policy" class="tabcontent">
		<div class='grid'>
		
		<div class='leftColumn'>
			<p class='pageText'>Our Policies, for sharing. If you have a confirmed account you are welcome to view them</p>
			<ul>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='assets/policies/Complaints Policy.pdf' target=' _blank'>Complaints Policy<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a></br>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='assets/policies/H&S Policy.pdf' target=' _blank'>Health & Safety Policy<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a></br>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='assets/policies/The Den Accident & Emergency Policy' target=' _blank' >Accident & Emergency Policy<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a></br>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='assets/policies/The Den Fire Policy.pdf' target=' _blank'>Fire Policy<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a></br>
				</li>
			</ul>
		</div>
	
	
		<div class='rightColumn'>
		<p></p>
			<ul>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'   href='assets/policies/The Den Lost Child Policy.pdf' target=' _blank'>Lost Child Policy<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a></br>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'   href='assets/policies/Uncollected Child Policy.pdf' target=' _blank'>Uncollected Child Policy<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a></br>
				</li>

				<li>
					<a  style='color:LemonChiffon; text-decoration: none'   href='assets/policies/Bad Weather Policy.pdf' target=' _blank'>Bad Weather Policy<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a></br>
				</li>

				<li>
					<a  style='color:LemonChiffon; text-decoration: none'   href='assets/policies/Smoking Policy.pdf' target=' _blank'>Smoking Policy<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a></br>
				</li>
			</ul>
		</div>
		</div>
	</div>	
		
	<div id="Learning" class="tabcontent">
		<div class='grid'>
		
		<div class='leftColumn'>
			<p class='pageText'>It is currently the law that every child in England has to follow the EY Learning Journey pathway when outside of the home before the age of 6. After the age of 6 the schools continue to use this template to assess their progress.  The journey is split into 7 streams. </p></br>
			<ul>
		  		<li>
					<a style='color:LemonChiffon; text-decoration: none'   href='assets/policies/The Den EY Learning Journey Arts.pdf' target=' _blank'>EY Learning Journey Arts<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a>
				  </li>
				  <li>
					<a  style='color:LemonChiffon; text-decoration: none'   href='assets/policies/The Den EY Learning Journey Physical.pdf' target=' _blank'>EY Learning Journey Physical<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a></br>
				  </li>
				  <li>
					<a  style='color:LemonChiffon; text-decoration: none'   href='assets/policies/The Den EY Learning Journey Literacy.pdf' target=' _blank'>EY Learning Journey Literacy<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a>
				  </li>
				  <li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='assets/policies/The Den EY Learning Journey Mathematics.pdf' target=' _blank'>EY Learning Journey Mathematics<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a>
				  </li>
				  <li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='assets/policies/The Den EY Learning Journey PSE.pdf' target=' _blank'>EY Learning Journey PSE<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a></br>
				  </li>
				  <li>
					<a  style='color:LemonChiffon; text-decoration: none'   href='assets/policies/The Den EY Learning Journey The World.pdf' target=' _blank'>EY Learning Journey The World<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a>
				  </li>
				  <li>
					<a  style='color:LemonChiffon; text-decoration: none'   href='assets/policies/The Den EY Learning Journey Communications.pdf' target=' _blank'>EY Learning Journey Communications<img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a>
				  </li>
			</ul>

		</div>

		<div class='rightColumn'>
			
			<ul>
				<p  class='pageText' style='color:LemonChiffon; text-decoration: none' >The Den maintains records of your childs progress in with our scrapbook system, we think that this provides a bank of evidence that can be assessed or used in discussions with other professionals regarding your childs progress. We ask as part of our relationship with you the parent that we have regular feedback meetings with both parents, if possible where we will share this work with you and look forward to your comments.</p>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='#' target=' _blank'>Scrapbook </a>
				</li>
				<li>
				<a  style='color:LemonChiffon; text-decoration: none'  href='#' target=' _blank'>Our database records which include our assessments of your childs work </a>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='#' target=' _blank'>Your comments and feedback that you upload to our database. <img src='assets/icons/formYellow.ico.png'style='height:25px'></a>
				</li>
			</ul>		
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
  document.getElementById(pageName).style.display = "grid";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();



function mySnackbar() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
	
	
<footer class='footerText'>
	
</footer>


</body>

</html>