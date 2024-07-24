<?php

include("slices/navbar.php");
?>
            <div class="formulaire">
                <form action="validation_add_product.php" method="POST" enctype="multipart/form-data">
                    <label for="Nom de product">Nom de product</label>
                    <input type="text" class="form-control mb-3" name="nom_product" required>
                    <label for="price">price</label>
                    <input type="number" class="form-control mb-3" name="price" required>
                    <label for="catégorie">catégorie</label>
                    <select class="form-select form-select-lg  mb-3" name="id_catégorie" id="" required>
                        <?php
                        include("../config/conect.php");
                        $query="select * from catégorie";
                        $statement=$connection->prepare($query);
                        $statement->execute();
                        $rows=$statement->fetchAll();
                        foreach($rows as $row){
                            ?>
                            <option value="<?php echo $row['id_catégorie'] ?>"><?php echo $row['libelle']  ?></option>

                        <?php     
                        }
                        
                    
                        ?>
                    </select>

                        <label for="quntité">quntité</label>
                        <input class="form-control mb-4" type="number" name="quntité" required>


                        <label for="info product">info product</label>
                        <textarea class="form-control mb-3" name="info" id="">

                        </textarea>

                        <label for="image" >image</label>
                        <input class="form-control mb-3" type="file" name="image_product" id="" required>

                        <button class="btn btn-primary">add product</button>
                        

                </form>
            </div>
        </main>
    </div>
   <?php  

   include("slices/footer.php");
   ?>
