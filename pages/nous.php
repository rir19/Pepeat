<?php
$title = "Pepeat - Qui sommes-nous ?";

include '../includes/header.inc.php';
?>

<header id="header3">
	<div class="head3">
        <div data-aos="fade-down" data-aos-duration="1000">
		    <section>
                <h3>Qui sommes-nous</h3>
			    <h1>Découvrez l'histoire<br>d'un projet ambitieux</h1>
			    <p>Venez découvrir qui se cache derrière l'entreprise Pepeat !</p>
                <p>Vous serez très étonnés.</p>
		    </section>
        </div>
	</div>
</header>

<main id="nous">
	<section class="part1">
		<div>
            <div data-aos="zoom-in" data-aos-duration="900">
                <h3>L'équipe</h3>
			    <h2>Les visages qui sont derrière ce projet de fou !</h2>
			    <img src="/Pepeat/images/feuilles-marron.svg" alt="illustration de feuilles" class="feuille">
            </div>

			<div class="equipe">
				<article>
                    <div data-aos="zoom-in" data-aos-duration="900">
					    <img src="/Pepeat/images/aurelie.png" alt="photo de Aurélie">
					    <h4>Aurélie</h4>
					    <hr>
					    <p>Elle s'occupe de toute la partie création ! Le design, nos affiches publicitaires etc ...</p>
                    </div>
				</article>

				<article>
                    <div data-aos="zoom-in" data-aos-duration="1000">
					    <img src="/Pepeat/images/kilian.png" alt="photo de Kilian">
					    <h4>Kilian</h4>
					    <hr>
					    <p>Il gère l'aspect utilisateur pour que vous ayez une utilisation optimiser le plus possible</p>
                    </div>
				</article>

				<article>
                    <div data-aos="zoom-in" data-aos-duration="1100">
					    <img src="/Pepeat/images/marine.png" alt="photo de Marine">
					    <h4>Marine</h4>
					    <hr>
					    <p>Elle est chargée du développement du site ainsi que de l'application</p>
                    </div>
				</article>

				<article>
                    <div data-aos="zoom-in" data-aos-duration="1200">
					    <img src="/Pepeat/images/naike.png" alt="photo de Naike">
					    <h4>Naike</h4>
					    <hr>
					    <p>Il est le commercial de l'équipe, il se charge de démarcher les producteurs et les maires</p>
                    </div>
				</article>
			</div>
		</div>
	</section>


    <section class="part2">
        <div>
            <div data-aos="fade-down" data-aos-duration="900">
                <h3>L'histoire</h3>
			    <h2>Un projet qui est partis de rien !</h2>
			    <img src="/Pepeat/images/feuilles-marron.svg" alt="illustration de feuilles" class="feuille">
            </div>

            <article class="histoire">
                <div class="description" data-aos="fade-right" data-aos-duration="900">
                    <p>
                        Nous sommes un groupe d'amis qui avait envie de consommer mieux, local mais aussi d'adier les agriculteurs à gagner mieux leur vie. Nous avons décidé de mettre à profil ce qu'on a vu pendant nos années d'études et nous nous sommes lancés dans la création de notre projet Pepeat !
                        <br>
                        Ça n'a pas été simple tous les jours de croire en 4 jeunes diplômés mais avec la persévérance et à toutes les personnes qui ont cru en nous, on a réussi à monter notre super projet.
                        <br>
                        Merci à vous !
                    </p>
                </div>
                <div class="photo" data-aos="fade-left" data-aos-duration="900">
                    <img src="/Pepeat/images/tomate.png" alt="photo d'un champ de tomate">
                </div>
            </article>
        </div>
	</section>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
  	AOS.init();
	</script>
</main>
<?php
include '../includes/footer.inc.php';
?>