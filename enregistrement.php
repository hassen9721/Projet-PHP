<?php
    require_once "etudiant.class.php";
    $et=new Etudiant();
    
/* récupération des données du formulaire */

$et->nom = $_POST['nom'];
$et->prenom = $_POST['prenom'];
$et->sexe = $_POST['sexe'];
$et->an_naissance = $_POST['annee'];
$et->photo=$_FILES['photo']['name'];
$fichierTemp=$_FILES['photo']['tmp_name'];
move_uploaded_file($fichierTemp, 'images/'.$_FILES['photo']['name'] );
$et->insertEtudiant();
header('location:liste_etudiant.php');


 