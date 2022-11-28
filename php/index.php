<?php
    require_once "include/header.php";
    require_once "src/config.php";
    require_once "init.php";

    $sql = "SELECT * FROM user";
    $stmt = $dbh->query($sql);
    $users = $stmt  ->fetchAll(PDO::FETCH_OBJ);
    if(isset($_GET['yt'])){
        echo multiPar10($_GET['yt']);
    }


    // monVardump($_GET);

    // echo multiPar10($_GET['yt']);
    
    // monVardump($users);
    
?>
<body>
    <?php
        require_once 'include/navbar.php'; ?>
        <?php 
        foreach($tab as $key=>$val){
            echo "<a href='index.php?yt=$val'>". 'le lien pour :'.$val . '</a>';
            echo "<br>";
            }
        ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">key</th>
      <th scope="col">valeur</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($users as $user) : ?>
    <tr>
         <th scope="row"><?= ucfirst($user->nom) ?></th>
        <td><?= ucfirst($user->ville) ?></td>
    </tr>
    
    <?php endforeach ?>

  </tbody>
</table>
    <h1><?= $variable ?></h1>

    <?php
        require_once __DIR__.'/include/footer.php';
    ?>
</body>

</html>