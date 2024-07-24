<?php
if(!isset($_COOKIE['id_admin'])){
    header("location:connexion.php");
}
// include("conect.php");

// $nom_product=$_POST['nom_product'];
// $price=$_POST['price'];
// $id_catégorie=$_POST['id_catégorie'];
// $quntité=$_POST['quntité'];
// $info=$_POST['info'];
// $image_name=$_FILES['image_product']['name'];
// $image_tmp_name=$_FILES['image_product']['tmp_name'];
// $image_desgination="../uploads/all_product/".$image_name;
// move_uploaded_file($image_tmp_name,$image_desgination);

// $ajouter="INSERT INTO product(nom_product, price, id_catégorie, quntité, image_product, info)
// VALUES ('$nom_product', '$price', '$id_catégorie', '$quntité', '$image_desgination', '$info')";

// $na=mysqli_query($connection,$ajouter);

// if($na==1){
//     header("location:dashboard.php");

// }
// else{
//     echo "error" .mysqli_error($connection);
    

// }


include("../config/conect.php");

$nom_product = $_POST['nom_product'];
$price = $_POST['price'];
$id_categorie = $_POST['id_catégorie'];
$quntite = $_POST['quntité'];
$info = $_POST['info'];
$image_name = $_FILES['image_product']['name'];
$image_tmp_name = $_FILES['image_product']['tmp_name'];


$upload_directory = "../uploads/all_product/";

// Vérifiez que le dossier de destination existe, sinon créez-le
if (!is_dir($upload_directory)) {
    mkdir($upload_directory, 0755, true);
}

// Générer un nom de fichier unique
$unique_image_name = time() . '_' . basename($image_name);


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

if ($_FILES['image_product']['size'] > $max_file_size) {
    die("La taille du fichier dépasse la limite autorisée de 2 Mo.");
}
if (move_uploaded_file($image_tmp_name, $image_destination)) 
    // Téléchargement réussi, vous pouvez continuer avec le reste du code


$query = "INSERT INTO product (nom_product, price, id_catégorie, quntité, info, image_product) 
          VALUES (:nom_product, :price, :id_categorie, :quntite, :info, :image_product)";

$statement = $connection->prepare($query);
$statement->bindParam(':nom_product', $nom_product);
$statement->bindParam(':price', $price);
$statement->bindParam(':id_categorie', $id_categorie);
$statement->bindParam(':quntite', $quntite);
$statement->bindParam(':info', $info);
$statement->bindParam(':image_product', $image_destination);

try {
    $statement->execute();
    header("Location: dashboard.php");
    exit();
} catch (PDOException $exp) {
    echo "Error: " . $exp->getMessage();
}


