<?php
include("slices/navbar.php");
include("../config/conect.php");

?>
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
        </main>

    </div>

    
    <?php  

include("slices/footer.php");
?>