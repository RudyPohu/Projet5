<?php $title = "Destinations"; ?>
<?php ob_start(); ?>
   
<section class="sliderpage">
    <h1 class="">Nos destinations</h1>
</section>


    <?php
    foreach($posts as $post):
    ?>
       <div class="">
        <h2>
            <?php echo htmlspecialchars($post->title()); ?>
            <br /><em>Publié le <?php echo $post->getDate(); ?></em>
        </h2> 
        
        <?php echo htmlspecialchars($post->content()); ?>
    </div>
        
        <div>
            <div class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2"> <a href="index.php?action=UpdatePost&Post_id=<?php echo $post->id(); ?> ">Modifier ce chapitre</a></div>
            <div class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2"> <a href="index.php?action=DeletePost&Post_id=<?php echo $post->id(); ?> ">Supprimer ce chapitre</a></div>
        </div>    
    </div>

    <?php
    endforeach;
    ?>


    
<div id="retour" class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2"> <a href="index.php?action=Dashboard" title="aller à la page connexion">Revenir au tableau de bord</a></div>

       
<?php
$content = ob_get_clean();
require 'BackTemplate.php';
?>
