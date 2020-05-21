<?php $this->title = 'Mon profil'; ?>

<div id="page_garde">
    <h2>Mon profil</h2>
    <?= $this->session->show('update_password'); ?>
    <div>
        <h3><?= $this->session->get('pseudo'); ?></h3>
        <a href="../public/index.php?route=updatePassword">Modifier son mot de passe</a>
        <a href="../public/index.php?route=deleteAccount">Supprimer mon compte</a>
    </div>
    <br>
    <a href="../public/index.php">Retour à l'accueil</a>
</div>