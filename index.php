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
		<header>
			<img src="img/logo.png" alt="Guru Computers Logo" class="logo">
			<img src="img/cd_printing.png" alt="CD Printing & Duplication">
		</header>
		<section class="sec-one">
			<nav>
				<?php include 'includes/neil/menu.php'; ?>
			</nav>
		</section>
		<section class="sec-two">
			<?php 
				include 'includes/dave/ticker.php';
				include 'includes/dave/console.php'; 
			?>			
		</section>
		<footer>
			<?php include 'includes/neil/footer.php'; ?>
		</footer>
	</body>
</html>
