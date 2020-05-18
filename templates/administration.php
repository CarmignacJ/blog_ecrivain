<?php $this->title = 'Administration'; ?>

<div id="page_garde">
    <div class="trait"></div>
    <?= $this->session->show('add_article'); ?>
    <?= $this->session->show('edit_article'); ?>
    <?= $this->session->show('delete_article'); ?>
    <?= $this->session->show('unflag_comment'); ?>
    <?= $this->session->show('delete_comment'); ?>
    <?= $this->session->show('delete_user'); ?>
    <h3>Articles</h3>
    <div class="trait"></div>
    <a href="../public/index.php?route=addArticle">Nouvel article</a>
    <table>
        <tr>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        <?php
        foreach ($articles as $article)
        {
            ?>
            <tr>
                <td><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></td>
                <td><?= substr(htmlspecialchars($article->getContent()), 0, 150);?></td>
                <td>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></td>
                <td>
                    <a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
                    <a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <div class="trait"></div>
    <h3>Commentaires signalés</h3>
    <div class="trait"></div>
    <table>
        <tr>
            <th>Pseudo</th>
            <th>Message</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        <?php
        foreach ($comments as $comment)
        {
            ?>
            <tr>
                <td><?= htmlspecialchars($comment->getPseudo());?></td>
                <td><?= substr(htmlspecialchars($comment->getContent()), 0, 150);?></td>
                <td>Créé le : <?= htmlspecialchars($comment->getCreatedAt());?></td>
                <td>
                    <a href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>">Désignaler le commentaire</a>
                    <a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <div class="trait"></div>
    <h3>Utilisateurs</h3>
    <div class="trait"></div>
    <table>
        <tr>
            <th>Pseudo</th>
            <th>Date</th>
            <th>Rôle</th>
            <th>Actions</th>
        </tr>
        <?php
        foreach ($users as $user)
        {
            ?>
            <tr>
                <td><?= htmlspecialchars($user->getPseudo());?></td>
                <td>Créé le : <?= htmlspecialchars($user->getCreatedAt());?></td>
                <td><?= htmlspecialchars($user->getRole());?></td>
                <td>
                    <?php
                    if($user->getRole() != 'admin') {
                    ?>
                    <a href="../public/index.php?route=deleteUser&userId=<?= $user->getId(); ?>">Supprimer</a>
                    <?php }
                    else {
                        ?>
                    Suppression impossible
                    <?php
                    }
                    ?>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>