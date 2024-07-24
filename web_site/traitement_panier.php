<?php
session_start();

include("../config/conect.php");


if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=array();
}

if(isset($_GET['id_product'])){
    $id_product=$_GET['id_product'];

    $query="SELECT * from product where id_product=:id";

    $statement=$connection->prepare($query);
    $statement->bindValue(":id",$id_product,PDO::PARAM_INT);
    $statement->execute();

    $row=$statement->fetchAll();
}
if(!isset($_SESSION['cart'][$id_product])){
    $_SESSION['cart'][$id_product]=1;
}
else{
    $_SESSION['cart'][$id_product]++;
}


if (isset($_SESSION['last_page'])) {
    $last_page = $_SESSION['last_page'];
    header("Location:$last_page");
} else {
    // Fallback si la dernière page n'est pas définie
    header("Location: shop.php");
    exit();
}






