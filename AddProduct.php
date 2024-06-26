<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    require_once "headerAdmin.php";
    require_once "session.php";
    Verifier_session();
    require_once "pdo.php";

    ?>

    <br><br><br><br><br>
    <div class="form-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <div class="form-container">
                        <h3 class="title">Ajouter un Produit</h3>
                        <form class="form-horizontal" action="saveProduct.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nom du Produit</label>
                                <input type="text" name="nom" class="form-control" placeholder="Nom du Produit">
                            </div>
                            <div class="form-group">
                                <label>Description du Produit</label>
                                <textarea type="text" name="description" class="form-control" placeholder="Description du Produit" cols="33"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Quantité du Produit</label>
                                <input type="number" name="qte" class="form-control" placeholder="Quantité du Produit">
                            </div>
                            <div class="form-group">
                                <label>Prix du Produit</label>
                                <input type="number" name="prix" class="form-control" placeholder="Prix du Produit">
                            </div>
                            <div class="form-group">
                                <label>Catégorie du Produit</label>
                                <select class="form-control" name="categorie">

                                    <option value="vetements">Vêtements</option>
                                    <option value="accessoires">Accessoires</option>
                                    <option value="chaussures">Chaussures</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Type du Produit</label>
                                <select class="form-control" name="type">
                                    <!-- Options pour les différents types de produits en fonction de la catégorie sélectionnée -->
                                    <option value="">Sélectionner un type</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Photo</label>
                                <input type="file" name="photo" class="form-control" placeholder="Photo du Produit">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<script>
    document.querySelector('select[name="categorie"]').addEventListener('change', function() {
        var typeSelect = document.querySelector('select[name="type"]');
        typeSelect.innerHTML = ''; // Efface les options actuelles

        // Récupère la valeur de la catégorie sélectionnée
        var categorie = this.value;

        // Ajoute les options correspondantes en fonction de la catégorie sélectionnée
        switch (categorie) {
            case 'vetements':
                typeSelect.innerHTML = '<option value="pantalon">Pantalon</option><option value="pull">Pull</option>';
                break;
            case 'accessoires':
                typeSelect.innerHTML = '<option value="montre">Montre</option><option value="colier">Collier</option>';
                break;
            case 'chaussures':
                typeSelect.innerHTML = '<option value="chaussure">Chaussure</option>';
                break;
            default:
                typeSelect.innerHTML = '<option value="">Sélectionner un type</option>';
        }
    });
</script>
<style>
    .form-container .title {
        color: #000;
        font-size: 25px;
        font-weight: 600;
        text-transform: capitalize;
        margin: 0 0 25px;
    }

    .form-container .title:after {
        content: '';
        background-color: #00A9EF;
        height: 3px;
        width: 60px;
        margin: 10px 0 0;
        display: block;
        clear: both;
    }

    .form-container .sub-title {
        color: #333;
        font-size: 18px;
        font-weight: 600;
        text-align: center;
        text-transform: uppercase;
        margin: 0 0 20px;
    }

    .form-container .form-horizontal {
        font-size: 0;
    }

    .form-container .form-horizontal .form-group {
        color: #333;
        width: 100%;
        padding: 0 8px;
        margin: 0 0 15px;
        display: inline-block;
    }

    .form-container .form-horizontal .form-group:nth-child(4) {
        margin-bottom: 30px;
    }

    .form-container .form-horizontal .form-group label {
        font-size: 17px;
        font-weight: 600;
    }

    .form-container .form-horizontal .form-control {
        color: #888;
        background: #fff;
        font-weight: 400;
        letter-spacing: 1px;
        height: 40px;
        padding: 6px 12px;
        border-radius: 10px;
        border: 2px solid #e7e7e7;
        box-shadow: none;
    }

    .form-container .form-horizontal .form-control:focus {
        box-shadow: 0 0 5px #dcdcdc;
    }

    .form-container .form-horizontal .check-terms {
        padding: 0 8px;
        margin: 0 0 25px;
    }

    .form-container .form-horizontal .check-terms .check-label {
        color: #333;
        font-size: 14px;
        font-weight: 500;
        font-style: italic;
        vertical-align: top;
        display: inline-block;
    }

    .form-container .form-horizontal .check-terms .checkbox {
        height: 17px;
        width: 17px;
        min-height: auto;
        margin: 2px 8px 0 0;
        border: 2px solid #d9d9d9;
        border-radius: 2px;
        cursor: pointer;
        display: inline-block;
        position: relative;
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
        transition: all 0.3s ease 0s;
    }

    .form-container .form-horizontal .check-terms .checkbox:before {
        content: '';
        height: 5px;
        width: 9px;
        border-bottom: 2px solid #00A9EF;
        border-left: 2px solid #00A9EF;
        transform: rotate(-45deg);
        position: absolute;
        left: 2px;
        top: 2.5px;
        transition: all 0.3s ease;
    }

    .form-container .form-horizontal .check-terms .checkbox:checked:before {
        opacity: 1;
    }

    .form-container .form-horizontal .check-terms .checkbox:not(:checked):before {
        opacity: 0;
    }

    .form-container .form-horizontal .check-terms .checkbox:focus {
        outline: none;
    }

    .form-container .signin-link {
        color: #333;
        font-size: 14px;
        width: calc(100% - 190px);
        margin-right: 30px;
        display: inline-block;
        vertical-align: top;
    }

    .form-container .signin-link a {
        color: #00A9EF;
        font-weight: 600;
        transition: all 0.3s ease 0s;
    }

    .form-container .signin-link a:hover {
        text-decoration: underline;
    }

    .form-container .form-horizontal .signup {
        color: #fff;
        background: #00A9EF;
        font-size: 15px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        width: 160px;
        padding: 8px 15px 9px;
        border-radius: 10px;
        transition: all 0.3s ease 0s;
    }

    .form-container .form-horizontal .btn:hover,
    .form-container .form-horizontal .btn:focus {
        text-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        box-shadow: 3px 3px rgba(0, 0, 0, 0.15), 5px 5px rgba(0, 0, 0, 0.1);
        outline: none;
    }

    @media only screen and (max-width:479px) {
        .form-container .form-horizontal .form-group {
            width: 100%;
        }

        .form-container .signin-link {
            width: 100%;
            margin: 0 10px 15px;
        }
    }
</style>

</html>