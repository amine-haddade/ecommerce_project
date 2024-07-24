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
    <div class="evrly"></div>
    <?php  


include("../config/conect.php");
include("../slices/header.php");

?>


    

    <h1 class="titleCart">cartShoping</h1>

    <div class="cartShoping">
    <table class="table" id="table">
    <thead>
        <tr>
            <td>Image</td>
            <td>Name</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Remove</td>
        </tr>
    </thead>
        <?php
        $id_des_produits=array_keys($_SESSION['cart']);
        if(empty($id_des_produits)){
            echo ("votre panier vide");
        }else{
            $id_json_text=json_encode($id_des_produits);



            $total=0;
            $palaceid=implode(',',array_fill(0,count($id_des_produits),'?'));
            
            $query="SELECT p.id_product,p.price, p.image_product, p.nom_product, c.libelle 
                  FROM product p 
                  JOIN catégorie c ON p.id_catégorie = c.id_catégorie 
                  WHERE p.id_product IN ($palaceid)";



            $stm=$connection->prepare($query);

            foreach ($id_des_produits as $index => $id) {
                $stm->bindValue($index + 1, $id, PDO::PARAM_INT);
            }
            $stm->execute();

            $rows=$stm->fetchAll();
            foreach($rows as $row){

                $total=$total+$row['price']*$_SESSION['cart'][$row['id_product']];// quntite chaque prouit


       
        
        
        ?>
    <tbody>

        <tr>
            <td><img class="image_cart" src="<?php echo $row['image_product'] ?>" alt=""></td>
            <td>
                <p class="nameCatégorie"><?php echo $row['libelle'] ?></p>
                <p class="nameProduit"><?php echo $row['nom_product'] ?></p>
            </td>
            <td class="price">$<?php echo $row['price'] ?></td>
            <td><input type="number" min="1" max="10" value="<?php echo $_SESSION['cart'][$row['id_product']]?>"></td>
            <td><a href="traitement_panier_delete.php?id_product=<?php echo $row['id_product']  ?>"><i class="fa-regular fa-trash-can"></i></a></td>
        </tr>
        
            <?php }
        
        ?>
    </tbody>
</table>

        <div class="button_Shopping">
            <button class="btn "><i class="fa-solid fa-shuffle"></i>update cart</button>
            <button class="btn "><i class="fa-solid fa-bag-shopping"></i>continue shopping</button>
        </div>
        <div class="divligne">
            <i class="fa-solid fa-fingerprint"></i>
        </div>
        
            <div class="chop_prix">
                <div class="shipping-section">
                    <div class="calculate-shipping">
                        <h2>Calculate Shipping</h2>
                        <form>
                            <input type="text" placeholder="State / Country" required>
                            <input type="text" placeholder="City" required>
                            <input type="text" placeholder="PostCode / ZIP" required>
                            <button type="submit" class="update-button"><i class="fa-solid fa-shuffle"></i>Update</button>
                        </form>
                    </div>
                    <div class="calculate-coupon">
                        <h2>Calculate Shipping</h2>
                        <form>
                            <input type="text" placeholder="Enter Your Coupon" required>
                            <button  type="submit" class="apply-button"><i class="fa-solid fa-clipboard"></i>Apply</button>
                        </form>
                    </div>
                </div>
                <div class="cart-totals">
                    <h2>Cart Totals</h2>
                    <table class="table table-bordered totale-table">
                        <tr>
                            <td>Cart Subtotal</td>
                            <td>$<?php echo $total?></td>
                        </tr>
                        <tr>
                            <td>Shipping</td>
                            <td>$10.00</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>$<?php echo $total+10 ?></td>
                        </tr>
                        <?php  }
        ?>
                    </table>
                    <button class="checkout-button"> <i class="fa-solid fa-dollar-sign"></i>pay now</button>
                </div>
                
                
        </div>
        
        </div>
    <!-- <span id="all_content"></span> -->
    <?php include("../slices/footer.php")  ?>
    <div class="box_confirmation">
                    <i class="fa-regular fa-circle-check"></i>
                    <h2>completed</h2>
                    <p>you have succesfully downloaded all the source code files</p>
                    <div class="button">
                    <a href="taritement_payement.php?produits=<?php  echo $id_json_text?>&total=<?php echo $total+10?>"><button id="clos-btn">ok close</button></a>
                    <button id="clos">no exite</button>
                    </div>
                
                </div>
