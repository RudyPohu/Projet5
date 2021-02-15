<?php $title = "Destinations"; ?>
<?php ob_start(); ?>
   
<div class="bg-green-800 ">
    <h1 class=" text-3xl text-green-600 ml-24  p-8">Liste des commentaires publiés par les internautes:</h1>
 
    <div class="mx-24 m-auto bg-white ">
    <?php
    foreach($comments as $comment):
    ?>
   
        <div class="p-4 border-solid border-b-8 border-green-800">
            <p class="text-3xl text-green-600 mb-8">
                <?php echo htmlspecialchars($comment->author()); ?>
                <span class="text-base">, publié le <?php echo htmlspecialchars($comment->getDate()); ?></span>
            </p> 
            <p class="text-lg"> Commentaire:<span class="text-base  text-green-600"> <?php echo htmlspecialchars($comment->comment()); ?></span></p>
            <div class="flex justify-end">
                <div class="bg-green-600 text-white border-2 border-solid rounded-lg border-green-800 hover:text-black hover:bg-green-500 p-1 mx-1 w-64 text-center"> <a href="index.php?action=DeleteComment&id=<?php echo htmlspecialchars($comment->id()); ?> ">Supprimer ce commentaire</a></div>
            </div> 

        </div>

        <?php
        endforeach;
        ?>
    </div>
</div>

    <div class="bg-green-800  p-16">
        <div id="retour" class="m-auto text-center bg-green-500 text-white border-2 border-solid rounded-lg border-white hover:border-green-800 hover:text-black hover:bg-green-600 p-2 w-80 h-12 text-center"> <a href="index.php?action=Dashboard" title="aller à la page connexion">Revenir au tableau de bord</a></div>
    </div>
       
<?php
$content = ob_get_clean();
require 'BackTemplate.php';
?>
