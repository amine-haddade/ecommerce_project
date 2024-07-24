<?php
include("../../config/conect.php");

if(isset($_GET['id_product'])){
    $id_product=$_GET['id_product'];
    echo $id_product;
}else{
    echo  "id_not exist";
}

$query="DELETE from product where id_product=$id_product";
$delet=$connection->prepare($query);

try{
    $delet->execute();
    header("location:../product.php");

}catch(PDOException $exo){
    echo $exo->getMessage();
}