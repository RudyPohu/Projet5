<?php $title = "Nouvelle destination"; ?>
<?php ob_start(); ?>
   
<section class="bg-green-800 ">
    <h1 class=" text-3xl text-green-600 ml-24  p-8">Publier une nouvelle destination:</h1>
  
  	<div class="mx-24 m-auto bg-white p-8">

	    <form action="index.php?action=StorePost" method="post" >
	        <label class=" text-green-600 " for="title">Titre du chapitre:</label><br /><br />
	        <input  class="w-full border-2 border-solid rounded-lg border-green-800 pl-4 py-2" type="text" name="title" /><br /><br />
	        <label class=" text-green-600 " for="content">Contenu du chapitre:</label><br><br />
	        <textarea id="tiny"  class="w-full border-2 border-solid rounded-lg border-green-800 p-4" name="content" rows="25" cols="80">Votre texte ici ...</textarea><br />
	        <div class="flex justify-end">
	        	<input class="bg-green-600 text-white border-2 border-solid rounded-lg border-green-800 hover:text-black hover:bg-green-500 p-1 mt-4 w-64 text-center" type="submit" value="Enregistrer et publier ce chapitre" />
			</div>
	    </form> 
	</div>


	<div class="bg-green-800  p-16">
        <div id="retour" class="m-auto text-center bg-green-500 text-white border-2 border-solid rounded-lg border-white hover:border-green-800 hover:text-black hover:bg-green-600 p-2 w-80 h-12 text-center"> <a href="index.php?action=Dashboard" title="aller à la page connexion">Annuler et revenir au tableau de bord</a></div>
    </div> 

</section>
       
<?php
$content = ob_get_clean();
require 'BackTemplate.php';
?>
