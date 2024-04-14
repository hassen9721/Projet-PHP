<?php
require_once "product.class.php";
$et = new Product();

/* récupération des données du formulaire */
$et->nom = $_POST['nom'];
$et->description  = $_POST['description'];
$et->categorie  = $_POST['categorie'];
$et->prix  = $_POST['prix'];
$et->type  = $_POST['type'];


// Vérifier si le fichier a été téléchargé avec succès
if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    $et->photo = $_FILES['photo']['name'];
    $fichierTemp = $_FILES['photo']['tmp_name'];
    move_uploaded_file($fichierTemp, 'images/' . $_FILES['photo']['name']);
}

$et->insertProduct();
header('location:list_product.php');
