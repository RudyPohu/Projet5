<?php $title = "Dashboard"; ?>
<?php ob_start(); ?>
   
<section class="bg-gray-200 pb-48">
    <h1 class="text-4xl text-center text-gray-600 p-12">Bonjour <?php echo $_SESSION['login'];  ?>, bienvenue dans votre tableau de bord.</h1>

    <h2 class="text-4xl text-center text-gray-600 pb-8">Que voulez-vous faire aujourd'hui ?</h2>
    
    <div class="flex justify-center	pb-16">
        <div class="w-80 text-center h-24 pt-8 m-8 bg-gray-400 border-2 border-solid rounded-lg border-gray-600 hover:bg-yellow-400 p-1 m-2"> <a href="index.php?action=ListPost ">Accéder aux destinations postées</a></div>
        <div class="w-80 text-center h-24 pt-8 m-8 bg-gray-400 border-2 border-solid rounded-lg border-gray-600 hover:bg-yellow-400 p-1 m-2"> <a href="index.php?action=NewPost ">Ajouter un nouvel article du voyage</a></div>
        <div class="w-80 text-center h-24 pt-8 m-8 bg-gray-400 border-2 border-solid rounded-lg border-gray-600 hover:bg-yellow-400 p-1 m-2"> <a href="index.php?action=NewMarker ">Ajouter une nouvelle étape sur votre carte</a></div>
    </div>    
    <div class="w-1/2 m-auto text-center h-12 pt-2 m-16 bg-white border-2 border-solid rounded-lg border-gray-600 hover:bg-yellow-400 p-1 m-2 text-gray-800"> <a href="index.php?action=Disconnection ">Me déconnecter</a></div>
    </div>
</section>
       
<?php
$content = ob_get_clean();
require 'BackTemplate.php';
?>
