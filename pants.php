<?php
require_once "header.php";
require_once "session.php";
require_once "commande.class.php"; // Inclure la classe Commande

Verifier_session();

require_once('product.class.php');
$us = new Product();
$res = $us->listproducts();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['qte_cmd'])) {
        $nom_user = $_SESSION['user']; // Récupérer le nom de l'utilisateur depuis la session
        $id_produit = $_POST['id'];
        $qte_cmd = $_POST['qte_cmd'];
        $date_commande = date("Y-m-d"); // Date de la commande

        // Créer une instance de la classe Commande
        $commande = new Commande();
        // Insérer la commande dans la base de données
        $commande->insererCommande($nom_user, $id_produit, $qte_cmd, $date_commande);
        // Rediriger vers la page watchs.php après l'insertion de la commande
        header('location:pants.php');
        exit; // Arrêter l'exécution du script après la redirection
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="css/product.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <title>Site web de vente</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>

<body>
    <br><br><br><br><br><br>
    <form action="" method="post" enctype="multipart/form-data">
        <?php foreach ($res as $row) { ?>
            <?php if ($row['type'] == "pantalon") { ?>
                <div class="container">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <!-- Nom de l'utilisateur en tant que champ caché -->
                    <input type="hidden" name="nom_user" value="<?= $_SESSION["user"] ?>">
                    <div class="imgBx">
                        <img src="images/<?php echo $row['photo'] ?>" alt="Nike Jordan Proto-Lyte Image" width="200" height="300">
                    </div>
                    <div class="details">
                        <div class="content">
                            <h2><?php echo $row['nom'] ?> <br>
                                <span><?php echo $row['type'] ?></span>
                            </h2>
                            <p class="product-colors">Available Colors:<br>
                                <span class="black active" data-color-primary="#000" data-color-sec="#212121" data-pic="https://github.com/anuzbvbmaniac/Responsive-Product-Card---CSS-ONLY/blob/master/assets/img/jordan_proto.png?raw=true"></span>
                                <span class="red" data-color-primary="#7E021C" data-color-sec="#bd072d" data-pic="https://github.com/anuzbvbmaniac/Responsive-Product-Card---CSS-ONLY/blob/master/assets/img/jordan_proto_red_black.png?raw=true"></span>
                                <span class="orange" data-color-primary="#CE5B39" data-color-sec="#F18557" data-pic="https://github.com/anuzbvbmaniac/Responsive-Product-Card---CSS-ONLY/blob/master/assets/img/jordan_proto_orange_black.png?raw=true"></span>
                            </p>
                            <h3>Prix: <?php echo $row['prix'] ?>$</h3>
                            <div>
                                <?php if ($row['qte'] > 0) { ?>
                                    <b>
                                        <input type="number" id="qte" name="qte_cmd" />
                                    </b>
                                <?php } else { ?>
                                    <b>
                                        <br><br>
                                    </b>
                                <?php } ?>
                            </div>
                            <button type="submit" style="margin-top: 50px;">Buy now</button>
                            <div style="margin-top:200px;margin-left:100px">
                                <?php if ($row['qte'] > 0) { ?>
                                    <b>
                                        <p style="color:green;">Disponible</p>
                                    </b>
                                <?php } else { ?>
                                    <b>
                                        <p style="color:red;">Non disponible</p>
                                    </b>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </form>
    <script>
        // Change The Picture and Associated Element Color when Color Options Are Clicked.
        $(".product-colors span").click(function() {
            $(".product-colors span").removeClass("active");
            $(this).addClass("active");
            $(".active").css("border-color", $(this).attr("data-color-sec"))
            $("body").css("background", $(this).attr("data-color-primary"));
            $(".content h2").css("color", $(this).attr("data-color-sec"));
            $(".content h3").css("color", $(this).attr("data-color-sec"));
            $(".container .imgBx").css("background", $(this).attr("data-color-sec"));
            $(".container .details button").css("background", $(this).attr("data-color-sec"));
            $(".imgBx img").attr('src', $(this).attr("data-pic"));
        });
    </script>
</body>

</html>