<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width initial-scale=1.0'>
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
<button class="tablink" onclick="openPage('NCC', this)" >NCC</button>
<button class="tablink" onclick="openPage('Business', this)">Business Data</button>
</div>



	<div id='Ofsted' class='tabcontent'>
		
		<div class='grid'>
			<div class='leftColumn'>
				<p class='pageText'>Information that Ofsted require on an Ad Hoc basis</p>
				<ul >
					<li>
						<a class='pageText' style='color:LemonChiffon; text-decoration: none' href='#'>Access to complaints log, process and proceedure documents including all forms of documentation</a>
					</li>
					<li>
						<a class='pageText' style='color:LemonChiffon; text-decoration: none' href='#'>Accident Reports including all visits to hospital and or medical professionals while the child is in my care.</a>
					</li>
					<li>
						<a class='pageText' style='color:LemonChiffon; text-decoration: none' href='#'>Access to attendance records over any given time period</a>
					</li>
					<li>
						<a class='pageText' style='color:LemonChiffon; text-decoration: none'   href='#'>Access to EY Learning Journey Records including Parental Feedback.</a>
					</li>
				</ul>
			
			</div>
			
			<div class='rightColumn'>
				<p class='pageText'>Information that Ofsted require to be available to parents on request</p>		
				<ul>
					<li>
						<a class='pageText' style='color:LemonChiffon; text-decoration: none'  href='#'>Complaints Policy</a>
					</li>
					<li>
						<a class='pageText' style='color:LemonChiffon; text-decoration: none'  href='#'>Inspection Report</a>
					</li>
				</ul>
				
			</div>
		</div>
	</div>
	
	
	<div id='NCC' class='tabcontent' >
		<div class='grid'>
		
		<div class='leftColumn'>
			<p class='pageText'>Information that NCC require on a regular basis.</p> 
			<ul>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='#' target=' _blank'>First Aid Certification</a>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='#' target=' _blank'>Food Standards Agency Handbook</a>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='#' target=' _blank'>Reportable Incidences Book</a>
				</li>
			</ul>
		</div>
		
		<div class='rightColumn'>
		<p></p>
			<ul>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='#' target=' _blank'>Attendance Records in summary</a>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='#' target=' _blank'>Places available in the setting</a>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='#' target=' _blank'>Prices being charged for childcare services</a>
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
					<a  style='color:LemonChiffon; text-decoration: none'  href='#' target=' _blank'>Data Protection Policy</a>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='#' target=' _blank'>Fees List</a>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='#' target=' _blank'>Planned Shutdown dates</a>
				</li>

			</ul>
		</div>
		<div class='rightColumn'>
			<p></p>
			<ul>
			  <li>
				<a  style='color:LemonChiffon; text-decoration: none' href='assets/templates/Data Sheet Template.pdf' target=' _blank'>Contract Information</a>
			  </li>
			  <li>
				<a  style='color:LemonChiffon; text-decoration: none'  href='assets/templates/Data Sheet Template.pdf' download>Contract Information<img style='margin-left:10px; height:25px' src='assets/icons/dLoadYellow.ico.png'></a>
			  </li>
			  <li>
				<a  style='color:LemonChiffon; text-decoration: none'  href='assets/templates/Hours Required Template.pdf' target=' _blank'>Hours Required Template</a>
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
					<a  style='color:LemonChiffon; text-decoration: none'  href='#'>Complaints Policy</a></br>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='#'>Health & Safety Policy</a></br>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='#' >Accident & Emergency Policy</a></br>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='#'>Fire Policy</a></br>
				</li>
			</ul>
		</div>
	
	
		<div class='rightColumn'>
		<p></p>
			<ul>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'   href='#'>Lost Child Policy</a></br>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'   href='#'>Uncollected Child Policy</a></br>
				</li>

				<li>
					<a  style='color:LemonChiffon; text-decoration: none'   href='#'>Bad Weather Policy</a></br>
				</li>

				<li>
					<a  style='color:LemonChiffon; text-decoration: none'   href='#'>Smoking Policy</a></br>
				</li>
			</ul>
		</div>
		</div>
	</div>	
		
	<div id="Learning" class="tabcontent">
		<div class='grid'>
		
		<div class='leftColumn'>
			<p class='pageText'>It is currently the law that every child in England has to follow the EY Learning Journey pathway when outside of the home before the age of 6. This journey is split into 7 streams. </p></br>
			<ul>
		  		<li>
					<a  style='color:LemonChiffon; text-decoration: none' href='#'>EY Learning Journey Arts</a>
				  </li>
				  <li>
					<a  style='color:LemonChiffon; text-decoration: none'   href='#'>EY Learning Journey Physical</a></br>
				  </li>
				  <li>
					<a  style='color:LemonChiffon; text-decoration: none'   href='#'>EY Learning Journey Literacy</a>
				  </li>
				  <li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='#'>EY Learning Journey Mathematics</a>
				  </li>
				  <li>
					<a  style='color:LemonChiffon; text-decoration: none'  href='#'>EY Learning Journey PSE</a></br>
				  </li>
				  <li>
					<a  style='color:LemonChiffon; text-decoration: none'   href='#'>EY Learning Journey The World</a>
				  </li>
				  <li>
					<a  style='color:LemonChiffon; text-decoration: none'   href='#'>EY Learning Journey Communications</a>
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
</script>
	
	
<footer class='footerText'>
	
</footer>


</body>

</html>