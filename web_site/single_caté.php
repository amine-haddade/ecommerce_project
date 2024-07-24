
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="preconnect" href="https://fonts.googleapis.com">

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
if (isset($_GET["id_catégorie"])){
    $id_categorie=$_GET["id_catégorie"];

}


?>

    <div class="shop_page_hero_panier">
        <h1>#stayhome</h1>
        <p>save more with coupons & up to 70% off</p>
    </div>

    <section class="products_home_section">
    <?php

        $query="SELECT * from product where id_catégorie='$id_categorie'";

        $statement=$connection->prepare($query);

        $statement->execute();

        $row=$statement->fetchAll();

        foreach($row as $product){
    ?>
        <div class="product">
            <a href="single_product.php?id_product=<?php echo $product['id_product']  ?>&id_catégorie=<?php echo $product['id_catégorie']?>"><img src= "<?php  echo $product['image_product'] ?>" alt=""></a>
            <p>addidas</p>
            <h4><?php echo $product['nom_product'] ?></h4>
            <div class="starts">
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
            </div>
            <div class="prix">
                <h5><?php echo $product['price'] ?></h5>
                <a href="traitement_panier.php?id_product=<?php echo $product['id_product']  ?>"> <div class="shopping_cart button-add-cart">
                  <i class='bx bxs-cart-alt' undefined ></i>
                </div>
            </a>
            </div>

        </div>
        
        
        <?php  }?>
    </section>


    <div class="multiple_page_shop">
        <button>1</button>
        <button >2</button>
        <button><i class='bx bxs-right-arrow-alt'></i></button>
    </div>


    <?php
include("../slices/footer.php")

?>