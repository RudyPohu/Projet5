<?php $title = "Page de connection"; ?>
<?php ob_start(); ?>

       
<!-- le titre -->   
<div>
    <h2 class="">Entrer vos identifiants de connexion: </h2>
</div>	

<section class="">
    <div class="">
		<form action="index.php?action=Connexion" method="post">
            <?php
            if(isset($_SESSION['errors'])) 
            {
                echo $_SESSION['errors'];
                unset($_SESSION['errors']);
            }
            ?>

            <h2>Votre login:</h2>
            <input type="text" name="login" class="">
            <br /><br />
            <h2>Votre mot de passe:</h2> 
			<input type="password" name="pass" class="">
            <br /><br /><br />
			<input class="" type="submit" value="valider">
		</form>		
	</div>
</section>
		
	
<?php
$content = ob_get_clean();
require 'Template.php';
?>