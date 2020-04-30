<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title><?= $title ?></title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" />
        <script src="https://kit.fontawesome.com/f78e4e369b.js" crossorigin="anonymous"></script>
    
    </head>
    
    <body>
    <div id="bloc_page">

        <header class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="../public/index.php" class="navbar-brand"> <!-- intégration logo -->
            <i class="fas fa-feather-alt"></i>
            
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
    <div class="footer-copyright text-center py-3">© 2020 Copyright : Jean Forteroche

    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
</div>


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>

</html>