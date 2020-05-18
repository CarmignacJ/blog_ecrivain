<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title><?= $title ?></title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/boostrap/bootstrap.min.css" />
        <link rel="stylesheet" href="css/style.css" />

        <!-- Tinymce -->
        <link rel="stylesheet" href="js/tinymce/themes/silver/theme.min.js" />

        <script src="js/tinymce/tinymce.min.js"></script>
        <script src="js/tinymce/jquery.tinymce.min.js"></script>
        
        <script>
            tinymce.init({
                selector: '#mytextarea',
            });
        </script>

    </head>
    
    <body>
    <div id="bloc_page">

        <header class="navbar navbar-expand-md navbar-dark bg-dark">
    
            <a href="../public/index.php" class="navbar-brand"> <!-- intégration logo -->
                <h1>Billet simple pour l'Alaska</h1>
            </a>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-content"> <!-- activation bouton -->
                <span class="navbar-toggler-icon"></span> <!-- icone bouton -->
    
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbar-content">
                    
                <nav>               
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="../public/index.php">Accueil</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="../public/index.php?route=chapter">Chapitre</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="../public/index.php?route=register">Inscription</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="../public/index.php?route=login">Connexion</a>
                        </li>
                    </ul>
                </nav>

            </div>       
                        
        </header>
            
        <div id="content">
            <?= $content ?>
        </div>
        
        <!-- Footer -->
        <footer class="page-footer text-white bg-dark">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright : Jean Forteroche</div>

        </footer>

        <!-- JavaScript Boostrap plugin  -->
        <script src="js/bootstrap/bootstrap.min.js"></script>

    </body>

</html>