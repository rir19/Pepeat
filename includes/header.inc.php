<!DOCTYPE html>
<html lang="fr">
<head>

	<title><?php echo isset($title) ? $title : "Pepeat"; ?></title>

	<meta charset="UTF-8">
	<meta name="description" content="<?php echo isset($description) ? $description : 'site web de Pepeat'; ?>">
	<meta name="author" content="Marine Angot">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Typo-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<!--Icons-->
    <link rel="icon" type="image/png" href="/Pepeat/images/icone.png" />
	<!-- Animations-->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!--Style-->
	<link rel="stylesheet" href="/Pepeat/css/style.css">


</head>
<body>

	<div id="barre_nav">
		<a class="logo" href="/Pepeat/index.php"><img src="/Pepeat/images/logo-pepeat.png" alt="logo Pepeat"></a>
		<nav>
			<ul class="nav_links">
				<li><a href="/Pepeat/index.php">Accueil</a></li>
				<li><a href="/Pepeat/pages/concept.php">Le concept</a></li>
				<li><a href="/Pepeat/pages/nous.php">Qui sommes-nous ?</a></li>
			</ul>	
		</nav>
		<a class="cta" target="_blank" href="https://www.figma.com/proto/fzX5ga6SGgURKJrjpsoGAP/Wireframes-%2F-Application?page-id=434%3A2417&node-id=493%3A2945&viewport=241%2C48%2C0.08&scaling=scale-down&starting-point-node-id=493%3A2945">Notre application</a>
		<p class="menu cta">Menu</p>
	</div>

	<div id="mobile__menu" class="overlay">
		<a class="close">&times;</a>
		<div class="overlay__content">
			<a href="/Pepeat/index.php">Accueil</a>
			<a href="/Pepeat/pages/concept.php">Le concept</a>
			<a href="/Pepeat/pages/nous.php">Qui sommes-nous ?</a>
			<a class="cta" href="#">Notre application</a>
		</div>
		
		<p class="menu cta">Menu</p>
	</div>

	<!--JS-->
	<script type="text/javascript" src="/Pepeat/scripts/mobile.js"></script>


		
	

	
	