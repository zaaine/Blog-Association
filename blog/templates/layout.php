<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link rel="stylesheet" href="src/styles/style.css">
    </head>

    <body>
  
        <!-- En-tête avec la navigation -->
        <header>
            <nav class="navbar">
                <ul class="navbarlist">
                <li class="navbarListLink"><a href="#">Le Club</a></li>
                <li class="navbarListLink"><a href="#">Sports</a></li>
                <li class="navbarListLink"><a href="#">Stages</a></li>
                <li class="navbarListLink"><a href="#">PUC Social Club</a></li>
                <li class="navbarListLink"><a href="#">Art & Sport</a></li>
                </ul>
            </nav>
        </header>

        <!-- Contenu de la page -->
        <?= $content ?>

        <!-- Footer -->
        <footer> Copyright Zaaine Aziz</footer>
    </body>
</html>
