<?php $title = "Page d'accueil"; ?>
<?php ob_start(); ?>
   
<section class="w-full ">
	<div id="slider" class="relative">
	    <ul class="">
	        <li class="absolute">
	        	<div class="absolute bg-green-800 p-8 opacity-75 ml-40 mt-48 text-5xl text-yellow-400  text-center font-bold">Le site d'une famille sur les routes d'Europe</div>
	        	<img class="w-max " src="images/slider12.jpg"/>
	        </li>
			<li class="absolute ">
				<div class="absolute bg-green-800 p-8 opacity-75 ml-48 mt-48 text-5xl text-yellow-400  text-center font-bold">Des articles publiés toutes les semaines</div>
				<img class=" " src="images/slider22.jpg" />
			</li>
			<li class="absolute ">
				<div class="absolute bg-green-800 p-8 opacity-75 ml-64 mt-48 text-5xl text-yellow-400  text-center font-bold">Une carte pour suivre notre trajet</div>
				<img class="" src="images/slider32.jpg" />
			</li>
			<li class="absolute ">
				<div class="absolute bg-green-800 p-8 opacity-75 ml-44 mt-48 text-5xl text-yellow-400  text-center font-bold">Un partage de notre expérience avec vous</div>
				<img class="" src="images/slider42.jpg" />
			</li>		   		
	    </ul>
    </div>
</section>

<section class=" pt-80">
	<div class=" bg-yellow-400 pb-28">
		<h2 class="text-4xl text-green-600 text-center p-16">Découvrez toutes nos destinations</h2>
	    
	    <div class="flex justify-around ">	
			<?php
		    foreach($posts as $post):
		    ?>
	    
			<div class="border-2 border-solid rounded-lg border-green-600 w-96 p-3 bg-yellow-300 shadow-2xl	">
			    <div class="text-center">
			        <h3 class="text-3xl text-green-600 pb-4">
			            <?php echo htmlspecialchars($post->title()); ?>
			            <br /><em class="text-sm text-green-600 ">Publié le <?php echo $post->getDate(); ?></em>
			        </h3> 
			        
                    <?php 
		            if(strlen($post->content()) > 200) {
		                echo substr ($post->content(), 0, 400);
		                ?> <p>[...]</p>
		                <?php
		            } else {
		                echo htmlspecialchars($post->content()); 
		            }
		            ?>
			    </div>

			    <div class="animate-bounce bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:text-white hover:bg-green-800 w-32 text-center m-auto p-1 mt-8"><a href="index.php?action=OnePost&post_id=<?php echo $post->id(); ?>">Lire la suite</a>
			    </div>
			</div>
		    <?php
		    endforeach;
		    ?>
		</div>
    </div>

    <div class="bg-green-400 pb-28">
		<h2 class="text-4xl text-green-800 text-center p-12">Suivez notre trajet</h2>
		<div class="text-center">
			<img class="w-1/2 m-auto" src="images/carteeuropenous.png">
			<div class="animate-bounce">
				<a class=" bg-yellow-400 border-2 border-solid rounded-lg border-green-600 hover:bg-green-800 hover:text-white p-6 text-center " href="index.php?action=Map" title="Carte interactive">Accéder à notre carte interactive</a>
			</div>
		</div>
	</div>
</section>


<?php
$content = ob_get_clean();
ob_start();
?>
	<script
 		src="https://code.jquery.com/jquery-3.4.0.min.js"
  		integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
 		crossorigin="anonymous"></script>
 		
	<script type="text/javascript" src="js/slider.js"></script>

	<script type="text/javascript">
		window.onload = function() {
			slider.initSlider();
			slider.slideImg();
		}
	</script>
       
<?php
$script = ob_get_clean();
require 'Template.php';
?>
