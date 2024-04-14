<?php
require_once "headerAdmin.php";
require_once "session.php";
Verifier_session();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
  <?php
  require_once('product.class.php');
  $us = new Product();
  $res = $us->listproducts();
  ?>




  <br><br><br><br><br><br><br>
  <div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
      <div class="col-md-10">

        <a href="AddProduct.php" class="bouton-personnalise">Ajouter produit</a>
        <br><br><br>
        <table class="table">
          <?php foreach ($res as $row) { ?>
            <tr>
              <td>
                <div class="row p-2 bg-white border rounded">
                  <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="images/<?php echo $row['photo'] ?>"></div>
                  <div class="col-md-6 mt-1">
                    <h5><?php echo $row['nom'] ?></h5>
                    <h5><?php echo $row['type'] ?></h5>
                    <div class="d-flex flex-row">
                      <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    </div>

                    <p class="text-justify text-truncate para mb-0"><?php echo $row['description'] ?><br><br></p>
                  </div>
                  <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                      <h4 class="mr-1"><?php echo $row['prix'] ?> $</h4>
                    </div>
                    <h6 class="text-success"><?php echo $row['categorie'] ?></h6>
                    <div class="d-flex flex-column mt-4">
                      <a href="editProduct.php?id_prod=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm" role="button">Modifier</a>
                      <a href="deleteProduct.php?id_prod=<?= $row['id']; ?>" class="btn btn-danger btn-sm" role="button">Supprimer</a>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>



  <style>
    @import "https://unpkg.com/open-props";

    body {
      background: #eee
    }

    .ratings i {
      font-size: 16px;
      color: red
    }

    .strike-text {
      color: red;
      text-decoration: line-through
    }

    .product-image {
      width: 100%
    }

    .dot {
      height: 7px;
      width: 7px;
      margin-left: 6px;
      margin-right: 6px;
      margin-top: 3px;
      background-color: blue;
      border-radius: 50%;
      display: inline-block
    }

    .spec-1 {
      color: #938787;
      font-size: 15px
    }

    h5 {
      font-weight: 400
    }

    .para {
      font-size: 16px
    }


    .bouton-personnalise {
      font-family: var(--font-sans);
      font-weight: var(--font-weight-6);
      font-size: var(--font-size-5);
      color: black;
      /* Couleur du texte en noir */
      background-color: white;
      /* Fond blanc */
      border: 2px solid black;
      padding: 8px 16px;
      text-decoration: none;
      transition: transform 0.1s;
      position: relative;
    }

    .bouton-personnalise:hover {
      filter: grayscale(100%);
      /* Convertir en noir et blanc au survol */
    }

    .bouton-personnalise:active {
      transform: translateY(5%);
    }

    .bouton-personnalise:before {
      content: "";
      position: absolute;
      inset: -0.5rem;
      border: 0.25rem solid black;
      /* Bordure en noir */
      transform: scale(1);
      transition: transform 0.125s;

      --angle-one: 105deg;
      --angle-two: 290deg;
      --spread-one: 30deg;
      --spread-two: 40deg;
      --start-one: calc(var(--angle-one) - (var(--spread-one) * 0.5));
      --start-two: calc(var(--angle-two) - (var(--spread-two) * 0.5));
      --end-one: calc(var(--angle-one) + (var(--spread-one) * 0.5));
      --end-two: calc(var(--angle-two) + (var(--spread-two) * 0.5));

      mask: conic-gradient(transparent 0 var(--start-one),
          white var(--start-one) var(--end-one),
          transparent var(--end-one) var(--start-two),
          white var(--start-two) var(--end-two),
          transparent var(--end-two));

      z-index: -1;
    }
  </style>









</body>

</html>