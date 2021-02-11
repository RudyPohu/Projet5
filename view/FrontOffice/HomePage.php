<?php $title = "Page d'accueil"; ?>
<?php ob_start(); ?>
   
<div class="w-full ">
	<div id="slider" class="relative">
	    <ul class="">
	        <li class="absolute">
	        	<div class="absolute bg-green-800 p-8 opacity-75 ml-40 mt-48 text-5xl text-yellow-400  text-center font-bold">Le site d'une famille sur les routes d'Europe</div>
	        	<img alt="imageslider" src="images/slider12.jpg"/>
	        </li>
			<li class="absolute ">
				<div class="absolute bg-green-800 p-8 opacity-75 ml-48 mt-48 text-5xl text-yellow-400  text-center font-bold">Des articles publiés toutes les semaines</div>
				<img alt="imageslider" src="images/slider22.jpg" />
			</li>
			<li class="absolute ">
				<div class="absolute bg-green-800 p-8 opacity-75 ml-64 mt-48 text-5xl text-yellow-400  text-center font-bold">Une carte pour suivre notre trajet</div>
				<img alt="imageslider" src="images/slider32.jpg" />
			</li>
			<li class="absolute ">
				<div class="absolute bg-green-800 p-8 opacity-75 ml-44 mt-48 text-5xl text-yellow-400  text-center font-bold">Un partage de notre expérience avec vous</div>
				<img alt="imageslider" src="images/slider42.jpg" />
			</li>		   		
	    </ul>
    </div>
</div>

<div class=" pt-96">
	<div class=" bg-yellow-400 pb-28">
		<h2 class="text-4xl text-green-600 text-center pt-24 p-16">Découvrez toutes nos destinations</h2>
	    
	    <div class="flex flex-wrap justify-around">	
			<?php
		    foreach($posts as $post):
		    ?>
	    
			<div class=" border-2 border-solid rounded-lg border-green-600 w-96 p-5 bg-yellow-300 shadow-2xl mb-8	">
			    <div class="text-center ">
			        <h3 class="text-3xl text-green-600 pb-4">
			            <?php echo htmlspecialchars($post->title()); ?>
			            <br /><em class="text-sm text-green-600 ">Publié le <?php echo $post->getDate(); ?></em>
			        </h3> 
			        
                    <?php 
		            if(strlen($post->content()) > 200) {
		                echo substr (htmlspecialchars($post->content()), 0, 400);
		                ?> <p>[...]</p>
		                <?php
		            } else {
		                echo htmlspecialchars($post->content()); 
		            }
		            ?>
			    </div>

			    <div class=" bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:text-white hover:bg-green-800 w-32 text-center m-auto p-1 mt-8"><a href="index.php?action=OnePost&post_id=<?php echo htmlspecialchars($post->id()); ?>">Lire la suite</a>
			    </div>
			</div>
		    <?php
		    endforeach;
		    ?>

		    <div class="animate-bounce bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:text-white hover:bg-green-800 w-80 text-center m-auto p-1 mt-8"><a href="index.php?action=Posts">Voir tous les articles</a>
		    </div>
		</div>
    </div>

    <div class="bg-green-400 pb-28">
		<h2 class="text-4xl text-green-800 text-center p-12">Suivez notre trajet</h2>
		<div class="flex justify-center">
			<img class="w-96 border-8 border-solid rounded-2xl border-green-500" alt="image carte europe" src="images/carteeuropenous.PNG">
			<div class=" w-2/5 p-8">
				<p class=" text-2xl text-green-800 text-center pb-12">Vous souhaitez découvrir les points forts de notre voyage, alors cliquez sur le bouton ci-dessous pour suivre notre itinéraire. Nous mettons à jour régulièrement nos coups de coeur...</p>
				<div class="text-center">
					<a class="bg-yellow-400 border-2 border-solid rounded-lg border-green-600 hover:bg-green-800 hover:text-white p-6 text-center  " href="index.php?action=Map" title="Carte interactive">Accéder à notre itinéraire</a>
				</div>
				
			</div>
		</div>
	</div>

	<div class="bg-yellow-400 pb-28 ">
		<h2 class="text-4xl text-green-800 text-center p-12">Suivez également notre aventure sur</h2>
		<img class="m-auto w-2/5 border-2 border-solid rounded-2xl border-green-500" src="images/LogoFI.jpg" alt="logo facebook et instagram">
		<h2 class="text-4xl text-green-800 text-center p-12">
			<a class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:text-white hover:bg-green-800  text-center m-auto p-1 mt-8" href="https://www.facebook.com/vivredaventure">Facebook</a>
			 et 
			<a class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:text-white hover:bg-green-800  text-center m-auto p-1 mt-8"  href="https://www.instagram.com/vivredaventure/">Instagram</a></h2>
	</div>
</div>


<?php
$content = ob_get_clean();
ob_start();
?>
	<script
 		src="https://code.jquery.com/jquery-3.4.0.min.js"
  		integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
 		crossorigin="anonymous"></script>
 		
	<script src="js/slider.js"></script>

	<script>
		window.onload = function() {
			slider.initSlider();
			slider.slideImg();
		}
	</script>
       
<?php
$script = ob_get_clean();
require 'Template.php';
?>
