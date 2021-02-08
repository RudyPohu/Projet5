<!DOCTYPE html> 
<!-- template des pages frontend -->

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <meta name="description" content="Projet 5"> 
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>
        <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
          tinymce.init({
            selector : "#tiny"
          });

        </script>

    </head>

    <body>
        <header>
                
            <div class="h-20 border-b-2 border-green-800 flex justify-between items-center  bg-green-400  px-12  w-full  ">
                <div id="">
                    <h3 class="text-3xl text-green-800 font-bold p-3"> TABLEAU DE BORD </h3>
                </div>
<!--le menu-->
                    <?php if(isset($_SESSION['admin'])) {
                        ?>
                        <h3 class="text-2xl text-green-700 font-bold p-3"><?php echo $_SESSION['login'];  ?> ,Vous êtes connecté</h3> 
                    <?php 
                    }
                    else {
                        ?><h3 class="hidden"></h3>
                    <?php    
                    }
                    ?>

                <nav>
                    <ul class="flex">
                        <li class="bg-green-600 border-2 border-solid rounded-lg border-green-800 hover:bg-green-500 px-3 p-1 m-2"><a href="index.php" title="Page d'accueil">Retour à la page d'accueil de votre site web</a></li>
<!--                         <li class="bg-gray-400 border-2 border-solid rounded-lg border-gray-600 hover:bg-yellow-400 p-1 m-2">
                            <?php if(isset($_SESSION['admin'])) {
                                ?>
                                <a href="index.php?action=Dashboard" title="aller au Tableau de bord">Tableau de bord</a> 
                            <?php 
                            }
                            else {
                                ?><a href="index.php?action=Login" title="Connexion">Connexion</a></li>
                            <?php    
                            }
                            ?> -->
                    </ul>
                </nav>
            </div>
        </header> 

        <div>
            <?= $content ?>
        </div>

        <footer id="">            
            <p>Copyright Rudy POHU - Etudiant chez OpenClassrooms - 2020</p>    
        </footer>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
  crossorigin=""></script>
        <?php if (isset($script)) {
            echo $script;
        }
        ?>
	</body>
</html>