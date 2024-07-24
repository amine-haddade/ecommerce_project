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

$_SESSION['last_page'] = $_SERVER['REQUEST_URI'];

?>


    <!--produi -->


    <div class="product_single">
        <?php
        include("../config/conect.php");



          

            if(isset($_GET['id_product'])){
                $id=$_GET['id_product'];
                
            }
            $query="SELECT libelle,nom_product,price,image_product,id_product
            from product join catégorie on product.id_catégorie=catégorie.id_catégorie
            where id_product='$id'";

            $statement=$connection->prepare($query);
            $statement->execute();

            $row=$statement->fetchAll();
            foreach($row as $product){


                ?>
        
        <div class="images_product">
            <img id="principal_image" src="<?php  echo $product['image_product']?>"  alt="">
            <div class="detail_image">
                <img class="small_product" src="../image_product/Vetements/img1.jpg" alt="">
                <img class="small_product" src="../image_product/Vetements/img3.jpg" alt="">
                <img class="small_product" src="../image_product/Vetements/img4.jpg" alt="">
                <img class="small_product" src="../image_product/Vetements/img5.jpg" alt="">
            </div>
        </div>

        <div class="info_product">
            <p><?php  echo $product['libelle']?></p>
            <h2><?php  echo $product['nom_product']?></h2>

            <h1><span>$</span><?php  echo $product['price']?></h1>
            <select name="size" id="">
                <option>select size</option>
                <option value="large">l</option>
                <option value="xlarge">xl</option>
                <option value="xxlarge">xxl</option>
            </select>
            <div class="add_product">
                <input type="number" value="1" max="10">
                <a href="traitement_panier.php?id_product=<?php echo $product['id_product']  ?>"><button>add to cart </button></a>
            </div>
            <h4>product details</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing
                 elit. Beatae nulla atque eveniet deserunt, amet aut 
                 maiores veniam sapiente quam architecto. Voluptatibus 
                 tenetur facere distinctio aspernatur sequi pariatur quod
                 
                voluptas dicta?
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium culpa, natus corrupti aut est necessitatibus! Ullam recusandae eos odit. Non quo sint magnam pariatur unde quidem ea earum laboriosam sequi. Sit ea deleniti fugiat porro cumque. Aliquid, dignissimos numquam. Commodi!
            </p>
        </div>
        <?php  
    
    } ?>
    </div>

    

    <h1 id="new_arvil">Related products</h1>
    <p>summer collection new modern desgin</p>

    <section class="products_home_section">
        <?php

        if(isset($_GET['id_catégorie'])){
            $id_catégorie=$_GET['id_catégorie'];
            
        }
        $query="SELECT id_product,product.id_catégorie,libelle,nom_product,price,image_product
        from product join catégorie on product.id_catégorie=catégorie.id_catégorie
        where product.id_catégorie='$id_catégorie'";

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


    <?php
include("../slices/footer.php");

?>