<?php
include 'classes\article.php';
if (isset($_POST['update'])) {
   $article = new Article();
   $article->updateArticle($_POST['id'],$_POST['titre'],$_POST['contenu']); 
   header("Location: index.php");
}
