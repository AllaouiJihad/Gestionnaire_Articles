<?php
include "classes/article.php";
$article = new Article();
$rows = $article->readAll();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>

  </style>
</head>
<body>

<nav class=" navbar navbar-light bg-dark">
  <div class="navbar-brand text-light m-2 mb-0 h1">YouCrafting</div>
  <a class="text-light nav-item nav-link m-2" href="addArticle.php">Ajouter article</a>
</nav>


    <div class="container m-5 mt-3 row justify-content-around">
    <?php
foreach ($rows as $row) {
?>

  <div class="card col-4 mt-2" style="width:400px">
    <div class="card-body">
      <h4 class="card-title"><?= $row['title'] ?></h4>
      <p class="card-text"><?= $row['contenu'] ?></p>
      <button class="btn btn-danger" data-toggle="modal" data-target="#delete">delete</button>
      <button class="btn btn-outline-success" data-toggle="modal" data-target="#update">update</button>
    </div>
  </div>

<!-- update modal-->
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="update">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">UPDATE </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="updateArticle.php">
            <div class="form-group">
                <label for="titre">Titre</label>
                <input name="titre" type="text" value="<?= $row['title']?>" class="form-control" id="titre" placeholder="titre">
            </div>
            
            
            <div class="form-group">
                <label for="con">Contenu</label>
                <textarea name="contenu" class="form-control" id="con" rows="3"><?= $row['contenu'] ?></textarea>
            </div>
            <input type="hidden" name="id" value="<?= $row['id']?>">
        
      </div>
      <div class="modal-footer">
        <button type="submit" name="update" class="btn btn-outline-success">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
      </form>
    </div>
  </div>
</div>
<!--delete modal -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="delete">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">DELETE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="deleteArticle.php" method="post">
      <input type="hidden" name="id" value="<?=$row['id']?>">
      <div class="modal-footer">
        <button type="submit" name="delete" class="btn btn-outline-danger">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
      </form>
    </div>
  </div>
</div>
<?php
  }
  ?>
  </div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
