<?php
require_once('etudiant.class.php');
$et=new Etudiant(); 
$id = $_POST['id'];
$et->nom = $_POST['lname'];
$et->prenom = $_POST['fname'];
$et->sexe = $_POST['sexe'];
$et->an_naissance = $_POST['an_naissance'];
$et->photo=$_FILES['photo']['name'];

$photo=$_FILES['photo']['name'];
if ($photo=="")
{
    $et->modifieretudssphoto($id);
header('location:liste_etudiant.php');
} else
{
   $fichierTemp=$_FILES['photo']['tmp_name'];
move_uploaded_file($fichierTemp, 'images/'.$photo );
$et->modifieretud($id);
  
header('location:liste_etudiant.php');
}


?>
