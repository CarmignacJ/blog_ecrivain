<?php
$route = isset($post) && $post->get('id') ? 'editComment' : 'addComment';
$submit = $route === 'addComment' ? 'Ajouter' : 'Mettre à jour';
?>


<div id="page_garde">
    <div class="row">
        <form method="post" action="../public/index.php?route=<?= $route; ?>&articleId=<?= htmlspecialchars($article->getId()); ?>">

            <div class="form-group">
                <label for="pseudo">Pseudo</label><br>
                <input class="form-control" type="text" id="pseudo" name="pseudo" placeholder=Pseudo maxlength="50" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br />                    
                <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>                                     
                <label>Contenu</label>
                <textarea class="form-control" id="content" name="content" placeholder=Contenu cols="50" rows="7"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>				
                <?= isset($errors['content']) ? $errors['content'] : ''; ?>              
                <input class="btn btn-default btn-primary" type="submit" value="<?= $submit; ?>" id="submit" name="submit">
            </div>

        </form>
    </div>
</div>	