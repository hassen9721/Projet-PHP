<?php
class connexion
{ 
public function CNXbase()
  {
    $dbc=new PDO('mysql:host=localhost;dbname=site_vente','root',''); 
    return $dbc;
  }   
}
?>
