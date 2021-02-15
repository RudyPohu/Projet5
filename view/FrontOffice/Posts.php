<?php $title = "Destinations"; ?>
<?php ob_start(); ?>
   
<section class="bg-yellow-400 ">
    <h1 class="text-center text-5xl text-green-600 font-bold  p-16">Nos destinations</h1>


<?php
    foreach($posts as $post):
    ?>
    <div class="w-9/12 m-auto bg-white">
        <div class="text-center p-8 border-solid border-b-8 border-yellow-400">
            <h2 class="text-4xl text-green-600 mb-4">
                <?php echo htmlspecialchars($post->title()); ?>
                <br /><em class="text-2xl text-green-600">Publié le <?php echo htmlspecialchars($post->getDate()); ?></em>
            </h2> 
            
            <?php 
            if(strlen(htmlspecialchars($post->content())) > 200) {
                echo substr(htmlspecialchars($post->content()), 0, 400);
                ?> <p>[...]</p>
                <?php
            } else {
                echo htmlspecialchars($post->content()); 
            }
            ?>
          
        
            <div class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-green-400 w-32 m-auto p-1 text-center mt-8"><a href="index.php?action=OnePost&post_id=<?php echo htmlspecialchars($post->id()); ?>">Lire la suite</a>
            </div>

        </div>

        
    </div>


    <?php
    endforeach;
    ?>
</section>
       
<?php
$content = ob_get_clean();
require 'Template.php';
?>
