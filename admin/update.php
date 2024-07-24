
<?php
if(!isset($_COOKIE['id_admin'])){
    header("location:connexion.php");
}
// include("../config/conect.php");

// $id_product = $_POST['id_product'];
// $nom_product = $_POST['nom_product'];
// $price = $_POST['price'];
// $id_categorie = $_POST['id_catégorie'];
// $quantite = $_POST['quntité'];
// $info = $_POST['info'];

// $image_name = $_FILES['image_product']['name'];
// $image_tmp_name = $_FILES['image_product']['tmp_name'];
// $image_designation = "../uploads/all_product/" . $image_name;

// // Déplacer l'image téléchargée vers le dossier de destination
// if ($image_tmp_name && !empty($image_name)) {
//     move_uploaded_file($image_tmp_name, $image_designation);
// } else {
//     // Si aucun fichier n'a été téléchargé, ne changez pas l'image_designation
//     $image_designation = $_POST['image']; // Supposons que l'URL de l'image actuelle est passée dans un champ caché
// }

// // Mise à jour de la requête SQL
// $update = "UPDATE product SET nom_product = :nom_product, price = :price, id_catégorie = :id_categorie, quntité = :quantite, info = :info, image_product = :image_product WHERE id_product = :id_product";

// $query = $connection->prepare($update);

// // Lier les paramètres à la requête SQL
// $query->bindParam(':nom_product', $nom_product);
// $query->bindParam(':price', $price);
// $query->bindParam(':id_categorie', $id_categorie);
// $query->bindParam(':quantite', $quantite);
// $query->bindParam(':info', $info);
// $query->bindParam(':image_product', $image_designation);
// $query->bindParam(':id_product', $id_product, PDO::PARAM_INT); // Assurez-vous d'inclure l'ID du produit

// try {
//     $query->execute();
//     header("Location: product.php");
// } catch (PDOException $exp) {
//     echo "Une erreur est survenue: " . $exp->getMessage();
// }





include("../config/conect.php");

$id_product = $_POST['id_product'];
$nom_product = $_POST['nom_product'];
$price = $_POST['price'];
$id_categorie = $_POST['id_catégorie'];
$quntite = $_POST['quntité'];
$info = $_POST['info'];



$image_name = $_FILES['image_product']['name'];
$image_tmp_name = $_FILES['image_product']['tmp_name'];
$image_designation = "../uploads/all_product/" . $image_name;
if($image_tmp_name && !empty($image_name)){
    move_uploaded_file($image_tmp_name, $image_designation);
}else{
    $image_designation=$_POST['image'];
}



$update="UPDATE product set nom_product=:nom_product,price=:price,id_catégorie=:id_categorie,quntité=:quntite,info=:info,image_product=:image_product where id_product=:id_product ";


$query=$connection->prepare($update);

$query->bindParam(':nom_product',$nom_product);
$query->bindParam(':price',$price);
$query->bindParam(':id_categorie',$id_categorie);
$query->bindParam(':quntite',$quntite);
$query->bindParam(':info',$info);
$query->bindParam(':image_product',$image_designation);
$query->bindParam(':id_product',$id_product, PDO::PARAM_INT);

try{
    $query->execute();
    header("location:product.php");
}
catch(PDOException $exp){
    echo $exp->getMessage();
}


