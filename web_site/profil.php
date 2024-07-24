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
    <title>profil</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/shop.css">
</head>
<body>
<?php

include("../slices/header.php");



$_SESSION['last_page'] = $_SERVER['REQUEST_URI'];


?>
    <div class="cont">
        <div class="content">
            <div class="info_user">
                <div class="image">
                    <img src="../uploads/users/<?php echo $user['image']; ?>" alt="">
                </div>
                <h1><?php echo $user['full_name']; ?></h1>
                <p><?php echo $user['email']; ?></p>
                <hr class="hr">
            </div>
            <div class="form_update">
                <form action="update_user.php" method="post" enctype="multipart/form-data">
                    <div class="fullname data-user">
                        <label for="full name">full name</label>
                        <input type="text" class="form-control" name="full_name" value="<?php echo $user['full_name']; ?>">
                    </div>
                    <div class="email data-user">
                        <label for="email">email</label>
                        <input type="email" name="email"  class="form-control" value="<?php echo $user['email']; ?>">
                    </div>
                    <div class="password data-user">
                        <label for="password">password</label>
                        <input type="password" name="password"  class="form-control" value="<?php echo $user['password']; ?>">
                    </div>
                    <input type="hidden" name="image_dernier" id="" value="<?php echo $user['image']; ?>">
                    <div class="photo data-user">
                        <label for="image">photo</label>
                        <input type="file" id="image" name="image" class="form-control" >
                    </div>

                    <div class="image_user">
                        <img src="../uploads/users/<?php echo $user['image']; ?>" alt="">
                    </div>
                    <div class="button_save">
                        <button>save changes</button>
                    </div>

                </form>
            </div>
        </div>
        <div class="user_operation">
            <h1>information user</h1>
            <div class="info_project">
                <div class="box">
                    <div class="all_info">
                        <div class="main_icone">
                        <i class="fa-solid fa-bag-shopping"></i>
                        </div>
                        <div class="detail">
                            <?php
                            
                            $getNombrePr="SELECT les_produits from commande where id_user='$id_user'";
                            $stm=$connection->prepare($getNombrePr);
                            $stm->execute();
                            $rowsPr=$stm->fetchAll(PDO::FETCH_ASSOC);
                            $idProduits=[];
                            foreach($rowsPr as $produit){
                                    // Decode JSON string into an array
                                    $ids = json_decode($produit['les_produits']);
                                    // Check if decoding was successful and is an array;
                                    
                                    if (is_array($ids)) {
                                        // Merge the decoded IDs into the $idProduits array
                                        $idProduits = array_merge($idProduits, $ids);
                                    }
                                
                                
                            }
                            $count=0;
                            foreach($idProduits as $p){
                                $count++;
                            }
                        
                            

                            
                            ?>
                            <h3><?php  echo $count ?></h3>
                            <p>produits</p>
                        </div>
                    </div>
                    <a href="achats-product.php?idAllProduits=<?php echo urlencode(json_encode($idProduits)); ?>"><div class="button_view">
                        <button>view cart</button>
                    </div></a>
                </div>
                <div class="box">
                    <div class="all_info">
                        <div class="main_icone">
                        <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="detail">
                            <h3>15</h3>
                            <p>likes</p>
                        </div>
                    </div>
                    <div class="button_view">
                        <button>view cart</button>
                    </div>
                </div>
                <div class="box">
                    <div class="all_info">
                        <div class="main_icone">
                        <i class="fa-solid fa-basket-shopping"></i>
                        </div>
                        <div class="detail">
                            <!-- code get nombre commande php -->
                            <?php
                            if(isset($_COOKIE['user'])){
                                $id_user=$_COOKIE['user'];
                            }
                            $getNombreCmd="SELECT * from commande where id_user='$id_user'";
                            $query=$connection->prepare($getNombreCmd);
                            $query->execute();
                            $nbrCmd=$query->rowCount();
                            ?>
                            <h3><?php echo $nbrCmd  ?></h3>
                            <p>commande</p>
                        </div>
                    </div>
                    <div class="button_view">
                        <button>view cart</button>
                    </div>
                </div>
                <div class="box">
                    <div class="all_info">
                        <div class="main_icone">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <div class="detail">
                            <h3>15</h3>
                            <p>likes</p>
                        </div>
                    </div>
                    <div class="button_view">
                        <button>view cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("../slices/footer.php") ?>