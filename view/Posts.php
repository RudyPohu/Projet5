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

    <div class="button"><a href="index.php?action=OnePost&post_id=<?php echo $post->id(); ?>">Lire la suite</a></div>


    <?php
    endforeach;
    ?>

       
<?php
$content = ob_get_clean();
require 'Template.php';
?>
