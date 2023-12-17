<?php
include 'classes/article.php';
if (isset($_POST['delete'])) {
    $article = new Article();
    $article->deleteArticle($_POST['id']);
    header("Location: index.php");
}