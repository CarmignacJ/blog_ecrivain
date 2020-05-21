<?php

namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\Article;

class ArticleDAO extends DAO
{
    private function buildObject($row)
    {
        $article = new Article();
        $article->setId($row['id']);
        $article->setTitle($row['title']);
        $article->setContent($row['content']);
        $article->setAuthor($row['pseudo']);
        $article->setCreatedAt($row['createdAt']);
        return $article;
    }

  
    /* obtenir des articles */
    public function getArticles() 
    {
        $sql = 'SELECT article.id, article.title, article.content, user.pseudo, DATE_FORMAT(article.createdAt, \'%d/%m/%Y %Hh%imin%ss\') AS createdAt FROM article INNER JOIN user ON article.user_id = user.id ORDER BY article.id DESC LIMIT 3';
        $result = $this->createQuery($sql);
        $articles = [];
        foreach ($result as $row){
            $articleId = $row['id'];
            $articles[$articleId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $articles;
    }

    /* obtenir les chapitres */
    public function chapter() 
    {
        $sql = 'SELECT article.id, article.title, article.content, user.pseudo, DATE_FORMAT(article.createdAt, \'%d/%m/%Y %Hh%imin%ss\') AS createdAt FROM article INNER JOIN user ON article.user_id = user.id ORDER BY article.id DESC LIMIT 10';
        $result = $this->createQuery($sql);
        $articles = [];
        foreach ($result as $row){
            $articleId = $row['id'];
            $articles[$articleId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $articles;
    }



    /* obtenir l'article */
    public function getArticle($articleId)
    {
        $sql = 'SELECT article.id, article.title, article.content, user.pseudo, DATE_FORMAT(article.createdAt, \'%d/%m/%Y %Hh%imin%ss\') AS createdAt FROM article INNER JOIN user ON article.user_id = user.id  WHERE article.id = ?';
        $result = $this->createQuery($sql, [$articleId]);
        $article = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($article);
    }
    
    /* ajouter un article */
    public function addArticle(Parameter $post, $userId)
    {
        $sql = 'INSERT INTO article (title, content, createdAt, user_id) VALUES (?, ?, NOW(), ?)';
        $this->createQuery($sql, [$post->get('title'), $post->get('content'), $userId]);
    }

    /* modifier l'article */
    public function editArticle(Parameter $post, $articleId, $userId)
    {
        $sql = 'UPDATE article SET title=:title, content=:content, user_id=:user_id WHERE id=:articleId';
        $this->createQuery($sql, [
            'title' => $post->get('title'),
            'content' => $post->get('content'),
            'user_id' => $userId,
            'articleId' => $articleId
        ]);
    }

    /* supprimer l'article */
    public function deleteArticle($articleId)
    {
        $sql = 'DELETE FROM comment WHERE article_id = ?';
        $this->createQuery($sql, [$articleId]);
        $sql = 'DELETE FROM article WHERE id = ?';
        $this->createQuery($sql, [$articleId]);
    }

}