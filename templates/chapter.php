<?php $this->title = "Chapitre"; ?>

<div class="container">
    <div class="row">
        <?php
        foreach ($articles as $article)
        {
            ?>
            <div class="col-md-4">
                <h1><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h1>
                <p><?= htmlspecialchars($article->getContent());?></p>
                <p><?= htmlspecialchars($article->getAuthor());?></p>
                <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
            </div>                
            <?php
        }
        ?>        
    </div>
</div>