<?php $title = "Page d'accueil"; ?>
<?php ob_start(); ?>
   
<section class="">
    <h1 class="">Le site d'une famille sur les routes d'Europe</h1>
    <img src="images/P1020628.JPG">
</section>
<section>
	<h2>Découvrez toutes nos destinations</h2>
</section>
<section>
	<h2>Suivez notre trajet</h2>
</section>
<section>
	<h2>inscrivez-vous pour être informé de nos dernières publications</h2>
</section>




       
<?php
$content = ob_get_clean();
require 'Template.php';
?>
