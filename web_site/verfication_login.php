<?php
session_start();

include("../config/conect.php");

$email=$_POST['email'];
$password=$_POST['password'];

$query="SELECT  * from user where email='$email' and password='$password'";

$statement=$connection->prepare($query);

try{
    $statement->execute();
    $user=$statement->fetch();
    if($user){
        setcookie("user",$user['id_user'],time()+(30*24*60*60),"/");
        header("location:index.php");
    
    }
    else{
        $_SESSION['error']="les doner incorect";
        header("location:login.php");
    }
}catch(PDOException  $exp){
    echo $exp->getMessage();
}