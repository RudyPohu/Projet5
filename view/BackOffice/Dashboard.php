<?php $title = "Tableau de bord"; ?>
<?php ob_start(); ?>
   

<div class="bg-green-800 pb-20 ">
    <h1 class=" text-3xl text-green-600 ml-24 pt-8">Bonjour <?php echo htmlspecialchars($_SESSION['login']);  ?>, bienvenue dans votre tableau de bord.</h1>

    <h2 class=" text-2xl text-green-600 ml-24 p-8">Que voulez-vous faire aujourd'hui ?</h2>
    
    	<div class="mb-4">
	        <div class="w-3/6 h-16 bg-white text-green-800 border-2 border-solid rounded-lg border-green-800 hover:text-black hover:bg-green-500 p-4 ml-24 w-64 text-center"> <a href="index.php?action=NewPost ">Ajouter un nouvel article à votre site</a></div>
	        <div class="w-3/6 h-16 bg-white text-green-800 border-2 border-solid rounded-lg border-green-800 hover:text-black hover:bg-green-500 p-4 ml-24 w-64 text-center"> <a href="index.php?action=ListPost ">Accéder aux articles déjà postés (modifier ou supprimer un article)</a></div>
	        
        </div>
        <div class="mb-4">
            <div class="w-3/6 h-16 bg-white text-green-800 border-2 border-solid rounded-lg border-green-800 hover:text-black hover:bg-green-500 p-4 ml-24 w-64 text-center"> <a href="index.php?action=NewMarker ">Ajouter un nouveau marker sur votre carte</a></div>
            <div class="w-3/6 h-16 bg-white text-green-800 border-2 border-solid rounded-lg border-green-800 hover:text-black hover:bg-green-500 p-4 ml-24 w-64 text-center"> <a href="index.php?action=ListMarkers ">Accéder aux markers déjà présents sur votre carte (modifier ou supprimer un marker)</a></div>
        </div>
        
        <div class="w-3/6 h-16 bg-white text-green-800 border-2 border-solid rounded-lg border-green-800 hover:text-black hover:bg-green-500 p-4 ml-24 w-64 text-center"> <a href="index.php?action=ListComments ">Gestion des commentaires</a></div>
        
        
       

    <div class="bg-green-800 p-16 ">
    	<div class="ml-8 text-center bg-green-500 text-white border-2 border-solid rounded-lg border-white hover:border-green-800 hover:text-black hover:bg-green-600 p-2 w-80 h-12 text-center"> <a href="index.php?action=Disconnection ">Me déconnecter</a></div>
    	
    </div>

</div>
       
<?php
$content = ob_get_clean();
require 'BackTemplate.php';
?>
