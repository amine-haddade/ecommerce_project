<?php

include("slices/navbar.php");

include("../config/conect.php");


if(isset($_GET['id_product'])){
$id_product=$_GET['id_product'];
}
$query="SELECT * from product where id_product=$id_product";



$statement=$connection->prepare($query);
// $statement->bindParam(':id_product',$id_product, PDO::PARAM_INT);
$statement->execute();
$row=$statement->fetch();

?>


<div class="formulaire">
<form action="update.php" method="POST" enctype="multipart/form-data">


<input type="hidden" name="id_product" value="<?php echo $row['id_product']   ?>">


<label for="Nom de product">Nom de product</label>
<input type="text" class="form-control mb-3" name="nom_product" value="<?php echo htmlspecialchars($row['nom_product']);   ?>">


<label for="price">price</label>
<input type="number" class="form-control mb-3" name="price" value="<?php echo $row['price'];   ?>">


<label for="catégorie">catégorie</label>
<select class="form-select form-select-lg  mb-3" name="id_catégorie" id="" >
<?php
include("../config/conect.php");
$query="select * from catégorie";
$statement=$connection->prepare($query);
$statement->execute();
$rows=$statement->fetchAll();
foreach($rows as $row_caté){

    if($row['id_catégorie']==$row_caté['id_catégorie']){
        $select="selected";
    }else{
        $select=null;
    }
?>

<option <?php echo $select  ?> value="<?php echo $row_caté['id_catégorie'] ?>"><?php echo $row_caté['libelle']  ?></option>

<?php     
}


?>
</select>



<label for="quntité">quntité</label>
<input class="form-control mb-4" type="number" name="quntité" value="<?php echo $row['quntité'];   ?>">


<label for="info product">info product</label>
<textarea class="form-control mb-3" name="info" id="" >
   <?php echo $row['info'];   ?>
</textarea>


<input type="hidden" name="image" value="<?php echo $row['image_product']   ?>">

<img id="current_image" src="<?php echo htmlspecialchars($row['image_product'], ENT_QUOTES); ?>" alt="Image actuelle du produit" style="max-width: 80px; max-height: 80px; margin-bottom: 0px;"><br>

<label for="image" >image</label>
<input class="form-control mb-3" type="file" name="image_product" id="" >

<button class="btn btn-primary">update product</button>


</form>
</div>
</main>
</div>
<?php  

   include("slices/footer.php");
   ?>
</body>
</html>
