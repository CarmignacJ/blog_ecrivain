<?php $this->title = "Connexion"; ?>

<div class="formule">
    <div id="page_single">
        <h3 class="text-center pt-5">Connexion</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    <form class="form-signin form-horizontal" role="form" method="post" action="../public/index.php?route=login">
                            <div class="form-group">
                                <label for="username">Pseudo:</label><br>
                                <input class="form-control" type="text" name="pseudo" id="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>" placeholder="Entrez votre pseudo" required autofocus />
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe:</label><br>
                                <input class="form-control" type="password" id="password" name="password"  placeholder="Entrez votre mot de passe" required />
                            </div>
                            <div class="form-group">
                                <label for="remember-me"><span>Se rappeler de moi</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <button class="btn btn-default btn-primary" type="submit" value="Connexion" id="submit" name="submit"><span class="glyphicon glyphicon-log-in"></span> Connexion</button>
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="../public/index.php?route=register">Inscrivez-vous ici</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>