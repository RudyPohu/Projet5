<?php $title = "liste des markers publiés"; ?>
<?php ob_start(); ?>
   
<div class="bg-green-800 ">
    <h1 class=" text-3xl text-green-600 ml-24  p-8">Marqueurs déjà publiés sur votre carte:</h1>
 
    <div class="mx-24 m-auto bg-white ">
    <?php
    foreach($markers as $marker):
    ?>
   
        <div class="p-4 border-solid border-b-8 border-green-800">
            <div class="text-3xl text-green-600 mb-8">
                <?php echo htmlspecialchars($marker->name()); ?>
                <span class="text-base">, publié le <?php echo $marker->getDate(); ?></span><br>

                <p class="text-lg"> Latitude:<span class="text-base  text-green-600"> <?php echo $marker->lat(); ?></span></p>
                <p class="text-lg ">Longitude:<span class="text-base  text-green-600"> <?php echo $marker->lon(); ?></span></p>
                <p class="text-lg">Contenu du marqueur:<span class="text-base  text-green-600"> <?php echo $marker->content(); ?></span></p>
                <p class="text-lg">Lien vers l'article:<span class="text-base  text-green-600"> <?php echo $marker->link(); ?></span></p>
            </div>  

            <div class="flex justify-end">
                <div class="bg-green-600 text-white border-2 border-solid rounded-lg border-green-800 hover:text-black hover:bg-green-500 p-1 mx-1 w-64 text-center"> <a href="index.php?action=UpdateMarker&Marker_id=<?php echo $marker->id(); ?> ">Modifier ce marqueur</a>
                </div>
                <div class="bg-green-600 text-white border-2 border-solid rounded-lg border-green-800 hover:text-black hover:bg-green-500 p-1 mx-1 w-64 text-center"> 
                    <a onclick="return confirm('Etes vous sur de vouloir supprimer ce marker ?')" href="index.php?action=DeleteMarker&Marker_id=<?php echo $marker->id(); ?> ">Supprimer ce marqueur</a>
                </div>
                
            </div> 

        </div>

        <?php
        endforeach;
        ?>
    </div>
</div>

    <div class="bg-green-800  p-16">
        <div id="retour" class="m-auto text-center bg-green-500 text-white border-2 border-solid rounded-lg border-white hover:border-green-800 hover:text-black hover:bg-green-600 p-2 w-80 h-12 text-center"> <a href="index.php?action=Dashboard" title="aller à la page connexion">Revenir au tableau de bord</a></div>
    </div>
       
<?php
$content = ob_get_clean();
require 'BackTemplate.php';
?>
