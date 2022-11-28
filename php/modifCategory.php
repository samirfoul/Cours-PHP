<?php
include_once "init.php";
include_once "include/header.php";
include_once "include/navbar.php";

$id = $_GET['id'];

if (isset($_POST)and !empty($_POST)){
$name =$_POST['name'];
$sql = "UPDATE categorie SET name = :valeurName WHERE id= :valeurId";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':valeurId', $id);
$stmt->bindParam(':valeurName', $name);
$stmt->execute();
header('Location: http://localhost:3000/category.php');
}
?>

<body>
        <h3>Modifier category</h3>    

    <form action="" method ="post">
            <label for="category">category</label>
            <input type="text" id="category" name="name" value="">
            <button type="submit">Submit</button>
     </form>



</body>