<?php

include("../config/conect.php");

$lib=$_POST['libelle'];
// Obtenir le nom de fichier téléchargé et le chemin temporaire
$image_name = $_FILES['image_catégorie']['name'];
$image_tmp_name = $_FILES['image_catégorie']['tmp_name'];

// Définir le dossier de destination
$upload_directory = "../uploads/catégorie images/";

// Vérifiez que le dossier de destination existe, sinon créez-le
if (!is_dir($upload_directory)) {
    mkdir($upload_directory, 0755, true);
}

// Générer un nom de fichier unique
$unique_image_name =basename($image_name);

// Définir le chemin complet de destination
$image_destination = $upload_directory . $unique_image_name;

// Vérifier le type de fichier (image uniquement)
$allowed_file_types = ['image/jpeg', 'image/png', 'image/gif'];
$file_info = new finfo(FILEINFO_MIME_TYPE);
$file_type = $file_info->file($image_tmp_name);

if (!in_array($file_type, $allowed_file_types)) {
    die("Type de fichier non autorisé. Seules les images JPEG, PNG et GIF sont autorisées.");
}

// Vérifier la taille du fichier (par exemple, max 2 Mo)
$max_file_size = 6 * 1024 * 1024; // 6 Mo

if ($_FILES['image_catégorie']['size'] > $max_file_size) {
    die("La taille du fichier dépasse la limite autorisée de 2 Mo.");
}

// Déplacer le fichier téléchargé vers la destination
if (move_uploaded_file($image_tmp_name, $image_destination)) 
    // Téléchargement réussi, vous pouvez continuer avec le reste du code





$insert="INSERT INTO catégorie (libelle, image_catégorie) VALUES (:lib, :image)";

$add=$connection->prepare($insert);
$add->bindParam(":lib", $lib);
$add->bindParam(":image", $image_destination);


try {
    $add->execute();
    header("Location: catégorie.php");
} catch (PDOException $ex) {
    echo "Erreur : " . $ex->getMessage();
}
