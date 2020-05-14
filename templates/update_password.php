<?php $this->title = 'Modifier mot de passe'; ?>

<div id="page_garde">
<h2>Modifier votre mot de passe</h2>
    <div class="row">
        <form method="post" action="../public/index.php?route=updatePassword">

            <div class="form-group">
                <p>Le mot de passe de <?= $this->session->get('pseudo'); ?> sera modifié</p>
                <label for="password">Mot de passe:</label><br>
                <input class="form-control" type="password" id="password" name="password"  placeholder="Entrez votre mot de passe" maxlength="50"><br />                    
         
                <input class="btn btn-default btn-primary" type="submit" value="Mettre à jour" id="submit" name="submit">
            </div>
            <a href="../public/index.php">Retour à l'accueil</a>
            
        </form>
    </div>
</div>	