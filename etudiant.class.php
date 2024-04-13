<?php        
class Etudiant
{
/* attributs de la classe utilisateur*/
	
public $id;
public $nom;
public $prenom;
public $sexe;
public $an_naissance;
public $photo;
/* constructeur de la classe */


function insertEtudiant()
 {
require_once('pdo.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="INSERT INTO etudiant (nom,prenom,sexe,an_naissance, photo) VALUES
('$this->nom','$this->prenom','$this->sexe',$this->an_naissance, '$this->photo')";

$pdo->exec($req) or print_r($pdo->errorInfo());
}

function listetudiants()
{
require_once('pdo.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
          
$req="SELECT * FROM etudiant";
$res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
return $res; 
}


function getetud($id)
{
require_once('pdo.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="SELECT * FROM etudiant where id=$id";
$res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
return $res;
}

function modifieretud($id)
{
require_once('pdo.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="UPDATE etudiant SET  nom='$this->nom', prenom='$this->prenom', sexe='$this->sexe', an_naissance=$this->an_naissance, photo='$this->photo' WHERE id=$id";
$pdo->exec($req) or print_r($pdo->errorInfo());
}

function modifieretudssphoto($id)
{
require_once('pdo.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="UPDATE etudiant SET  nom='$this->nom', prenom='$this->prenom', sexe='$this->sexe', an_naissance=$this->an_naissance WHERE id=$id";
$pdo->exec($req) or print_r($pdo->errorInfo());
}

function supprimeretud($id)
{
require_once('pdo.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();

$req="DELETE FROM etudiant WHERE id='$id'"; 
$pdo->exec($req);
}

//fin de la classe
 } ?>
