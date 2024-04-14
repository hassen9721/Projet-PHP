<?php
require_once('product.class.php');
$et = new Product();
$id = $_POST['id'];
$et->nom = $_POST['nom'];
$et->description = $_POST['description'];
$et->categorie = $_POST['categorie'];
$et->prix = $_POST['prix'];
$et->photo = $_FILES['photo']['name'];

$photo = $_FILES['photo']['name'];
if ($photo == "") {
    $et->modifierProduct($id);
    header('location:list_product.php');
} else {
    $fichierTemp = $_FILES['photo']['tmp_name'];
    move_uploaded_file($fichierTemp, 'images/' . $photo);
    $et->modifierProduct($id);

    header('location:list_product.php');
}
