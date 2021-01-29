<?php $title = "Nouvelle destination"; ?>
<?php ob_start(); ?>
   
<section class="sliderpage">
    <h1 class="">Nouvelle destination</h1>
</section>

<section>
    <form action="index.php?action=StorePost" method="post" >
        <label for="title">Titre du chapitre:</label><br />
        <input class="border-2 border-solid rounded-lg border-green-600  p-1 m-2" type="text" name="title" /><br /><br />
        <label for="content">Contenu du post:</label><br>
        <textarea id="tiny" class="border-2 border-solid rounded-lg border-green-600  p-1 m-2" name="content" rows="25" cols="130">Votre texte ici ...</textarea><br />
        <input class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2" type="submit" value="Envoyer" />
    </form> 

    <div class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2"><a href="index.php?action=Dashboard" title="aller à la page connexion">Annuler</a></div>  
</section>

       
<?php
$content = ob_get_clean();
require 'BackTemplate.php';
?>
