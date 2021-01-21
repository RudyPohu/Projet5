<!DOCTYPE html> 
<!-- template des pages frontend -->

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <meta name="description" content="Projet 5"> 
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
        <header>
                
            <div class=entete>
                <div id="logo">
                    <h3> FAMILY WORLD </h3>
                </div>
<!--le menu-->
                <nav>
                    <ul  id="menu">
                        <li class="menu"><a href="index.php" title="Carte interactive">Carte interactive</a></li>
                        <li class="menu"><a href="index.php?action=xxx" title="Nos destinations">Nos destinations</a></li>
                        <li class="menu"><a href="index.php?action=xxx" title="Galerie photo">Galerie photo</a></li>
                        <li class="menu"><a href="index.php?action=xxx" title="Chat">Chatter avec nous</a></li>
                        <li class="menu"><a href="index.php?action=xxx" title="espace membre">Espace membre</a></li>
                        <li class="menu"><a href="index.php?action=xxx" title="Connection">Connection</a></li>
                    </ul>
                </nav>
            </div>
        </header> 

        <div>
            <?= $content ?>
        </div>

        <footer id="footer">            
            <p>Copyright Rudy POHU - Etudiant chez OpenClassrooms - 2020</p>    
        </footer>

	</body>
</html>