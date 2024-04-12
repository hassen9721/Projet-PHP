<?php
require_once 'pdo.php'; // On inclut la connexion à la bdd

// Retrieve form data
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['password'];
$isAdmin = 0;
$connexion = 1;



// Prepare SQL statement
$sql = "INSERT INTO users (nom, prenom, email, password, isAdmin,connexion) VALUES ('$nom', '$prenom', '$email', '$password', '$isAdmin', '$connexion')";
$pdo->exec($sql);
header('Location: home.php');