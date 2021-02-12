<?php $title = "Carte"; ?>
<?php ob_start(); ?>
   
<div class="bg-yellow-400 h-full">
	<h2 class="text-8xl font-bold text-green-600 p-24"> Oups,</h2>
	<h3 class="text-4xl font-bold text-green-800 pb-48 pl-24">La page que vous avez demandé est introuvable.</h3>  
 </div>



<?php
$content = ob_get_clean();
require 'Template.php';
?>





  