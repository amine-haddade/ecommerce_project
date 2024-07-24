
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>ecomerce</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/shop.css">
</head>
<body>
<?php

include("../slices/header.php");

$_SESSION['last_page'] = $_SERVER['REQUEST_URI'];
?>


<table class="table  table-striped" id="table-achats">
            <tr>
                <?php
                if(isset($_GET['idAllProduits'])){
                    $idProduits=json_decode(urldecode($_GET['idAllProduits']));
                } 
                ?>
                <td>image</td>
                <td>nom product</td>
                <td>price</td>
                <td>catégorie</td>
            </tr>
            <?php
                // Utilisez count() normalement
            $allId_product = implode(',', array_fill(0, count($idProduits), '?'));
           
            $afficher="SELECT nom_product,price,image_product,libelle from product join catégorie on product.id_catégorie=catégorie.id_catégorie where id_product in($allId_product) ";
            $query=$connection->prepare($afficher);
            foreach($idProduits as $index=>$key){
                $query->bindValue($index+1,$key , PDO::PARAM_INT);
            }
            $query->execute();
            $rows=$query->fetchAll();
            foreach($rows as $row ){
                ?>
                <tr>
                    <td><img id="mini_image_list" class="profil-images-produits" src="<?php echo $row['image_product'];  ?>"></td>
                    <td class="title-produit-table"><?php echo $row['nom_product'];   ?></td>
                    <td><?php echo $row['price'];   ?></td>
                    <td><?php echo $row['libelle'];   ?></td>     
                </tr>
            
        
        <?php } ?>
        </table>

<?php include("../slices/footer.php");  ?> 