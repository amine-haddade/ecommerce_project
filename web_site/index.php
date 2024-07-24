
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


    <div class="scroll_up">
    <i class="fa-solid fa-arrow-up"></i>
    </div>
    <!-- hero section -->
    <section class="hero_section_home">
        <img  id="hero_image" src="../image_product/img_home/hero4.png" alt="">
        <div class="info_hero_page">
            <h5>Trade-in-Offer</h5>
            <h1>Super Value Deals</h1>
            <h2>On All product</h2>
            <p>Save more with coupons & UP 70% off!</p>
            <button>shop now</button>
        </div>
    </section>
    

    <section class="service_home_page">
        <div class="box_service">
            <img src="../image_product/img_home/features (1)/f1.png" alt="">
            <h3>free Shipng</h3>
        </div>
        <div class="box_service">
            <img src="../image_product/img_home/features (1)/f2.png" alt="">
            <h3>Online Order</h3>
        </div>
        <div class="box_service">
            <img src="../image_product/img_home/features (1)/f3.png" alt="">
            <h3>Save Mony</h3>
        </div>
        <div class="box_service">
            <img src="../image_product/img_home/features (1)/f4.png" alt="">
            <h3>Promotion</h3>
        </div>
        <div class="box_service">
            <img src="../image_product/img_home/features (1)/f5.png" alt="">
            <h3>Happy Sell</h3>
        </div>
        <div class="box_service">
            <img src="../image_product/img_home/features (1)/f6.png" alt="">
            <h3>F24/7 Supprot</h3>
        </div>
    </section>

    <div class="all_catégorie_image">

        
        <h1 class="titre_catégorie">catégorie</h1>
    
    <div class="swiper allctegorie">
        <div class="scrol_icon">
            <div class="swipe"><i class="fas fa-angle-left"></i></div>
            <div class="swipe-prev"><i class="fas fa-angle-right"></i></div>
        </div>
    <div class="swiper-wrapper">
        <?php
    include("../config/conect.php");

    $query="select * from catégorie";
    $statement=$connection->prepare($query);
    $statement->execute();
    $rows=$statement->fetchAll();
    foreach($rows as $row){ ?>
        <div class="swiper-slide">
        <div class="boxcategorie">
            <img src="<?php  echo $row['image_catégorie'] ?>" alt="">
            <div class="title_catego">
                
                <a class="shop_catégo"  href="single_caté.php?id_catégorie=<?php echo $row['id_catégorie'];?>">shop</a>
                    <h4><?php  echo $row['libelle']; ?></h4>
            </div>
        </div>
    </div>
        
    <?php  } ?>
    
    
    
    
</div> 
</div>
<div class="swiper-pagination"></div>



</div>








    <!-- section products -->


    <h1 id="featured">featured product</h1>
    <p>summer collection new modern design</p>




    <section class="products_home_section">
        <div class="product">
            <img src="../image_product/img_home/products_homme_page/f1.jpg" alt="">
            <p>addidas</p>
            <h4>tishirt name product</h4>
            <div class="starts">
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
            </div>
            <div class="prix">
                <h5>$78</h5>
                <div class=" shopping_cart button-add-cart">
                    <i class='bx  bxs-cart-alt ' undefined ></i>
                </div>
            </div>

        </div>
        <div class="product">
            <img src="../image_product/img_home/products_homme_page/f2.jpg" alt="">
            <p>addidas</p>
            <h4>tishirt name product</h4>
            <div class="starts">
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
            </div>
            <div class="prix">
                <h5>$78</h5>
                <div class=" shopping_cart button-add-cart">
                    <i class='bx  bxs-cart-alt ' undefined ></i>
                </div>
            </div>

        </div>
        <div class="product">
            <img src="../image_product/img_home/products_homme_page/f3.jpg" alt="">
            <p>addidas</p>
            <h4>tishirt name product</h4>
            <div class="starts">
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
            </div>
            <div class="prix">
                <h5>$78</h5>
                <div class=" shopping_cart button-add-cart">
                    <i class='bx  bxs-cart-alt ' undefined ></i>
                </div>
            </div>

        </div>
        <div class="product">
            <img src="../image_product/img_home/products_homme_page/f4.jpg" alt="">
            <p>addidas</p>
            <h4>tishirt name product</h4>
            <div class="starts">
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
            </div>
            <div class="prix">
                <h5>$78</h5>
                <div class=" shopping_cart button-add-cart">
                    <i class='bx  bxs-cart-alt ' undefined ></i>
                </div>
            </div>

        </div>
        <div class="product">
            <img src="../image_product/img_home/products_homme_page/f5.jpg" alt="">
            <p>addidas</p>
            <h4>tishirt name product</h4>
            <div class="starts">
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
            </div>
            <div class="prix">
                <h5>$78</h5>
                <div class=" shopping_cart button-add-cart">
                    <i class='bx  bxs-cart-alt ' undefined ></i>
                </div>
            </div>

        </div>
        <div class="product">
            <img src="../image_product/img_home/products_homme_page/f6.jpg" alt="">
            <p>addidas</p>
            <h4>tishirt name product</h4>
            <div class="starts">
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
            </div>
            <div class="prix">
                <h5>$78</h5>
                <div class=" shopping_cart button-add-cart">
                    <i class='bx  bxs-cart-alt ' undefined ></i>
                </div>
            </div>

        </div>
        <div class="product">
            <img src="../image_product/img_home/products_homme_page/f7.jpg" alt="">
            <p>addidas</p>
            <h4>tishirt name product</h4>
            <div class="starts">
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
            </div>
            <div class="prix">
                <h5>$78</h5>
                <div class=" shopping_cart button-add-cart">
                    <i class='bx  bxs-cart-alt ' undefined ></i>
                </div>
            </div>

        </div>
        <div class="product">
            <img src="../image_product/img_home/products_homme_page/f8.jpg" alt="">
            <p>addidas</p>
            <h4>tishirt name product</h4>
            <div class="starts">
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
            </div>
            <div class="prix">
                <h5>$78</h5>
                <div class=" shopping_cart button-add-cart">
                    <i class='bx  bxs-cart-alt ' undefined ></i>
                </div>
            </div>

        </div>
    </section>





    <!-- new arvil -->


    <section class="panier1">
        <p>repair services</p>
        <h1>up to <span>70% off</span>-all t-shirt & accessories</h1>
        <a href="#">explore more</a>
    </section>
    




    <h1 id="new_arvil">new  arrivals</h1>
    <p>summer collection new modern desgin</p>

    <section class="products_home_section">
        <div class="product">
            <img src="../image_product/img_home/products_homme_page/n1.jpg" alt="">
            <p>addidas</p>
            <h4>tishirt name product</h4>
            <div class="starts">
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
            </div>
            <div class="prix">
                <h5>$78</h5>
                <div class=" shopping_cart button-add-cart">
                    <i class='bx  bxs-cart-alt ' undefined ></i>
                </div>
            </div>

        </div>
        <div class="product">
            <img src="../image_product/img_home/products_homme_page/n2.jpg" alt="">
            <p>addidas</p>
            <h4>tishirt name product</h4>
            <div class="starts">
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
            </div>
            <div class="prix">
                <h5>$78</h5>
                <div class=" shopping_cart button-add-cart">
                    <i class='bx  bxs-cart-alt ' undefined ></i>
                </div>
            </div>

        </div>
        <div class="product">
            <img src="../image_product/img_home/products_homme_page/n3.jpg" alt="">
            <p>addidas</p>
            <h4>tishirt name product</h4>
            <div class="starts">
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
            </div>
            <div class="prix">
                <h5>$78</h5>
                <div class=" shopping_cart button-add-cart">
                    <i class='bx  bxs-cart-alt ' undefined ></i>
                </div>
            </div>

        </div>
        <div class="product">
            <img src="../image_product/img_home/products_homme_page/n4.jpg" alt="">
            <p>addidas</p>
            <h4>tishirt name product</h4>
            <div class="starts">
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
            </div>
            <div class="prix">
                <h5>$78</h5>
                <div class=" shopping_cart button-add-cart">
                    <i class='bx  bxs-cart-alt ' undefined ></i>
                </div>
            </div>

        </div>
        <div class="product">
            <img src="../image_product/img_home/products_homme_page/n5.jpg" alt="">
            <p>addidas</p>
            <h4>tishirt name product</h4>
            <div class="starts">
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
            </div>
            <div class="prix">
                <h5>$78</h5>
                <div class=" shopping_cart button-add-cart">
                    <i class='bx  bxs-cart-alt ' undefined ></i>
                </div>
            </div>

        </div>
        <div class="product">
            <img src="../image_product/img_home/products_homme_page/n6.jpg" alt="">
            <p>addidas</p>
            <h4>tishirt name product</h4>
            <div class="starts">
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
            </div>
            <div class="prix">
                <h5>$78</h5>
                <div class=" shopping_cart button-add-cart">
                    <i class='bx  bxs-cart-alt ' undefined ></i>
                </div>
            </div>

        </div>
        <div class="product">
            <img src="../image_product/img_home/products_homme_page/n7.jpg" alt="">
            <p>addidas</p>
            <h4>tishirt name product</h4>
            <div class="starts">
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
            </div>
            <div class="prix">
                <h5>$78</h5>
                <div class=" shopping_cart button-add-cart">
                    <i class='bx  bxs-cart-alt ' undefined ></i>
                </div>
            </div>

        </div>
        <div class="product">
            <img src="../image_product/img_home/products_homme_page/n8.jpg" alt="">
            <p>addidas</p>
            <h4>tishirt name product</h4>
            <div class="starts">
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
                <i class='bx bxs-star' style='color:#ffd400'  ></i>
            </div>
            <div class="prix">
                <h5>$78</h5>
                <div class=" shopping_cart button-add-cart">
                    <i class='bx  bxs-cart-alt ' undefined ></i>
                </div>
            </div>

        </div>
    </section>
    
   
<!-- catégorie -->



    <div class="slider1_catégo">

        <div class="col" id="col1">
            <p>spring/summer</p>
            <h2>upcomming season</h2>

            <i>the best classic dress is on sale at cara</i>

            <a href="#">collection</a>
        </div>
        <div class="col" id="col2">
            <p>spring/summer</p>
            <h2>upcomming season</h2>

            <i>the best classic dress is on sale at cara</i>

            <a href="#">collection</a>
        </div>

    </div>


    <div class="preview_catégo">
        <div class="box_preview" id="caté_1">
            <h1>elctronique</h1>
            <h3>50% discount on each piece</h3>
        </div>
        <div class="box_preview" id="caté_2">
            <h1>Parfum</h1>
            <h3>50% discount on each piece</h3>
        </div>
        <div class="box_preview" id="caté_3">
            <h1>shoes</h1>
            <h3>50% discount on each piece</h3>
        </div>
    </div>


    <?php include("../slices/footer.php")  ?>