<?php

include("slices/navbar.php");
?>

<div class="formulaire">
                <form action="validation_add_catégorie.php" method="POST" enctype="multipart/form-data">
                    <label for="Nom de product">libelle</label>
                    <input type="text" class="form-control mb-3" name="libelle" required>

                    <label for="image" >image</label>
                    <input class="form-control mb-3" type="file" name="image_catégorie" id="" required>

                    <button class="btn btn-primary">add catégorie</button>
                    

                </form>
            </div>
            <?php  

include("slices/footer.php");
?>