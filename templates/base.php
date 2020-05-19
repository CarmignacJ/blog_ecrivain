<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8" />
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
                language : "fr_FR",
                height: 500,
                forced_root_block : '',
                invalid_elements : 'strong,em,br'
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
                            <a class="nav-link" href="../public/index.php?route=chapter">Chapitres</a>
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

        <!-- JS, Popper.js, and jQuery -->  
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        
    </body>

</html>