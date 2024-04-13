<?php
 require_once "header.php";
 require_once "session.php";
 Verifier_session();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
 <?php
require_once('etudiant.class.php');
$us=new etudiant();
$res=$us->listetudiants();
?>

<div class="col-md-6 col-xs-12 ">  
<div class="panel panel-info"> 
    <h1 class= 'panel-heading'>Liste des étudiants</h1>
    <div class= 'panel-body'> 
        

                <table border=1 class="table table-striped">
                <tr> <td> ID </td> <td> Prénom </td> <td> Nom </td><td> Sexe </td><td>An_Naissance</td> <td> Photo </td><td>Opérations</td> </tr>
                  <?php foreach ($res as $row){?>
                           <tr>
                          <td><?php echo $row['id']?></td>
                          <td><?php echo $row['nom']?></td>
                          <td><?php echo $row['prenom']?></td>
                          <td><?php echo $row['sexe']?></td>
                          <td><?php echo $row['an_naissance']?></td>
                          <td>  <img src= "images/<?php echo $row['photo']?>" width="50" height="50">     </td>
                          <td><a href="delete.php?id_etd=<?= $row['id'];?>">Supprimer</a> 
                           <a href="modifForm.php?id_etd=<?php echo $row['id'];?>">Modifier</a> </td>
                           </tr> <?php }?>                 
                </table>
                </div>   </div></div>
               

</body>
</html>