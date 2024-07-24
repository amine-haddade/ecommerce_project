<?php

$server="localhost";
$user="root";
$pass="";
$db="ecommerce_project";

try{
    $connection=new PDO("mysql:host=$server;dbname=$db",$user,$pass);
    $connection->setAttribute(pdo::ATTR_ERRMODE,pdo::ERRMODE_EXCEPTION);
}catch(PDOException $exp){
    echo $exp->getMessage();
}

