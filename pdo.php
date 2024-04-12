<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=site_vente', 'root', '');
} catch (PDOException $e) {
    printf("Echec de la connexion : %s\n", $e->getMessage());
    exit();
}
