<?php $this->title = 'Accueil'; ?>

<div class="carousel slide" data-ride="carousel" id="mycarousel">  <!-- défilement d'image -->
            
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img class="d-block w-100" src="img/ecriture.jpg" alt="First slide">    
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="img/encre.jpg" alt="Second slide"> 
        </div>
            
        <div class="carousel-item">  
            <img class="d-block w-100" src="img/livre.jpg" alt="Third slide">
        </div>

    </div>

    <a href="#mycarousel" class="carousel-control-prev" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
        
    <a href="#mycarousel" class="carousel-control-next"  data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>

</div>

<p>En construction</p>
<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>
<?php
if ($this->session->get('pseudo')) {
    ?>
    <a href="../public/index.php?route=logout">Déconnexion</a>
    <a href="../public/index.php?route=profile">Profil</a>
    <?php if($this->session->get('role') === 'admin') { ?>
        <a href="../public/index.php?route=administration">Administration</a>
    <?php } ?>
    <a href="../public/index.php?route=addArticle">Nouvel article</a>
    <?php
} else {
    ?>
    <a href="../public/index.php?route=register">Inscription</a>
    <a href="../public/index.php?route=login">Connexion</a>
    <?php
}
?>
<div class="container">
    <div class="row">
        <?php
        foreach ($articles as $article)
        {
            ?>
            <div class="col-md-4">
                <h2><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h2>
                <p><?= htmlspecialchars($article->getContent());?></p>
                <p><?= htmlspecialchars($article->getAuthor());?></p>
                <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
            </div>                
            <?php
        }
        ?>        
    </div>
</div>