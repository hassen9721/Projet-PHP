<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>site web de vente</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
    <link rel="stylesheet" href="css/navstyle.css">

</head>

<body>
    <?php
  session_start();

  ?>
    <!-- partial:index.partial.html -->
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="#"><?= $_SESSION["user"] ?></a></div>
            <input type="radio" name="slider" id="menu-btn">
            <input type="radio" name="slider" id="close-btn">
            <ul class="nav-links">

                <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                <li><a href="homeAdmin.php">Home</a></li>
                <li><a href="list_product.php">Produits</a></li>

                <li><a href="deconnexion.php">Déconnexion</a></li>
            </ul>
            <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
        </div>
    </nav>

</body>

</html>