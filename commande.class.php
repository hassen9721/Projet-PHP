<?php

require_once('pdo.php');

class Commande
{
    public $id;
    public $nom_user;
    public $id_produit;
    public $qte;
    public $date_commande;

    function insererCommande($nom_user, $id_produit, $qte, $date_commande)
    {
        // Récupérer l'ID de l'utilisateur à partir de son nom d'utilisateur
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "SELECT id FROM compte WHERE user = '$nom_user'";
        $res = $pdo->query($req) or print_r($pdo->errorInfo());
        $row = $res->fetch(PDO::FETCH_ASSOC);
        $id_user = $row['id'];

        // Insérer la commande dans la base de données avec l'ID de l'utilisateur
        $req_insert = "INSERT INTO commande (nom_user, id_produit, qte, date_commande) VALUES ('$id_user', $id_produit, $qte, '$date_commande')";
        $pdo->exec($req_insert) or print_r($pdo->errorInfo());
    }



    function supprimerCommande($id)
    {
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "DELETE FROM commande WHERE id_commande = $id";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }

    function listerCommandes()
    {
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "SELECT c.*, p.*, c.qte AS qte_commande FROM commande c INNER JOIN product p ON c.id_produit = p.id";
        $res = $pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }
    function supprimerToutesCommandes()
    {
        // Établir une connexion à la base de données
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();

        // Préparer la requête de suppression
        $req = "DELETE FROM commande";

        // Exécuter la requête
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }


    function mettreAJourQuantiteProduit($id_produit, $qte_commandee)
    {
        // Connexion à la base de données
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();

        // Récupérer la quantité actuelle du produit
        $req_select = "SELECT qte FROM product WHERE id = $id_produit";
        $res_select = $pdo->query($req_select) or print_r($pdo->errorInfo());
        $row = $res_select->fetch(PDO::FETCH_ASSOC);
        $qte_actuelle = $row['qte'];

        // Mettre à jour la quantité du produit
        $qte_mise_a_jour = $qte_actuelle - $qte_commandee;

        // Exécuter la requête de mise à jour
        $req_update = "UPDATE product SET qte = $qte_mise_a_jour WHERE id = $id_produit";
        $pdo->exec($req_update) or print_r($pdo->errorInfo());
    }


    function getCommande($id)
    {
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "SELECT * FROM commande WHERE id = $id";
        $res = $pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }
}
