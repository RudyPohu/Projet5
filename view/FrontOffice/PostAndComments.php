<?php $title = "Un chapitre et ses commentaires"; ?>
<?php ob_start(); ?>
 

<section class="bg-yellow-400 ">
	<div class="w-9/12 m-auto  ">
        <div class="text-center ">
            <h2 class="text-5xl font-bold text-green-600 mb-8  p-12">
                <?php echo htmlspecialchars($post->title()); ?>
                <br /><em class="text-2xl text-green-600">Publié le <?php echo $post->getDate(); ?></em>
            </h2> 

		    <div class="bg-white p-16" >
		    <?php echo htmlspecialchars($post->content());  ?>
		    </div>
    	</div>
	</div>
</section>

<section class="text-center bg-yellow-400 pb-16">
	<h2 class="text-4xl text-green-600 mb-8  p-12">Commentaires:</h2>

	<?php
	foreach($comments as $comment):
	?>

		<div class="w-6/12 bg-white m-auto mb-4 p-8 border-2 border-solid rounded-lg border-green-600">
		
			<p class=" text-2xl text-green-600"><strong><?php echo htmlspecialchars($comment->author()); ?></strong> le <?php echo ($comment->getDate()); ?></p>
			<p><?php echo nl2br(htmlspecialchars($comment->comment())); ?></p>

		</div>
	<?php
	endforeach;
	?>

		<!-- formulaire pour laisser un commentaire -->
	<?php if(isset($_SESSION['id']) or isset($_SESSION['admin'])) {
        ?>
        <form class="md:w-5/12 bg-green-400 m-auto mb-4 p-8 border-2 border-solid rounded-lg border-green-600" action="index.php?action=StoreComment" method="post" >
			<h2 class="text-3xl text-green-900 p-4">Laisser votre commentaire :</h2>
			<?php
			if(isset($_SESSION['errors'])) {
				echo $_SESSION['errors'];
				unset($_SESSION['errors']);
			}
			?>
		    <p>
		        <label id="author">Votre pseudo:</label> : <br />
		        <input class=" w-64 border-2 border-solid rounded-lg border-green-600  p-1 m-2" type="text" name="author" value="<?php echo htmlspecialchars($_SESSION['login']);  ?>" /><br /><br />
		        <label id="comment">Votre message:</label> : <br />
		        <textarea class=" w-96 border-2 border-solid rounded-lg border-green-600  p-1 m-2" name="comment" rows="6" cols="25"></textarea><br />
		        <input type="hidden" name="post_id" value="<?php echo $post->id(); ?>" /><br />

		        <input class="w-64  bg-yellow-400 border-2 border-solid rounded-lg border-green-600 hover:text-white hover:bg-green-800 p-1 m-2" type="submit" value="Envoyer" />
			</p>
		</form> 
    <?php 
    }
    else {
        ?>
		<div class="border-2 border-solid rounded-lg border-green-600 w-6/12 p-8 m-16 m-auto">
			<h2 class="text-3xl text-green-900 p-4 mb-4">Connectez-vous pour laisser un message</h2>
	        <div class="w-64 m-auto bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-green-800 hover:text-white p-1 ">
			<a href="index.php?action=Login" title="Connexion">Connexion</a>
			</div>
		</div>
    <?php    
    }
    ?>
	
	<div class=" bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:text-white hover:bg-green-800 w-80 text-center m-auto p-1 mt-8"><a href="index.php?action=Posts">Retour à la liste des chapitres</a>

	 
</section>	

<?php
$content = ob_get_clean();
require 'Template.php';
?>