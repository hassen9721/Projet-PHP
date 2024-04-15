<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des commandes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        body {
            background: #eee;
        }

        .commande-item {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
        }

        .product-image {
            width: 100%;
        }

        .product-details {
            margin-top: 20px;
        }

        .product-details h5 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .product-details p {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .product-details .price {
            font-size: 20px;
            font-weight: bold;
            color: green;
        }

        .btn-modifier,
        .btn-supprimer {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <?php
    require_once "header.php";
    require_once "session.php";
    Verifier_session();
    require_once('commande.class.php');
    $us = new Commande();
    $res = $us->listerCommandes();
    ?>

    <br><br><br><br><br><br>

    <div class="container commande-container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php
                $total_montant = 0;
                foreach ($res as $row) {
                    $total_montant += $row['prix'] * $row['qte_commande'];
                ?>
                    <div class="commande-item">
                        <div class="row">
                            <div class="col-md-3">
                                <img class="img-responsive product-image" src="images/<?php echo $row['photo'] ?>" alt="Product Image">
                            </div>
                            <div class="col-md-6 product-details">
                                <h5><?php echo $row['nom']; ?></h5>
                                <p>Date de commande : <?php echo $row['date_commande']; ?></p>
                                <p>Quantité commandée : <?php echo $row['qte_commande']; ?></p>
                                <p>Prix unitaire : <span class="price"><?php echo $row['prix']; ?> $</span></p>
                                <p>Catégorie : <?php echo $row['categorie']; ?></p>
                            </div>
                            <div class="col-md-3">
                                <a href="deleteCommande.php?id_commande=<?= $row['id_commande']; ?>" class="btn btn-danger btn-supprimer">Supprimer</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- Label pour afficher le total du montant de commande -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3>Total du montant de commande : <?php echo $total_montant; ?> $</h3>
            </div>
        </div>

        <!-- Bouton "Buy" pour supprimer toutes les commandes -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <button class="btn btn-primary btn-supprimer" onclick="confirmerSuppression()">Buy</button>
            </div>
        </div>
    </div>

    <script>
        function confirmerSuppression() {
            if (confirm('Félicitations! Êtes-vous sûr de vouloir supprimer toutes les commandes?')) {
                window.location.href = 'deleteAllCommandes.php';
            }
        }
    </script>

</body>

</html>