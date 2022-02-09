<?php
$title = "Pepeat - FAQ ?";

include '../includes/header.inc.php';
?>

<main id="faq">
    <div class="container" data-aos="zoom-in">
        <h2>Foire aux questions !</h2>

        <div class="accordeon">
            <div class="accordeon-item">
                <button id="accordeon-button-1" aria-expanded="false"><span class="accordeon-title">Dois-je avoir un abonnement pour utiliser Pepeat ?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordeon-content">
                    <p>Non, Pepeat ne propose pas d'abonnement. Il te suffit de te créer un compte pour passé commande et utilise Pepeat.</p>
                </div>
            </div>

            <div class="accordeon-item">
                <button id="accordeon-button-2" aria-expanded="false"><span class="accordeon-title">Quelles sont les horaires d'ouverture des bornes ?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordeon-content">
                    <p>Les bornes sont accessibles 24h/24h tous les jours de la semaine.</p>
                </div>
            </div>

            <div class="accordeon-item">
                <button id="accordeon-button-3" aria-expanded="false"><span class="accordeon-title">Pourquoi j'ai un temps assez restreint pour récupérer ma commande ?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordeon-content">
                    <p>Le temps est restreint pour éviter que les produits attendent trop et s'abîme. Avec un temps court, si vous ne pouvez pas venir récupérer votre commande elle sera remis en ligne pour qu'une autre personne vienne la prendre.</p>
                </div>
            </div>

            <div class="accordeon-item">
                <button id="accordeon-button-4" aria-expanded="false"><span class="accordeon-title">Comment puis-je connaitre la provenance des produits ?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordeon-content">
                    <p>Sur chaque fiche produit, vous pourrez retrouver la provenance du produit ainsi que l'agriculteur qui a cultiver le produit.</p>
                </div>
            </div>

            <div class="accordeon-item">
                <button id="accordeon-button-5" aria-expanded="false"><span class="accordeon-title">Les bornes sont elles réapprovisionner régulièrement ?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordeon-content">
                    <p>Les agriculteurs ainsi que l'équipe de Pepeat suivent en directe le stock des bornes. Dès lors qu'il n'y a presque plus de stock, l'gariculteur est avertis ainsi que nous et l'équipe de Pepeat s'occupe d'aller récuperer chez l'agriculteur les produits et de les mettres dans les bornes.</p>
                </div>
            </div>

            <div class="accordeon-item">
                <button id="accordeon-button-6" aria-expanded="false"><span class="accordeon-title">Comment les aliments sont-ils conservés  ?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordeon-content">
                    <p>Les aliments sont conservés dans des casiers à l'abri de la lumière. Certaines sont équipé de brumisateur pour conserver le plus longtemps possible les aliments et d'autres sont réfrigérer.</p>
                </div>
            </div>

            <div class="accordeon-item">
                <button id="accordeon-button-7" aria-expanded="false"><span class="accordeon-title">Quels types de paiements sont acceptés ?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordeon-content">
                    <p>Avec l'application Pepeat, vous pouvez régler avec votre carte bleu, paypal, apple pay et également mettre en amont de l'argent sur votre compte et payer avec.</p>
            </div>
        </div>
    </div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script><script  src="/Pepeat/scripts/faq.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  	AOS.init();
	</script>

</main>

<?php
include '../includes/footer.inc.php';
?>