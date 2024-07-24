<?php
include("../../config/conect.php");

if(isset($_GET['id_catégorie'])){
    $id_catégorie=$_GET['id_catégorie'];
    echo $id_catégorie;
}else{
    echo  "id_not exist";
}

$delete_product="DELETE from product where id_catégorie=$id_catégorie";
$query="DELETE from catégorie where id_catégorie=$id_catégorie";
$delet_pro=$connection->prepare($delete_product);
$delet=$connection->prepare($query);


try{
    $delet_pro->execute();
    $delet->execute();
    header("location:../list_all_catégorie.php");

}catch(PDOException $exo){
    echo $exo->getMessage();
}