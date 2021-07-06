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

	<span class='formTextItalicTab'  style='color:LemonChiffon'>Your Information & What we do with it. </span>

	<div class='textAreaForm' style='color:LemonChiffon; width:55%'>
		<p>We are required to hold some data about you for regulating bodies and to follow best practice guidelines from other advisory bodies. </br>This page explains what information we keep and why. If you have any questions we will be happy to talk about your query. </br>
		</p>
	</div>

<div>
<button class="tablink" onclick="openPage('Policy', this)"id="defaultOpen">Our Policies</button>
<button class="tablink" onclick="openPage('Learning', this)">EY Journey</button>
<button class="tablink" onclick="openPage('Ofsted', this )">Ofsted</button>
<button class="tablink" onclick="openPage('NCC', this)" >NCC</button>
<button class="tablink" onclick="openPage('Business', this)">Business Data</button>
</div>

<div class='page-content'>
		<div id="Ofsted" class="tabcontent columns">
			<p style='font-size: 18px'>Information that Ofsted require on an Ad Hoc basis</p>
				<ul>
					<li>
						<a>Complaints Policy</a>
					</li>
					<li>
						<a>Inspection Report</a>
					</li>
					<li>
						<a>Access to complaints log, process and proceedure documents including all forms of documentation</a>
					</li>
					<li>
						<a>Accident Reports including all visits to hospital and or medical professionals while the child is in my care.</a>
					</li>
					<li>
						<a>Access to attendance records over any given time period</a>
					</li>
					<li>
						<a>Access to EY Learning Journey Records including Parental Feedback.</a>
					</li>
				</ul>	 
		</div>

		<div id="NCC" class="columns tabcontent">
		<p style='font-size: 18px'>Information that NCC require on a regular basis.</p> 
		<div >
			<ul>
				<li>
					<a>First Aid Certification</a>
				</li>
				<li>
					<a>Food Standards Agency Handbook</a>
				</li>
				<li>
					<a'>Reportable Incidences Book</a>
				</li>
			</ul>
		</div>
		<div >
			<ul>
				<li>
					<a>Attendance Records in summary</a>
				</li>
				<li>
					<a>Places available in the setting</a>
				</li>
				<li>
					<a>Prices being charged for childcare services</a>
				</li>
			</ul>
		</div>
	</div>

	<div id="Business" class="tabcontent">
		<p>Information held for the running and future planning of the business.</p>
		<div class='leftColumn'>
			<ul>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'   target=' _blank'>Data Protection Policy</a>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'   target=' _blank'>Fees List</a>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'   target=' _blank'>Planned Shutdown dates</a>
				</li>

			</ul>
		</div>
	<div class='rightColumnTab'>
	<p>Information we need to form a contract with you. Please feel free to download a copy and be sure you are happy sharing this information with us before comming to see us. </p>
		<ul>
		  <li>
			<a  style='color:LemonChiffon; text-decoration: none'   href='assets/templates/TheContractBasic.pdf' target=' _blank'>Contract Template <img style='margin-left:10px; height:25px ' src='assets/icons/docYellow.ico.png'><img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a>
		  </li>
		  <li>
			<a  style='color:LemonChiffon; text-decoration: none'  href='assets/templates/TheContractBasic.pdf' download>Contract Template <img style='margin-left:10px; height:25px ' src='assets/icons/docYellow.ico.png'><img style='margin-left:10px; height:25px ' src='assets/icons/dLoadYellow.ico.png'></a>
		  </li>
		  <li>
			<a  style='color:LemonChiffon; text-decoration: none'   href='assets/templates/NotesToContract.pdf' target=' _blank'>Notes to Contract Template <img style='margin-left:10px; height:25px ' src='assets/icons/docYellow.ico.png'><img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a>
		  </li>
		  <li>
			<a  style='color:LemonChiffon; text-decoration: none'  href='assets/templates/NotesToContract.pdf' download>Notes to Contract Template <img style='margin-left:10px; height:25px ' src='assets/icons/docYellow.ico.png'><img style='margin-left:10px; height:25px ' src='assets/icons/dLoadYellow.ico.png'></a>
		  </li>
		
		  <li>
			<a  style='color:LemonChiffon; text-decoration: none'  href='assets/templates/DataSheetTemplate.pdf' target=' _blank'>Services Required Template <img style='margin-left:10px; height:25px ' src='assets/icons/docYellow.ico.png'><img style='margin-left:10px; height:25px ' src='assets/icons/binoYellow.ico.png'></a>
		  </li>
		  <li>
			<a  style='color:LemonChiffon; text-decoration: none'  href='assets/templates/DataSheetTemplate.pdf' download>Services Required Template <img style='margin-left:10px; height:25px ' src='assets/icons/docYellow.ico.png'><img style='margin-left:10px; height:25px ' src='assets/icons/dLoadYellow.ico.png'></a>
		  </li>
		</ul>
	</div>
	</div>

	<div id="Policy" class="tabcontent">
	  <p>Our Policies, for sharing. If you have an account you are welcome to view them</p>
		<div class='leftColumn'>
			<ul>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'   >Accident & Emergency Policy</a>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'   >Lost Child Policy</a>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'   >Uncollected Child Policy</a>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  >Health & Safety Policy</a>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'   >Bad Weather Policy</a>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  >Fire Policy</a>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'   >Smoking Policy</a>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'  >Complaints Policy</a>
				</li>
			</ul>
		</div>
	</div>

	<div id="Learning" class="tabcontent">
	  <p>It is currently the law that every child in England has to follow the EY Learning Journey pathway when outside of the home.</p>
	  
	  <div class='leftColumn'>
	  
		  <ul>
			<li>
				<a  style='color:LemonChiffon; text-decoration: none' >EY Learning Journey Arts</a>
			  </li>
			  <li>
			<a  style='color:LemonChiffon; text-decoration: none'   >EY Learning Journey Physical</a></br>
			  </li>
			  <li>
				<a  style='color:LemonChiffon; text-decoration: none'   >EY Learning Journey Literacy</a>
			  </li>
			  <li>
				<a  style='color:LemonChiffon; text-decoration: none'  >EY Learning Journey Mathematics</a>
			  </li>
			  <li>
				<a  style='color:LemonChiffon; text-decoration: none'  >EY Learning Journey PSE</a></br>
			  </li>
			  <li>
				<a  style='color:LemonChiffon; text-decoration: none'   >EY Learning Journey The World</a>
			  </li>
			  <li>
			<a  style='color:LemonChiffon; text-decoration: none'   >EY Learning Journey Communications</a>
			  </li>
		  </ul>
		</div>

		<div class='rightColumnTab'>
			
			<ul>
				<p  style='color:LemonChiffon; text-decoration: none' >The Den maintains records of your childs progress in with our scrapbook system, we think that this provides a bank of evidence that can be assessed or used in discussions with other professionals regarding your childs progress. We ask as part of our relationship with you the parent that we have regular feedback meetings with both parents, if possible where we will share this work with you and look forward to your comments.</p></br>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'   target=' _blank'>Scrapbook </a>
				</li>
				<li>
				<a  style='color:LemonChiffon; text-decoration: none'   target=' _blank'>Our database records which include our assessments of your childs work </a>
				</li>
				<li>
					<a  style='color:LemonChiffon; text-decoration: none'   target=' _blank'>Your option to add your comments/ feedback to our database. <img src='assets/icons/formYellow.ico.png'style='height:25px'></a>
				</li>
			</ul>		
		</div>
  
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
	
</footer>


</body>

</html>