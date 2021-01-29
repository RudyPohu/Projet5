<?php $title = "Modification d'un chapitre"; ?>
<?php ob_start(); ?>


<div>
    <h2 class="">Modification du post: <br>
    	<?php echo htmlspecialchars($post->title()); ?></h2>
</div>

<section>
    <form action="index.php?action=Update" method="post" class="formtiny">
        <p>
	        <label for="title">Titre du post:</label><br /><br />
	        <input class="" type="text" name="title" value="<?php echo htmlspecialchars($post->title()); ?>" /><br /><br />
	        <label for="content">Contenu du post:</label> : <br /><br />
	        <textarea id="tiny" class="texte" name="content" rows="25" cols="150"><?php echo $post->content(); ?></textarea><br />
			<input type="hidden" name="id" value="<?= $post->id() ?>">
	        <input class="" type="submit" value="Modifier" />
		</p>
	</form> 

    <div id="retour" class="button"><a href="index.php?action=Dashboard" title="aller à la page connexion">Annuler</a></div>    
</section>


<?php
$content = ob_get_clean();
require 'BackTemplate.php';
?>   