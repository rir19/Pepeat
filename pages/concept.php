<?php
$title = "Pepeat - Le concept";

include '../includes/header.inc.php';
?>


<header id="header2">
	<div class="head2">
		<div data-aos="fade-down" data-aos-duration="1000">
			<section>
            	<h3>Le concept</h3>
				<h1>Des produits frais en<br>circuit court :<br>on vous dit tout !</h1>
				<p>Venez découvrir tous les secrets de notre entreprise Pepeat !</p>
            	<p>Vous allez être surpris de sa simplicité</p>
			</section>
		</div>
	</div>
</header>

<main id="concept">

	<section class="part1">
		<article>
			<div data-aos="fade-right" data-aos-duration="900">
				<img src="/Pepeat/images/image-nature.png" alt="photos d'une cagette de légume et d'une main avec de la terre" class="nature">
			</div>
		</article>

		<article class="texte">
			<div data-aos="fade-left" data-aos-duration="900">
            	<h3>Le projet</h3>
            	<h2>Notre concept et notre démarche, on vous explique :</h2>
            	<img src="/Pepeat/images/feuilles-marron.svg" alt="illustration de feuilles" class="feuille">
            	<p>Notre idée est venue d’une envie de pouvoir consommer des produits issus du circuit court mais aussi bio tout en respectant nos agriculteurs. Pour les citadins comme nous, cette envie est un peu plus compliquée car elle nécessite de prendre un véhicule et de parcourir plusieurs kilomètres afin de trouver une ferme.Mais après plusieurs brainstorming, on s’est dit que ça pourrait être les produits qui pourraient venir au citadin.<br>Et c’est comme ça que le concept de Pepeat a vu le jour !</p>
            	<br>
            	<p>Nous avons fait le choix de laisser les agriculteurs choisir le prix de leurs produits parce que ce sont eux qui connaissent au mieux la valeur de leur travail. De plus, c’est Pepeat qui s’occupe de récupérer les produits et les mettre dans les distributeurs pour que l’agriculteur puisse consacrer tout son temps à son métier.</p>
        	</div>
		</article>
	</section>


	<section class="part2">
		<div>
			<div data-aos="zoom-in" data-aos-duration="900">
				<h2>Comment ça marche ?</h2>
				<img src="/Pepeat/images/feuilles-blanc.svg" alt="illustration de feuilles" class="feuille">
			</div>		

			<div class="utilisation">
				<article>
				<div data-aos="zoom-in" data-aos-duration="900">
					<img src="/Pepeat/images/picto-telecharger.png" alt="pictogramme pour télécharger l'application">
					<p>Téléchargez<br>l'application</p>
				</div>
				</article>

				<article>
				<div data-aos="zoom-in" data-aos-duration="1000">
					<img src="/Pepeat/images/picto-localiser.png" alt="pictogramme de lolcalisation des bornes près de chez soi">
					<p>Localisez la borne<br>près de chez vous</p>
				</div>
				</article>

				<article>
				<div data-aos="zoom-in" data-aos-duration="1050">
					<img src="/Pepeat/images/picto-reserver.png" alt="pictogramme pour réserver ses produits">
					<p>Réservez les produits<br>de vos choix</p>
				</div>
				</article>

				<article>
				<div data-aos="zoom-in" data-aos-duration="1100">
					<img src="/Pepeat/images/picto-borne.png" alt="pictogramme pour aller à la borne choisis">
					<p>Déplacez vous à la<br>borne choisis</p>
				</div>
				</article>

                <article>
				<div data-aos="zoom-in" data-aos-duration="1150">
					<img src="/Pepeat/images/picto-collect.png" alt="pictogramme pour récuperer ses produits">
					<p>Récuperez tous<br>vos produits</p>
				</div>
				</article>

                <article>
				<div data-aos="zoom-in" data-aos-duration="1200">
					<img src="/Pepeat/images/picto-degustation.png" alt="pictogramme pour rentrer chez soi et savourer les produits">
					<p>Rentrez chez vous et<br>bonne dégustation !</p>
				</div>
				</article>
			</div>
		</div>
	</section>

	<section class="part3">
        <article>
			<div data-aos="fade-right" data-aos-duration="900">
            	<img src="/Pepeat/images/application.png" alt="mockup de l'application pepeat" class="mockup">
			<div>
        </article>

		<article class="texte">
			<div data-aos="fade-left" data-aos-duration="900">
            	<h3>Application</h3>
            	<h2>Pepeat fonctionne grâce à une application !</h2>
            	<img src="/Pepeat/images/feuilles-marron.svg" alt="illustration de feuilles" class="feuille">
            	<p>Pour vous facilitez aux mieux la tâche de consommer local et frais, nous avons conçu une application !</p>
            	<br>
            	<p>Cette application vous permet de :
                	<br>
                	<ul>
                    	<li>localiser toutes les bornes de votre région</li>
                    	<li>voire les produits disponibles dans les bornes</li>
                    	<li>réserver des produits</li>
                    	<li>découvrir les agriculteurs qui travaillent avec nous</li>
                    	<li>donner des conseils de conservations pour les produits</li>
                    	<li>suggérer des idées de recettes avec les produits achetés</li>
                    	<li>découvrir des nouveaux fruits ou légumes</li>
                	</ul>
            	</p>
            	<p>Tout ça regroupait dans une seule et unique application !</p>
			</div>
        </article>
	</section>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
  	AOS.init();
	</script>

</main>
<?php
include '../includes/footer.inc.php';
?>