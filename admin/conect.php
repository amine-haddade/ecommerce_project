<?php

$server="localhost";
$user="root";
$pass="";
$db="ecommerce_project";

$connection=mysqli_connect($server,$user,$pass,$db);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}