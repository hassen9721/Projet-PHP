<?php
require_once('etudiant.class.php');
$us=new Etudiant();
$us-> supprimeretud($_GET['id_etd']);
header('location:liste_etudiant.php');
?>
