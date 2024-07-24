<?php


include("../config/conect.php");

$full_name=$_POST['full_name'];
$email=$_POST['email'];
$password=$_POST['password'];

$image_name=$_FILES['image']['name'];
$image_tmp_name=$_FILES['image']['tmp_name'];

$upload_directory = "../uploads/users/";

if (!is_dir($upload_directory)) {
    mkdir($upload_directory, 0755, true);
}

// générer le nom de image

// basname => retourner le nom de ficher soft exmple $var=uploads/users/image.jpg
// $va=basname($var)=>image.jpg

$unique_name=time() . "_" .basename($image_name);

// Définir le chemin complet de destination
$image_destination = $upload_directory . $unique_name;



// Vérifier le type de fichier (image uniquement)
// $allowed_file_types = ['image/jpeg', 'image/png', 'image/gif'];
// $file_info = new finfo(FILEINFO_MIME_TYPE);
// $file_type = $file_info->file($image_tmp_name);

// if (!in_array($file_type, $allowed_file_types)) {
//     die("Type de fichier non autorisé. Seules les images JPEG, PNG et GIF sont autorisées.");
// }


// max file saze

$max_file_size=6 * 1024 * 1024;

if($_FILES['image']['size']>$max_file_size){
    if ($_FILES['image_product']['size'] > $max_file_size) {
        die("La taille du fichier dépasse la limite autorisée de 6 Mo.");
    }
}
if (move_uploaded_file($image_tmp_name, $image_destination));

$query="INSERT into user(full_name,email,password,image) value(:full_name,:email,:password,:image)";
$statement=$connection->prepare($query);

$statement->bindParam(':full_name',$full_name);
$statement->bindParam(':email',$email);
$statement->bindParam(':password',$password);
$statement->bindParam(':image',$unique_name);

try{
    $statement->execute();
    header("location:index.php");
}catch(PDOException $expetion){
    echo  $expetion->getMessage();
}