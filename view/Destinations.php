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
            <?php echo htmlspecialchars($post->titre()); ?>
            <br /><em>Publié le <?php echo $post->getDate(); ?></em>
        </h2> 
        
            <?php echo htmlspecialchars($post->contenu()); ?>

    </div>

    <?php
    endforeach;
    ?>

       
<?php
$content = ob_get_clean();
require 'layout.php';
?>
