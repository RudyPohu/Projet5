<?php $title = "Ajout d'une destination sur la carte"; ?>
<?php ob_start(); ?>

       
<!-- le titre -->   
<div>
    <h2 class="">Ajout d'une destination sur la carte</h2>
</div>	

<section class="">
    <div class="">
		<form enctype="multipart/form-data" action="index.php?action=StoreMarker" method="post">
            <?php
            if(isset($_SESSION['errors'])) 
            {
                echo $_SESSION['errors'];
                unset($_SESSION['errors']);
            }
            ?>

            <h2>Votre destiantion:</h2>
            <input class="border-2 border-solid rounded-lg border-green-600  p-1 m-2" type="text" name="name" class="">
            <br /><br />
            <h2>Latitude:</h2>
            <input class="border-2 border-solid rounded-lg border-green-600  p-1 m-2" type="text" name="lat" class="">
            <br /><br />
            <h2>Longitude:</h2>
            <input class="border-2 border-solid rounded-lg border-green-600  p-1 m-2" type="text" name="lon" class="">
            <br /><br />
<!--             <h2>image associée:</h2>
            <input class="border-2 border-solid rounded-lg border-green-600  p-1 m-2" type="file" name="img" class="">
            <br /><br /> -->
            <h2>Votre teste:</h2>
            <input class="border-2 border-solid rounded-lg border-green-600  p-1 m-2" type="text" name="content" class="">
            <br /><br />

            <br /><br /><br />
			<input class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2" type="submit" value="valider">
		</form>		
	</div>
</section>
		
	
<?php
$content = ob_get_clean();
require 'BackTemplate.php';
?>