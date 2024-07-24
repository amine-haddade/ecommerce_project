<?php

include("../config/conect.php");

if(isset($_COOKIE['user'])){
    $id_user=$_COOKIE['user'];
}

$full_name=$_POST['full_name'];
$email=$_POST['email'];
$password=$_POST['password'];

$image_name=$_FILES['image']['name'];
$image_tmp_name=$_FILES['image']['tmp_name'];

$upload_directory = "../uploads/users/";

if (!is_dir($upload_directory)) {
    mkdir($upload_directory, 0755, true);
}


$unique_name=time()."_".basename($image_name);

$image_destgination=$upload_directory.$unique_name;
if($image_tmp_name && !empty($image_name)){
    move_uploaded_file($image_tmp_name,$image_destgination);
}else{
    $unique_name=basename($_POST['image_dernier']);

}

$query="UPDATE user set full_name=:full_name,email=:email,password=:password,image=:image where id_user='$id_user'";

$stm=$connection->prepare($query);

$stm->bindParam(":full_name",$full_name);
$stm->bindParam(":email",$email);
$stm->bindParam(":password",$password);
$stm->bindParam(":image",$unique_name);


try{
    $stm->execute();
    header("location:profil.php");
}
catch(PDOException $exp){
    echo $exp->getMessage();
}