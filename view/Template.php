<!DOCTYPE html> 
<!-- template des pages frontend -->

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <meta name="description" content="Projet 5"> 
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    </head>

    <body>
        <header>
                
            <div class="h-20 border-b-2 border-green-600 flex justify-between items-center  bg-yellow-400     fixed w-full  ">
                <div id="">
                    <h3> FAMILY WORLD </h3>
                </div>
<!--le menu-->
                <nav>
                    <ul class="flex">
                        <li class="bg-gray-300 border-2 border-solid rounded-lg border-green-600 p-1 m-2"><a href="index.php" title="Page d'accueil">Page d'accueil</a></li>
                        <li class="bg-gray-300 border-2 border-solid rounded-lg border-green-600 p-1 m-2"><a href="index.php" title="Carte interactive">Carte interactive</a></li>
                        <li class="bg-gray-300 border-2 border-solid rounded-lg border-green-600 p-1 m-2"><a href="index.php?action=Posts" title="Nos destinations">Nos destinations</a></li>
                        <li class="bg-gray-300 border-2 border-solid rounded-lg border-green-600 p-1 m-2"><a href="index.php?action=xxx" title="espace membre">Espace membre</a></li>
                        <li class="bg-gray-300 border-2 border-solid rounded-lg border-green-600 p-1 m-2"><a href="index.php?action=Login" title="Connection">Login</a></li>
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