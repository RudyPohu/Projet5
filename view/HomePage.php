<?php $title = "Page d'accueil"; ?>
<?php ob_start(); ?>
   
<section class="sliderhome">
    <h1 class="">Le site d'une famille sur les routes d'Europe</h1>
    <img src="images/P1020628.JPG">
</section>




       
<?php
$content = ob_get_clean();
require 'Template.php';
?>
