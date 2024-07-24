<?php

session_start();

include("../config/conect.php");


$id_user=$_COOKIE['user'];// user

$produit=$_GET['produits'];// tous les produits;

if(empty($produit)){
    header("location:cart.php");
    exit();
}

$total=$_GET["total"];// total payer

$query="INSERT INTO commande  (id_user,les_produits,total_payer) value(:id_user,:les_produits,:total_payer)";
$stm=$connection->prepare($query);

$stm->bindParam(":id_user",$id_user);
$stm->bindParam(":les_produits",$produit);
$stm->bindParam(":total_payer",$total);

try{
    $stm->execute();
    unset($_SESSION['cart']);
    header("location:cart.php");
}catch(PDOException $expetion){
    echo  $expetion->getMessage();
}


