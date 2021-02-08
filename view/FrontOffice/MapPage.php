<?php $title = "Carte"; ?>
<?php ob_start(); ?>
   
<section class="sliderpage">
    <h1 class="">Carte interactive</h1>
</section>

<div id="map" style="height: 600px">
</div>
       
<?php
$content = ob_get_clean();
ob_start();
?>
	<script type="text/javascript" src="js/map.js"></script>

	<script type="text/javascript">
		window.onload = function() {
			map.initMap();
			// map.placeMarkers();
			// map.initMarker();
		}
	</script>

<?php
$script= ob_get_clean();
require 'Template.php';
?>





  