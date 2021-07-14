<!DOCTYPE html>
<html lang="en">



	</head>
	<meta tags >
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width initial-scale=1.0'>
	<base href='http://localhost/TheDen/'>
	<title>NCC . The Den Kettering</title>
	

	</head>

	<body>	
			<?php 	include_once '../partPages/header.php'; ?>

		<div class='spanTitleCenter'>North Northamptonshire Council Regulatatory Responisbilites</div>

		<div class='flex-container'>

			<section class='rows'>
			<div class='columns'>
				<p class='pageText'>
				Children First Northamptonshire is part of North Northamptonshire Council duties and they provides the most difficult range of services for children in danger. </br>The Early Years team supports early years and childcare providers to deliver safe childcare. </br>
				<img src='assets/images_OC/listenchild.png'style='float:right; height:200px'>
				The team of administers can support with Government funded childcare places, abuse and neglect cases and any other form of danger children might find themselves in. They also coordinate with the safeguarding of children who need extra help to have a safe, productive childhood.
				</br>They are part of the wider children's services teams in NCC and with partner organisations, they ensure we support the best possible outcomes for children, young people and families in the county.<br>			
				</p>
			</div>
			

			<div class='columns'>
				<p class='button pageText' style='height:350px; width:250px; font-size: 12pt; background-color: #25542b; color: Lemonchiffon'>
				If you are concerned about any child's welfare, please report it.<br><br>	
				If a child is in immediate danger, left alone, or missing, you should contact the police and/or an ambulance directly by phoning 999.<br>		
				
				
				</p>
				
				
			</div> 
			

			<div class='columns'>
				<div class='rows'>
				
					<p class='button ' style='height:290px; width:450px; background-color: LemonChiffon; color:#25542b'>
					To contact the Multi-Agency Safeguarding Hub (MASH):</br>
					Tel: 0300 126 1000 (option 1)</br>
					Email: MASH@northamptonshire.gov.uk</br>
					Post: Multi-Agency Safeguarding Hub (MASH) and Child Protection Team, Children, Families and Education, Criminal Justice Centre, 
					700 Pavilion Drive, 
					Brackmills, 
					Northampton, 
					Northamptonshire 
					NN4 7YL
					</p>
				</div>
			
				<div class='rows'>
					
					<button class='snackBarButton' style='width= 400px'  onclick="mashSnackbar()">Safeguarding in North Northamptonshire?</br><img class='' src='assets/images_OC/safeguardingchildren.png' style='width=200px; height= 100px'></button>

					<div id="snackbar"> 
					
					
					<p class='pageText'>Contact the County Council Safeguarding Team 
					<a class='snackBarButton' href='https://www.nctrust.co.uk/help-and-protection-for-children/Pages/report-a-concern.aspx' alt='Threasholds & Pathways site' style='text-decoration: none; color: LemonChiffon'>Go to NNC reporting webpage here. </a></p>
					
					
					<p class='pageText'>Advice for Parents Page.
					<a class='snackBarButton' href='http://www.northamptonshirescb.org.uk/parents-carers/parents-mash-guide/' alt='Parents Mash site' style='text-decoration: none; color: LemonChiffon'>Go to NNC information webpage here. </a></p>
					
					
					<p class='pageText'>Tell The Den of your concern.
					<a class='snackBarButton' href='forms\contactForm.php' alt='The Den Contact Form' style='text-decoration: none; color: LemonChiffon'>Go to The Den Contact form here. </br></a></p>
					
				
				</div>
			</div>
			</section>
			</div>
		<footer class=''>
			<?php include_once '../partPages/footer.php';?>
		</footer>




		<script>
			function mashSnackbar() {
			var x = document.getElementById("snackbar");
			x.className = "show";
			setTimeout(function(){ x.className = x.className.replace("show", ""); }, 8000);
			}
		</script>

	</body>
</html>