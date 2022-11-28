<?php
include_once "init.php";
include_once "include/header.php";
include_once "include/navbar.php";

if(isset($_GET['id']) and isset($_GET['action'])){
    if($_GET['action']=='del'){
    $id= $_GET['id'];
    $sql = "DELETE FROM `categorie` WHERE id= :valeur";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':valeur',$id);
    $stmt->execute();
    }
}

if (isset($_POST['name'])and !empty($_POST)){
    
    $name= $_POST['name'];
    $sql = "INSERT INTO categorie(name) VALUES (:valeur)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':valeur',$name);
    $stmt->execute();
    
}
    $sql = "SELECT * FROM categorie";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $categories = $stmt->fetchAll(PDO::FETCH_OBJ);




?>
<body>
    
    <div class="container">
    
        <h3>Ajouter une categorie</h3>
        <form action="" method ="post">
        <label for="category">category</label>
        <input type="text" id="category" name="name" value="">
        <button type="submit">Submit</button>
        </form>
        <hr>
        <h3>lites de categories </h3>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">key</th>
      <th scope="col">valeur</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($categories as $cat) : ?>
    <tr>
         <th scope="row"><?= $cat->id ?></th>
        <td><?= $cat->name ?></td>
        <td><a href="category.php?id=<?= $cat->id?>&action=del">suprimer</a></td>
        <td><a href="modifCategory.php?id=<?= $cat->id?>&action=del">modifier</a></td>
    </tr>
    
    <?php endforeach ?>

  </tbody>
</table>
    </div>

    <?php include_once "include/footer.php"; ?>
</body>