<?php $title = "Page de connection"; ?>
<?php ob_start(); ?>

       
<section class="bg-yellow-400 p-4 lg:p-16">
   	

    <div class="lg:flex">
        <div class="lg:w-6/12 p-8 m-4 bg-green-400 border-2 border-solid rounded-lg border-green-600 ">
            <div class="p-4">
                <h2 class="text-center text-3xl text-green-800 font-bold">Pas encore inscrit ?</h2>
                <p class="text-center text-2xl text-green-800">Inscrivez-vous:</p>
            </div>
            <form action="index.php?action=Entry" method="post">
                <?php
                if(isset($_SESSION['errors'])) 
                {
                    echo htmlspecialchars($_SESSION['errors']);
                    unset($_SESSION['errors']);
                }
                ?>

                <h2 class="text-center">Votre pseudo:</h2>
                <input class="block m-auto lg:w-64 border-2 border-solid rounded-lg border-green-600  p-1 m-4" type="text" name="login" >
                <br />
                <h2 class="text-center mb-4">Votre mot de passe:</h2> 
                <input class="block m-auto lg:w-64 border-2 border-solid rounded-lg border-green-600  p-1 m-4" type="password" name="pass" >
                <br />
                <input class="block m-auto w-48 bg-yellow-400 border-2 border-solid rounded-lg border-green-600 hover:text-white hover:bg-green-800 p-1 m-2 text-center " type="submit" value="valider">
            </form>     
        </div>
        <div class="lg:w-6/12 p-8 m-4 bg-green-400 border-2 border-solid rounded-lg border-green-600">
    		 <div class="p-4">
                <h2 class="text-center text-3xl text-green-800 font-bold">Déja inscrit ?</h2>
                <p class="text-center text-2xl text-green-800"> Entrer vos identifiants de connexion:</p>
            </div>
            <form action="index.php?action=Connection" method="post">
                <?php
                if(isset($_SESSION['errors'])) 
                {
                    echo htmlspecialchars($_SESSION['errors']);
                    unset($_SESSION['errors']);
                }
                ?>

                <h2 class="text-center ">Votre pseudo:</h2>
                <input class="block m-auto lg:w-64 border-2 border-solid rounded-lg border-green-600  p-1 m-4" type="text" name="login" >
                <br />
                <h2 class="text-center mb-4">Votre mot de passe:</h2> 
    			<input class="block m-auto lg:w-64 border-2 border-solid rounded-lg border-green-600  p-1 m-4" type="password" name="pass" >
                <br />
    			<input class="block m-auto w-48 bg-yellow-400 border-2 border-solid rounded-lg border-green-600 hover:text-white hover:bg-green-800 p-1 m-2 text-center " type="submit" value="valider">
    		</form>		
    	</div>
    </div>
</section>
		
	
<?php
$content = ob_get_clean();
require 'Template.php';
?>