<?php


session_start();

if(empty($_SESSION['id_admin'])){
    header("location:connexion.php");
}

include("../config/conect.php");

$username=$_POST['username'];
$password=$_POST['password'];

$query="select * from admin where username='$username' and password='$password' ";
$statement=$connection->prepare($query);

try{
    $statement->execute();
    $row=$statement->fetch();
    if($row){
        setcookie('id_admin',$row['id_admin'],time()+(60*60*60),"/");
        header("location:dashboard.php");
    }
    else{
        $_SESSION['error']="not exist";
        header("location:connexion.php");
    }
}
catch(PDOException $exp){
    echo $exp->getMessage();
}





