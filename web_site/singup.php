
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
    <link rel="stylesheet" href="../style/login.css">
</head>
<body>


<?php 
    include("../slices/header.php");
?>
    <div class="allcontain">
        <div class="image">
        <img src="../image_product/Compras online ilustração 3D loja online pagamento online e conceito de entrega _ Foto Premium.jpg" alt="">
        </div>

        <div class="loginform">
            <h1>singup</h1>
            <form action="valider_inser_user.php" method="post" enctype="multipart/form-data">
                <input type="text" placeholder="full name" name="full_name" required>
                <input type="email" placeholder="enter your email" name="email" required>
                <input type="password" placeholder="create a password " name="password" required>
                <input type="password" placeholder="confirmation password" required>
                <label for="image"></label>
                <input type="file" id="image" name="image" class="form-control" >
                <button>singup</button>
            </form>
            <p>alredt have an account?<span><a href="login.php">login</a></span></p>
        </div>
    </div>
    <script src="../javascript/main.js"></script>
</body>
</html>