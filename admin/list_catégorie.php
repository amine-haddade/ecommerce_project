<?php

include("slices/navbar_all.php");
include("../config/conect.php");

if(isset($_GET['id_catégorie'])){
    $id_categorie=$_GET['id_catégorie'];
}
?>
        <div class="dashbord_content">

        <h1>dashboard</h1>
        </div>
    
    <div class="list_product">
        <table class="table  table-striped  ">
            <tr>
                <td>image</td>
                <td>nom product</td>
                <td>price</td>
                <td>catégorie</td>
                <td>quntité</td>
                <td >action</td>
            </tr>
            <?php
            $afficher="SELECT catégorie.id_catégorie,id_product,libelle,nom_product,image_product,price,quntité from product join catégorie on product.id_catégorie=catégorie.id_catégorie where product.id_catégorie=$id_categorie";
            $query=$connection->prepare($afficher);
            $query->execute();
            $rows=$query->fetchAll();
            foreach($rows as $row ){
                ?>
                <tr>
                    <td><img id="mini_image_list" src="<?php echo $row['image_product'];  ?>"></td>
                    <td><?php echo $row['nom_product'];   ?></td>
                    <td><?php echo $row['price'];   ?></td>
                    <td><?php echo $row['libelle'];   ?></td>
                    <td><?php echo $row['quntité'];   ?></td>

                    <td><a href="update_product.php?id_product=<?php echo $row['id_product'] ?>"><button type="button" class="btn btn-info">update</button></a><a href="delete/delete_product.php?id_product=<?php echo $row['id_product'] ?>"><button type="button" class="btn btn-outline-danger ms-3">delete</button></a></td>
                    
                </tr>
            
        
        <?php } ?>
        </table>
    </div>
    <?php  

include("slices/footer.php");
?>