<?php
$route = isset($post) && $post->get('id') ? 'editArticle&articleId='.$post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>
<div id="page_garde">
    <form method="post" action="../public/index.php?route=<?= $route; ?>">
            
        <div class="form-group">
            <label for="title">Titre</label><br>
            <input type="text" id="title" name="title" value="<?= isset($post) ? htmlspecialchars($post->get('title')): ''; ?>"><br>
            <?= isset($errors['title']) ? $errors['title'] : ''; ?>
            <label for="content">Contenu</label><br>
            <textarea id="mytextarea" id="content" name="content"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
            <?= isset($errors['content']) ? $errors['content'] : ''; ?>
            <input class="btn btn-default btn-primary" type="submit" value="<?= $submit; ?>" id="submit" name="submit">
        </div>
    </form>
</div>