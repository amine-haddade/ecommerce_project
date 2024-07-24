<?php  

session_start();
include("../config/conect.php");
?>


    <header  class="header-slices-all">
        <nav>
            <a href="../web_site/index.php"><img src="../image_product/img_home/logo (1).png" alt=""></a>
            <ul >
                <li><a class="link " href="../web_site/index.php">home</a></li>
                <li><a class="link" href="../web_site/shop.php">shop</a></li>
                <li><a class="link" href="../web_site/catégorie.php">catégorie</a></li>
                <li><a class="link" href="../web_site/about.php">about</a></li>
                <li><a class="link" href="../web_site/contact.php">contact</a></li>
                <li><a class="link" href="../web_site/cart.php"><i class='bx bx-shopping-bag'><span id="total">
                    <?php 
                    if(!isset($_SESSION['cart'])){
                        $_SESSION['cart']=array();
                    }

                    echo array_sum($_SESSION['cart']);
                    
                    ?>
                </span></i></a></li>
                <?php 
                if(isset($_COOKIE['user'])){
                    $id_user=$_COOKIE['user'];
                    $query="SELECT * from user  where id_user='$id_user'";
                    $statement=$connection->prepare($query);
                    $statement->execute();
                    $user=$statement->fetch();
                    ?>
                    <div class="image_div" id="image_profil">
                        <li><img class="imageprofil" src="../uploads/users/<?php echo $user['image']; ?>" alt=""></li>
                        
                    </div>
                    <?php
                    
                }else{
                    ?>
                <li><a href="../web_site/login.php"><i class="fa-regular fa-user"></i></a></li>

                    <?php
                }
                
                ?>
                
                
            </ul>
            <i id="buttonMenu" class="fa-solid fa-bars"></i>

        </nav>
        <div class="info_profil down down_user" id="info-normal-scren">
            <h3>parmaitre</h3>
            <p>ecommerce web site</p>
            <ul>
                <li><i class="fa-regular fa-circle-user"></i><a href="../web_site/profil.php">my profil</a></li>
                <li><i class="fa-regular fa-circle-left"></i><a href="../web_site/logout.php">lougout</a></li>
                <li><i class="fa-solid fa-gear"></i><a href="../admin/dashboard.php">admin</a></li>
                <li><i class="fa-regular fa-circle-question"></i><a href="#">help</a></li>
            </ul>
        </div>
    </header>
    <div class="media-query-nav" id="nav">
    <i class="fa-solid fa-x" id="x-mark"></i>
        <ul>
            <li><a class="link active" href="../web_site/index.php">home</a></li>
            <li><a class="link" href="../web_site/shop.php">shop</a></li>
            <li><a class="link" href="../web_site/catégorie.php">catégorie</a></li>
            <li><a class="link" href="../web_site/about.php">about</a></li>
            <li><a class="link" href="../web_site/contact.php">contact</a></li>
            <li><a class="link" href="../web_site/cart.php"><i class='bx bx-shopping-bag'><span id="total">
                <?php 
                if(!isset($_SESSION['cart'])){
                    $_SESSION['cart']=array();
                }

                echo array_sum($_SESSION['cart']);
                
                ?>
            </span></i></a></li>
            <?php 
            if(isset($_COOKIE['user'])){
                $id_user=$_COOKIE['user'];
                $query="SELECT * from user  where id_user='$id_user'";
                $statement=$connection->prepare($query);
                $statement->execute();
                $user=$statement->fetch();
                ?>
                <div class="image_div" id="image_profil">
                    <li><img class="imageprofil" src="../uploads/users/<?php echo $user['image']; ?>" alt=""></li>
                    
                </div>
                <?php
                
            }else{
                ?>
            <li><a href="../web_site/login.php"><i class="fa-regular fa-user"></i></a></li>

                <?php
            }
            
            ?>            
        </ul>
        <div class="contain-nav-profil">
            <div class="info_profil down_user down">
                <h3>parmaitre</h3>
                <p>ecommerce web site</p>
                <ul>
                    <li><i class="fa-regular fa-circle-user"></i><a href="../web_site/profil.php">my profil</a></li>
                    <li><i class="fa-regular fa-circle-left"></i><a href="../web_site/logout.php">lougout</a></li>
                    <li><i class="fa-solid fa-gear"></i><a href="../admin/dashboard.php">admin</a></li>
                    <li><i class="fa-regular fa-circle-question"></i><a href="#">help</a></li>
                </ul>
            </div>
        </div>
    </div>