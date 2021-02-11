<?php $title = "Carte"; ?>
<?php ob_start(); ?>
   
<div class="bg-yellow-400 p-8">



<div id="map" style="height: 500px" class="w-10/12 m-auto border-2 border-solid rounded-lg border-green-600">
</div>
       
<?php
$content = ob_get_clean();
ob_start();
?>
	<script src="js/map.js"></script>

	<script>
		window.onload = function() {
			map.initMap();
			map.initMarker();
		}
	</script>

</div>

<?php
$script= ob_get_clean();
require 'Template.php';
?>





  