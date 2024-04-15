<?php
require_once('commande.class.php');

// Créer une instance de la classe Commande
$commande = new Commande();

// Appeler la méthode pour supprimer toutes les commandes
$commande->supprimerToutesCommandes();

// Rediriger vers la page précédente
header('Location: list_commande.php');
exit();
