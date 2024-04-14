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
            <div class="logo"><a href="#"><?= $_SESSION["user"]?></a></div>
            <input type="radio" name="slider" id="menu-btn">
            <input type="radio" name="slider" id="close-btn">
            <ul class="nav-links">

                <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                <li><a href="landing.php">Acceuil</a></li>
                <li>
                    <a href="#" class="desktop-item">Menu</a>
                    <input type="checkbox" id="showMega">
                    <label for="showMega" class="mobile-item">Menu</label>
                    <div class="mega-box">
                        <div class="content">
                            <div class="row">
                                <img src="https://fadzrinmadu.github.io/hosted-assets/responsive-mega-menu-and-dropdown-menu-using-only-html-and-css/img.jpg"
                                    alt="">
                            </div>
                            <div class="row">
                                <header>chaussures</header>
                                <ul class="mega-links">
                                    <li><a href="boots.php">chaussures</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <header>accessoires</header>
                                <ul class="mega-links">
                                    <li><a href="watchs.php">montre</a></li>
                                    <li><a href="necklace.php">collier</a></li>

                                </ul>
                            </div>
                            <div class="row">
                                <header>vetements</header>
                                <ul class="mega-links">
                                    <li><a href="pulls.php">tirer</a></li>
                                    <li><a href="pants.php">pantalon</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li><a href="contact.php">Contact</a></li>
                <li><a href="deconnexion.php">Déconnexion</a></li>
            </ul>
            <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
        </div>
    </nav>

</body>

</html>