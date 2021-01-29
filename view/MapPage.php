<?php $title = "Carte"; ?>
<?php ob_start(); ?>
   
<section class="sliderpage">
    <h1 class="">Carte interactive</h1>
</section>

<div id="map">
</div>
       
<?php
$content = ob_get_clean();
require 'Template.php';
?>





