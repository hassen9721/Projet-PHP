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

    function modifierCommande($id, $qte)
    {
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "UPDATE commande SET qte = $qte WHERE id = $id";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }

    function supprimerCommande($id)
    {
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "DELETE FROM commande WHERE id = $id";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }

    function listerCommandes()
    {
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = $req = "SELECT c.*, p.* FROM commande c INNER JOIN product p ON c.id_produit = p.id";
        $res = $pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
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
