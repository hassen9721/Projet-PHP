<?php
require_once('commande.class.php');
$us = new Commande();
$us->supprimerCommande($_GET['id_commande']);
header('location:list_commande.php');
