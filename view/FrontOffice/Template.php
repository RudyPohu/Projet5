<!DOCTYPE html> 
<!-- template des pages frontend -->

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <meta name="description" content="Projet 5"> 
        <!-- lien css -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <!-- lien leaflet -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>
       <!-- style des markers -->
<!--         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.4.1/MarkerCluster.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.4.1/MarkerCluster.Default.css" /> -->
        <!-- Google Icon Font-->
<!--         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 -->
    </head>

    <body>
        <header>
                
            <div class="h-20 border-b-2 border-green-600 flex justify-between items-center  bg-green-900     w-full  ">
                <div id="">
                    <h3 class="text-3xl text-yellow-500 font-bold p-3">FAMILY TRIP</h3>
                </div>

                    <?php if(isset($_SESSION['id'])) {
                        ?>
                        <h3 class="text-2xl text-yellow-500 font-bold p-3"><?php echo $_SESSION['login'];  ?> ,Vous êtes connecté</h3> 
                    <?php 
                    }
                    else {
                        ?><h3 class="hidden"></h3>
                    <?php    
                    }
                    ?>
<!--le menu-->
                <nav>
                    <ul class="flex">
                         <li class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2"><a href="index.php" title="Page d'accueil">Page d'accueil</a></li>
                         <li class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2"><a href="index.php?action=Posts" title="Nos destinations">Nos destinations</a></li>
                         <li class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2"><a href="index.php?action=Map" title="Carte interactive">Carte interactive</a></li>
                        
                        <?php if(isset($_SESSION['admin'])) {
                            ?>
                            <li class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2"><a href="index.php?action=Dashboard" title="aller au Tableau de bord">Tableau de bord</a></li>
                            <li class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2"><a href="index.php?action=Disconnection" title="déconnexion">Me déconnecter</a></li>
                        <?php 
                        }
                        else if(isset($_SESSION['id'])) {
                            ?>
                            <li class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2"><a href="index.php?action=Disconnection" title="déconnexion">Me déconnecter</a></li>
                        <?php 
                        }
                        else {
                            ?>
                            <li class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2"><a href="index.php?action=Login" title="Connexion">Connexion</a></li>
                        <?php    
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </header> 

        <div>
            <?= $content ?>
        </div>

        <footer class="bg-yellow-400">            
            <p class="text-center text-green-700">Copyright Rudy POHU - Etudiant chez OpenClassrooms - 2020</p>    
        </footer>

        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
                integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
                crossorigin="">  
        </script>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.4.1/leaflet.markercluster.js'>
        </script>
        <?php if (isset($script)) {
            echo $script;
        }
        ?>
	</body>
</html>