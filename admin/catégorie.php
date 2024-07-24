<?php


include("slices/navbar_all.php");
include("../config/conect.php");


?>

<div class="catégorie_content">
    <?php
    $query="select * from catégorie";
    $statement=$connection->prepare($query);
    $statement->execute();
    $rows=$statement->fetchAll();
    foreach($rows as $row){

    ?>
        <div class="box">
        <img src="<?php echo $row['image_catégorie'] ?>" alt="">

        <div class="info">
            <h1 class="title"><?php  echo $row['libelle'] ?></h1>
            <a href="list_catégorie.php?id_catégorie=<?php echo $row['id_catégorie']   ?>" class="btn btn-danger" >show product</a>
        </div>
    </div>
    
    <?php  } ?>
    <div class="add_catégorie">

        <a class="btn btn-primary" href="add_catégorie.php">add catégorie</a><br>
        <a class="btn btn-info" href="list_all_catégorie.php">list catégorie</a>

    </div>

</div>
<?php  

   include("slices/footer.php");
   ?>