<?php $title = "Carte"; ?>
<?php ob_start(); ?>
   
<section class="bg-yellow-400 p-8">



<div id="map" style="height: 500px" class="w-10/12 m-auto border-2 border-solid rounded-lg border-green-600">
</div>
       
<?php
$content = ob_get_clean();
ob_start();
?>
	<script type="text/javascript" src="js/map.js"></script>

	<script type="text/javascript">
		window.onload = function() {
			map.initMap();
			map.initMarker();
		}
	</script>

</section>

<?php
$script= ob_get_clean();
require 'Template.php';
?>





  