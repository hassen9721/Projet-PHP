<?php
    
    require_once("etudiant.class.php");
     $e= new Etudiant();
     $e->nom="Ellouze";
     $e->prenom= "Fatma";
     $e->sexe= "F";
     $e->an_naissance= "2000";
     $e->insertEtudiant();
?>