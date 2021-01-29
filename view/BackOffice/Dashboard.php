<?php $title = "Dashboard"; ?>
<?php ob_start(); ?>
   
<section class="sliderhome">
    <h1 class="">Dashboard</h1>
</section>

<section class="sectionadmin">
    <h2 class="titreadmin">Que voulez-vous faire aujourd'hui ?</h2>
    
    <div class="menuadmin">
        <div class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2"> <a href="index.php?action=ListPost ">Accéder aux destinations postées</a></div>
        <div class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2"> <a href="index.php?action=NewPost ">Ajouter un nouvel article du voyage</a></div>
        <div class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2"> <a href="index.php?action=NewMarker ">Ajouter une nouvelle étape sur votre carte</a></div>
        <div class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2"> <a href="index.php?action=Disconnection ">Me déconnecter</a></div>
    </div>
</section>
       
<?php
$content = ob_get_clean();
require 'BackTemplate.php';
?>
