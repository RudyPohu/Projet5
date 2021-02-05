<?php $title = "Destinations"; ?>
<?php ob_start(); ?>
   
<section class="bg-green-800 ">
    <h1 class=" text-3xl text-green-600 ml-24  p-8">Articles déjà publiés:</h1>
 
    <div class="mx-24 m-auto bg-white ">
    <?php
    foreach($posts as $post):
    ?>
   
        <div class="p-4 border-solid border-b-8 border-green-800">
            <p class="text-3xl text-green-600 mb-8">
                <?php echo htmlspecialchars($post->title()); ?>
                <span class="text-base">, publié le <?php echo $post->getDate(); ?></span>
            </p> 
            
            <?php 
            if(strlen($post->content()) > 200) {
                echo substr ($post->content(), 0, 400);
                ?> <p>[...]</p>
                <?php
            } else {
                echo htmlspecialchars($post->content()); 
            }
            ?>
        
        <div class="flex justify-end">
            <div class="bg-green-200 border-2 border-solid rounded-lg border-green-600 hover:bg-green-400 p-1 mx-1 w-64 text-center"> <a href="index.php?action=UpdatePost&Post_id=<?php echo $post->id(); ?> ">Modifier ce chapitre</a></div>
            <div class="bg-green-200 border-2 border-solid rounded-lg border-green-600 hover:bg-green-400 p-1 mx-1 w-64 text-center"> <a href="index.php?action=DeletePost&Post_id=<?php echo $post->id(); ?> ">Supprimer ce chapitre</a></div>
        </div>    
    </div>

    <?php
    endforeach;
    ?>
    

    <div id="retour" class="bg-green-800 border-2 border-solid rounded-lg border-white hover:bg-green-400 p-1 m-12"> <a href="index.php?action=Dashboard" title="aller à la page connexion">Revenir au tableau de bord</a></div>
</section>
       
<?php
$content = ob_get_clean();
require 'BackTemplate.php';
?>
