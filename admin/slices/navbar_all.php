<?php
session_start();
include("../config/conect.php");

if(!isset($_COOKIE['id_admin'])){
    header("location:connexion.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>admin page</title>
    <link rel="stylesheet" href="management.css">





    <link rel="stylesheet" href="../style/from.css">

 
    
</head>
<body>
<div class="header">
        <div class="head">
            <i class="fa-solid fa-bars"></i>
            <h1>Coding Amine</h1>
        </div>
        <div class="sidbar">
        <ul class="yt">
                <a href="dashboard.php" class="lien">
                    <li class="oop">
                        <i class="fa-solid fa-house"></i>
                        <a href="">Dashboard</a>
                    </li>
                </a>
                <li class="oop">

                    <i class="fa-solid fa-table"></i>
                    <a href="#" class="sub-btn">product<i class="fa-solid fa-angle-right "></i></a>
                    
                    <ol class="menu_drop">
                        <a href="product.php" class="lien"><li><i class="fa-solid fa-caret-right"></i><span class="itme-ol-links">list produits</span></li></a>
                        <a href="add_product.php" class="lien"><li><i class="fa-solid fa-caret-right"></i><span class="itme-ol-links">ajouter produit</span></li></a>
                        <li><i class="fa-solid fa-caret-right"></i><span class="itme-ol-links">Item 3</span></li>
                    </ol>
                </li>
                <li class="oop">
                    <i class="fa-solid fa-indent"></i>
                    <a href="#" class="sub-btn" >catégorie<i class="fa-solid fa-angle-right "></i></a>
                    <ol class="menu_drop">
                    <a href="add_catégorie.php" class="lien"><li><i class="fa-solid fa-caret-right"></i><span class="itme-ol-links">add catégorie</span></li></a>
                       <a href="catégorie.php" class="lien"><li><i class="fa-solid fa-caret-right"></i><span class="itme-ol-links">catégorie</span></li></a> 
                        <a  href="list_all_catégorie.php" class="lien"><li><i class="fa-solid fa-caret-right"></i><span class="itme-ol-links">list catégorie</span></li></a>
                    </ol>
                    
                </li>
                <li class="oop">
                    <i class="fa-solid fa-gear"></i>
                    <a href="#">Settings</a>
                </li>
                <li class="oop" >
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <a href="#">About</a>
                </li>
            </ul>
            <ul  class="loug_out">
                    <a href="out/vide_cookie.php" >
                    <li class="profil" id="profil-sidebar">
                        <i  class="fa-solid fa-address-card"></i>
                        <a href="out/vide_cookie.php" >out</a>
                
                    </li>
                </a>
            </ul>
        </div>
    </div>
        <main>
            <header>
                 <div class="search">
                     <i class="fa-solid fa-magnifying-glass"></i>
                     <input type="text" placeholder="chercher">
                 </div>
                 <div class="profil" id="profil-navbar">
                     <i class="fa-sharp fa-regular fa-bell"></i>
                     <img src="../image_product/img_home/people (1)/2.png" alt="">
                 </div>
            </header>
            <div class="dashbord_content">

                <h1>dashboard</h1>
            </div>
            <div class="info_project">
                <div class="box">
                    <div class="main_icone">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <?php
                        $query ="SELECT * from user";
                        $stm=$connection->prepare($query);
                        $stm->execute();
                        $count_user=$stm->rowCount();?>
                    <div class="detail">
                        <h3><?php   echo $count_user; ?></h3>
                        <p>users</p>
                    </div>
                </div>
                <div class="box">
                    <div class="main_icone">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <?php
                        $query ="SELECT * from product";
                        $stm=$connection->prepare($query);
                        $stm->execute();
                        $count_product=$stm->rowCount();?>
                    <div class="detail">
                    <h3><?php   echo $count_product; ?></h3>
                        <p>product</p>
                    </div>
                </div>
                <div class="box">
                    <div class="main_icone">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <?php
                        $query ="SELECT * from catégorie";
                        $stm=$connection->prepare($query);
                        $stm->execute();
                        $count_catégorie=$stm->rowCount();?>
                    <div class="detail">
                    <h3><?php   echo $count_catégorie; ?></h3>
                        <p>catégorie</p>
                    </div>
                </div>
                <div class="box">
                    <div class="main_icone">
                        <i class="fa-solid fa-shop"></i>
                    </div>
                    <div class="detail">
                        <h3>300</h3>
                        <p>stors</p>
                    </div>
                </div>
            </div>
            