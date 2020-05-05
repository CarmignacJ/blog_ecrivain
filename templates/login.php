<?php $this->title = "Connexion"; ?>
<div class="formule">
    <h2>Connexion</h2>
    <?= $this->session->show('error_login'); ?>
    <div class="form_log_reg">
        <form method="post" action="../public/index.php?route=login">
            <label for="pseudo">Pseudo</label><br>
            <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
            <label for="password">Mot de passe</label><br>
            <input type="password" id="password" name="password"><br>
            <input type="submit" value="Connexion" id="submit" name="submit"><br>
        </form><br>
    </div>
</div>
