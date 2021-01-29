<?php $title = "Un chapitre et ses commentaires"; ?>
<?php ob_start(); ?>
 
    	 
<div class="">
    <h1 class="titre1">"post et commentaires"</h1>
</div>

<!-- visualisation du ticket -->
<div class="">
    <h2>
        <?php echo htmlspecialchars($post->title()); ?>
        <br /><em>Publié le <?php echo $post->getDate(); ?></em>
    </h2>

    
    <?php echo $post->content(); ?>
    
    
</div>

<h2>Commentaires:</h2>

<?php
foreach($comments as $comment):
?>

	<div class="">
		<p><strong><?php echo htmlspecialchars($comment->author()); ?></strong> le <?php echo ($comment->getDate()); ?></p>
		<p><?php echo nl2br(htmlspecialchars($comment->comment())); ?></p>
	</div>

<?php
endforeach;
?>

		<!-- formulaire pour laisser un commentaire -->

<form class="" action="index.php?action=storeComment" method="post" >
	<h2>Laisser votre commentaire :</h2>
	<?php
	if(isset($_SESSION['errors'])) {
		echo $_SESSION['errors'];
		unset($_SESSION['errors']);
	}
	?>
    <p>
        <label id="autor">Votre pseudo:</label> : <br />
        <input class="border-2 border-solid rounded-lg border-green-600  p-1 m-2" type="text" name="autor" /><br /><br />
        <label id="comment">Votre message:</label> : <br />
        <textarea class="border-2 border-solid rounded-lg border-green-600  p-1 m-2" name="comment" rows="6" cols="25"></textarea><br />
        <input type="hidden" name="post_id" value="<?php echo $post->id(); ?>" /><br />

        <input class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2" type="submit" value="Envoyer" />
	</p>
</form> 
	

<?php
$content = ob_get_clean();
require 'Template.php';
?>