<?php

include("slices/navbar_all.php");
include("../config/conect.php");

?>
        <div class="dashbord_content">

        <h1>dashboard</h1>
        </div>
        <div class="list_product">
        <table class="table  table-striped  ">
            <tr>
                <td>image</td>
                <td>libelle</td>
                <td>nombre product</td>
                <td>action</td>
            </tr>
            <?php
            $afficher="SELECT catégorie.id_catégorie,count(id_product) as nombre ,libelle,image_catégorie  from product join catégorie on product.id_catégorie=catégorie.id_catégorie   group by catégorie.id_catégorie";
            $query=$connection->prepare($afficher);
            $query->execute();
            $rows=$query->fetchAll();
            foreach($rows as $row ){
                ?>
                <tr>
                    <td><img id="mini_image_list" src="<?php echo $row['image_catégorie'];  ?>"></td>
                    <td><?php echo $row['libelle'];   ?></td>
                    <td><?php echo $row['nombre'];   ?></td>
                    <td><a href="#"><button type="button" class="btn btn-info">update</button></a><a href="delete/delete_catégorie.php?id_catégorie=<?php echo $row['id_catégorie'] ?>"><button type="button" class="btn btn-outline-danger  ms-3">delete</button></a></td>
                    
                </tr>

                <?php } ?>
        </table>
    </div>
    <?php  

include("slices/footer.php");
?>
