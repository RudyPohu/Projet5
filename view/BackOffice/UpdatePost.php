<?php $title = "Modification d'un chapitre"; ?>
<?php ob_start(); ?>


<section class="bg-green-800 ">
    <h1 class=" text-3xl text-green-600 ml-24  p-8">Modification de l'article:</h1>
  
  	<div class="mx-24 m-auto bg-white p-8">

	    <form action="index.php?action=Update" method="post" class="formtiny">
		        <label class=" text-green-600 " for="title">Modification du titre:</label><br /><br />
		        <input class="border-2 border-solid rounded-lg border-green-800 pl-4 py-2" type="text" name="title" value="<?php echo htmlspecialchars($post->title()); ?>" /><br /><br />
		        <label class=" text-green-600 " for="content">Modification du contenu:</label> : <br /><br />
		        <textarea class="w-full border-2 border-solid rounded-lg border-green-800 p-4" id="tiny" class="texte" name="content" rows="25" cols="150"><?php echo $post->content(); ?></textarea><br />
				<input type="hidden" name="id" value="<?= $post->id() ?>">
		        <div class="flex justify-end">
		        	<input class="bg-green-600 text-white border-2 border-solid rounded-lg border-green-800 hover:text-black hover:bg-green-500 p-1 mt-4 w-64 text-center" type="submit" value="Modifier ce chapitre" />
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