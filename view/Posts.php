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

    <div class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2"><a href="index.php?action=OnePost&post_id=<?php echo $post->id(); ?>">Lire la suite</a></div>


    <?php
    endforeach;
    ?>

       
<?php
$content = ob_get_clean();
require 'Template.php';
?>
