<?php $this->title = "Inscription"; ?>

<div class="formule">
    <div id="page_garde">
        <h3 class="text-center pt-5">Inscription</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    <form class="form-signin form-horizontal" role="form" method="post" action="../public/index.php?route=register">
                            <div class="form-group">
                                <label for="username">Pseudo:</label><br>
                                <input class="form-control" type="text" name="pseudo" id="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>" placeholder="Entrez votre pseudo" required autofocus />
                                <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe:</label><br>
                                <input class="form-control" type="password" id="password" name="password"  placeholder="Entrez votre mot de passe" required />
                                <?= isset($errors['password']) ? $errors['password'] : ''; ?>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-default btn-primary" type="submit" value="Inscription" id="submit" name="submit"><span class="glyphicon glyphicon-log-in"></span>Inscription</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>