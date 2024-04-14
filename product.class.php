<?php
class Product
{
    /* attributs de la classe utilisateur*/

    public $id;
    public $nom;
    public $description;
    public $categorie;
    public $prix;
    public $photo;
    /* constructeur de la classe */


    function insertProduct()
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "INSERT INTO product (nom,description,categorie,prix,photo) VALUES
('$this->nom','$this->description','$this->categorie',$this->prix, '$this->photo')";

        $pdo->exec($req) or print_r($pdo->errorInfo());
    }

    function listproducts()
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();

        $req = "SELECT * FROM product";
        $res = $pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }


    function getProduct($id)
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "SELECT * FROM product where id=$id";
        $res = $pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }

    function modifierProduct($id)
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "UPDATE product SET  nom='$this->nom', description='$this->description', categorie='$this->categorie', prix=$this->prix, photo='$this->photo' WHERE id=$id";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }

    function modifierProductPhoto($id)
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "UPDATE product SET  nom='$this->nom', description='$this->description', categorie='$this->categorie', prix=$this->prix WHERE id=$id";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }

    function supprimerProduct($id)
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();

        $req = "DELETE FROM product WHERE id='$id'";
        $pdo->exec($req);
    }

    //fin de la classe
}
