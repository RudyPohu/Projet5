<!DOCTYPE html> 
<!-- template des pages frontend -->

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <meta name="description" content="Projet 5"> 
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
    </head>

    <body>
        <header>
                
            <div class="h-20 border-b-2 border-green-600 flex justify-between items-center  bg-green-900     w-full  ">
                <div id="">
                    <h3 class="text-lg"> FAMILY WORLD </h3>
                </div>
<!--le menu-->
                <nav>
                    <ul class="flex">
                        <li class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2"><a href="index.php" title="Page d'accueil">Page d'accueil</a></li>
                        <li class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2"><a href="index.php?action=Map" title="Carte interactive">Carte interactive</a></li>
                        <li class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2"><a href="index.php?action=Posts" title="Nos destinations">Nos destinations</a></li>
                        <li class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2"><a href="index.php?action=xxx" title="espace membre">Espace membre</a></li>
                        <li class="bg-green-400 border-2 border-solid rounded-lg border-green-600 hover:bg-yellow-400 p-1 m-2"><a href="index.php?action=Login" title="Connection">Login</a></li>
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

	</body>
</html>