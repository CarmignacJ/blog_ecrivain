<?php $this->title = 'Article'; ?>

<div id="page_garde">
    <article class="col-xs-12">
        <h2><?= htmlspecialchars($article->getTitle());?></h2>
        <div class="trait"></div>
        <p><?= htmlspecialchars($article->getContent());?></p>
        <footer>
            <h5>
                <div class="trait"></div>
                Créé le : <?= htmlspecialchars($article->getCreatedAt());?>
            </h5>
        </footer>
    </artcile>
    
    <h3>Commentaires</h3>
    <div class="trait"></div>
    <?php
    foreach ($comments as $comment)
    {
        ?>
        <article class="commentaire">
            
            <header>
                <div class="poste">
                    <h4><?= htmlspecialchars($comment->getPseudo());?></h4>                   
                    <h5>Posté le <?= htmlspecialchars($comment->getCreatedAt());?></h5>
                </div>
                    <div class="trait_commentaire"></div>
            </header>
            <footer>
                    <p><?= htmlspecialchars($comment->getContent());?></p>
            </footer>
            
        </article>
        <?php
        if($comment->isFlag()) {
            ?>
            <p>Ce commentaire a déjà été signalé</p>
            <?php
        } else {
            ?>
            <p><a href="../public/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>">Signaler le commentaire</a></p>
            <?php
        }
        ?>
        <p><a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a></p>
        <div class="trait"></div>
        <?php
    }
    ?>

    <h3>Ajouter un commentaire</h3>
    <div class="trait"></div>
    <?php include('form_comment.php'); ?>
</div>