<?php

$title = "Pepeat";

	include 'includes/header.inc.php';
?>


<header id="header1">
	<div class="head1">
	<div data-aos="fade-down" data-aos-duration="1000">
		<section>
			<h1>Des produits frais et locaux<br> tout près de chez vous !</h1>
			<p>
				<ul>
					<li>Aussitôt récoltés, aussitôt livré dans nos distributeurs</li>
					<li>Des produits frais et de saisons</li>
					<li>Des agriculteurs payés au juste prix</li>
					<li>Sans engagement</li>
				</ul>
			</p>
		</section>
		</div>
	</div>
</header>



<main id="accueil">

<div data-aos="fade-up" data-aos-duration="900">
	<section class="part1">
		<h2>des produits frais sur votre chemin<br>la qualité dans votre main !</h2>
		<img src="/Pepeat/images/feuilles-marron.svg" alt="illustration de feuilles">
		<p>Les distributeurs automatiques connectés de Pepeat sont disponibles en plusieurs versions, dont des modules de 5m2, 10m2.</p>
		<img class="borne" src="/Pepeat/images/borne.png" alt="image de notre borne avec ses fonctionnaliés : tactile, paiement CB,zone ambiant et climatisé, produits frais et local">
	</section>
</div>


	<section class="part2">
		<div>
			<div data-aos="zoom-in" data-aos-duration="900">
				<h2>Une nouvelle façon de répondre à vos besoins</h2>
				<img src="/Pepeat/images/feuilles-blanc.svg" alt="illustration de feuilles" class="feuille">
			</div>

			<div class="services">
				<article class="partout">
					<div data-aos="zoom-in" data-aos-duration="900">
						<img src="/Pepeat/images/picto-partout.png" alt="pictogramme c'est partout">
						<h4>C'est partout !</h4>
						<hr>
						<p>Nous avons disposé des bornes un peu partout, localisez-les grâce à l'application</p>
					</div>
				</article>

				<article class="rapide">
					<div data-aos="zoom-in" data-aos-duration="1000">
						<img src="/Pepeat/images/picto-rapide.png" alt="pictogramme c'est rapide">
						<h4>C'est rapide !</h4>
						<hr>
						<p>Nous avons tout digitalisé pour vous permettre de faire vos courses plus rapidement</p>
					</div>
				</article>

				<article class="juste">
					<div data-aos="zoom-in" data-aos-duration="1100">
						<img src="/Pepeat/images/picto-juste.png" alt="pictogramme c'est juste">
						<h4>C'est juste !</h4>
						<hr>
						<p>Nous laissons les agriculteurs fixer leurs prix pour une meilleure rémunération</p>
					</div>
				</article>

				<article class="local">
					<div data-aos="zoom-in" data-aos-duration="1200">
						<img src="/Pepeat/images/picto-locale.png" alt="pictogramme c'est local">
						<h4>C'est local !</h4>
						<hr>
						<p>Nous travaillons avec des agriculteurs locaux, vos produits sont propres à votre région</p>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="part3">
		<div data-aos="fade-up" data-aos-duration="900">
			<h2>Pour ne rien louper de notre actualité<br>et de nos actions</h2>
			<p>Abonnez-vous à notre newsletter !</p>
			<form action="" class="formulaire">
				<input type="email" placeholder="Votre adresse mail" name="mail" required>
				<input type="submit" value="Envoyer">
			</form>
		</div>
	</section>
	
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
  	AOS.init();
	</script>
</main>
<?php
	include "includes/footer.inc.php";
?>