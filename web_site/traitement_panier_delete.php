<?php  

include("../config/conect.php");

session_start();

if(isset($_GET['id_product'])){
    $id=$_GET['id_product'];
    unset($_SESSION['cart'][$id]);
    header("location:cart.php");

}