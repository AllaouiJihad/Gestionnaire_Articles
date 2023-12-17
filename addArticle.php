<?php
include "classes/article.php";
$article = new Article();
if (isset($_POST['add'])) {
    $article->addArticle($_POST['titre'],$_POST['contenu']);
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <nav class=" navbar navbar-light bg-dark">
        <div class="navbar-brand text-light m-2 mb-0 h1">YouCrafting</div>
        <a class="text-light nav-item nav-link m-2" href="addArticle.php">Ajouter article</a>
    </nav>

    
<form method="post" class="container mt-5">
  <div class="form-group">
    <label for="titre">Titre</label>
    <input name="titre" type="text" class="form-control" id="titre" placeholder="titre">
  </div>
 
  
  <div class="form-group">
    <label for="con">Contenu</label>
    <textarea name="contenu" class="form-control" id="con" rows="3"></textarea>
  </div>
  <button type="submit" name="add" class="btn btn-outline-success" >ajouter article</button>
</form>
</body>
</html>