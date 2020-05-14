<?php $this->title = "Chapitre"; ?>

<div id="page_garde">
<h2>Les Chapitres</h2>
    <div class="container">
        <div class="row">
            <?php
            foreach ($articles as $article)
            {
                ?>
                <article class="col-md-4">
                    <header>
                        <h1><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h1>
                    </header>
                    <p><?= substr(htmlspecialchars($article->getContent()), 0, 250);?>...</p>
                    <footer>
                        <p><?= htmlspecialchars($article->getAuthor());?></p>
                        <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
                    </footer>
                </article>                
                <?php
            }
            ?>        
        </div>
    </div>
</div>