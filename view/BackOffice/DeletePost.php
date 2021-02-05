<?php $title = "Suppression d'un chapitre"; ?>
<?php ob_start(); ?>

<div>
	<h2 class="titre1">Voulez-vous vraiment supprimer ce chapitre ainsi que ses commentaires ? <br />
</div>

<section>
	<div class="">     
        <h2>
            <?php echo htmlspecialchars($post->title()); ?>
            <br /><em>Publié le <?php echo $post->getDate(); ?></em>
        </h2> 
        
        <?php echo htmlspecialchars($post->content()); ?>
   
    </div>
</section>

<section>
	<div id="" class=""> <a onclick="return confirm('Etes vous sur de vouloir supprimer ce chapitre et les commentaires associés ?')" href="index.php?action=Delete&Post_id=<?= $post->id() ?>" title="supprimer le chapitre">Confirmer</a></div>
	<br />
    <div id="retour" class="button"> <a href="index.php?action=Dashboard" title="aller à la page connexion">Annuler</a></div>  
</section>


<?php
$content = ob_get_clean();
require 'BackTemplate.php';
?>   