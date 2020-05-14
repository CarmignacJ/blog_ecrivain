<?php
$route = isset($post) && $post->get('id') ? 'editArticle&articleId='.$post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>


<div id="page_garde">
    <div class="row">
        <form method="post" action="../public/index.php?route=<?= $route; ?>">

            <div class="form-group">
                <label for="title">Titre</label><br>
                <input class="form-control" type="text" id="title" name="title" placeholder=Titre maxlength="50" value="<?= isset($post) ? htmlspecialchars($post->get('title')): ''; ?>"><br>                    
                <?= isset($errors['title']) ? $errors['title'] : ''; ?>                                                    
                <label for="content">Contenu</label><br>
                <textarea class="form-control" id="content" name="content" placeholder=Contenu cols="50" rows="7"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>				
                <?= isset($errors['content']) ? $errors['content'] : ''; ?>              
                <input class="btn btn-default btn-primary" type="submit" value="<?= $submit; ?>" id="submit" name="submit">
            </div>

        </form>
    </div>
</div>	