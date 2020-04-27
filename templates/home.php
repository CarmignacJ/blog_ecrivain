<?php
require '../src/DAO/DAO.php';
require '../src/DAO/ArticleDAO.php';

use App\src\DAO\ArticleDAO;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon blog</title>
</head>

<body>
<div>
    <h1>Mon blog</h1>
    <p>En construction</p>
    <?php
    $article = new ArticleDAO();
    $articles = $article->getArticles();
    while($article = $articles->fetch())
    {
        ?>
        <div>
            <h2><a href="single.php?articleId=<?= htmlspecialchars($article->id);?>"><?= htmlspecialchars($article->title);?></a></h2>
            <p><?= htmlspecialchars($article->content);?></p>
            <p><?= htmlspecialchars($article->author);?></p>
            <p>Créé le : <?= htmlspecialchars($article->createdAt);?></p>
        </div>
        <br>
        <?php
    }
    $articles->closeCursor();
    ?>
</div>
</body>
</html>