<?php $title = "Suppression d'un chapitre"; ?>
<?php ob_start(); ?>

<div class="bg-green-800 ">
    <h1 class=" text-3xl text-green-600 ml-24  p-8">Voulez-vous vraiment supprimer ce chapitre ainsi que ses commentaires ? </h1>
 
    <div class="mx-24 m-auto bg-white ">

        <div class="p-4 border-solid border-b-8 border-green-800">
            <p class="text-3xl text-green-600 mb-8">
                <?php echo htmlspecialchars($post->title()); ?>
                <span class="text-base">, publié le <?php echo $post->getDate(); ?></span>
            </p> 
            
            <?php echo $post->content(); ?>


        	<div class="flex justify-end mt-8"> 
                <div  class="bg-green-600 text-white border-2 border-solid rounded-lg border-green-800 hover:text-black hover:bg-green-500 p-1 mx-1 w-64 text-center">
                    <a onclick="return confirm('Etes vous sur de vouloir supprimer ce chapitre et les commentaires associés ?')" href="index.php?action=Delete&Post_id=<?= $post->id() ?>" title="supprimer le chapitre">Confirmer la suppression</a>
                </div>
            </div>

        </div>	
    </div>
</div>
    <div class="bg-green-800  p-16">
        <div id="retour" class="m-auto text-center bg-green-500 text-white border-2 border-solid rounded-lg border-white hover:border-green-800 hover:text-black hover:bg-green-600 p-2 w-80 h-12 text-center"> <a href="index.php?action=Dashboard" title="aller à la page connexion">Annuler et revenir au tableau de bord</a></div>
    </div>



<?php
$content = ob_get_clean();
require 'BackTemplate.php';
?>   