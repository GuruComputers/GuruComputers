<?php
	$cp = "home";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Need professional Services? Let us do I.T.">
		<meta name="keywords" content="Guru Cpmputers Ltd"/>
		<meta property="og:title" content='Guru Cpmputers Ltd'/>
		<meta property="og:type" content="article"/>
		<meta property="og:image" content="img/logo.png"/>
		<meta property="og:description" content="Need professional Services? Let us do I.T."/>
		<meta name="twitter:card" content="summary"/>
		<meta name="twitter:title" content='Guru Cpmputers Ltd'/>
		<meta name="twitter:description" content="Need professional Services? Let us do I.T."/>
		<meta name="twitter:image" content="img/logo.png"/>
		<title>Guru Computers Ltd</title>
		<link media="all" type="text/css" rel="stylesheet" href="css/normalize.css">
		<link media="all" type="text/css" rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<section>
			<div class="sec-one">
				<img src="img/logo.png" alt="Guru Computers Logo" class="logo">
				<div class="pair-one">
					<img src="img/icons/cd_printing.png" alt="CD Printing & Duplication" class="icon c1">
					<img src="img/icons/webdev.png" alt="Website Development" class="icon c2">
				</div>
				<br />
				<div class="pair-two">
					<img src="img/icons/computer_repairs.png" alt="Computer Repairs" class="icon c3">
					<img src="img/icons/mobile_repairs.png" alt="Mobile Repairs" class="icon c4">
				</div>
				<br />
				<div class="pair-three">
					<img src="img/icons/console_repairs.png" alt="Console Repairs" class="icon c5">
					<img src="img/icons/laptop_repairs.png" alt="Laptop Repairs" class="icon c6">
				</div>
				<br />
				<div class="pair-four">
					<img src="img/icons/printing_services.png" alt="Printing Services" class="icon c7">
					<img src="img/icons/website_hosting.png" alt="Website Hosting" class="icon c8">
				</div>
				<br />			
			</div>
		</section>
		<section>
			<div class="sec-two">
				<?php 
					include 'includes/dave/ticker.php';
					include 'includes/dave/console.php'; 
				?>
			</div>			
		</section>
		<footer>
			<?php include 'includes/neil/footer.php'; ?>
		</footer>
	</body>
</html>
