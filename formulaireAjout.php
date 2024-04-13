<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php      
     require_once "header.php";
     require_once "session.php";
     Verifier_session();
    require_once "pdo.php";

    ?>
<form action="enregistrement.php" method="post" enctype="multipart/form-data">

    <div class="col-md-6 col-xs-12">  
        <div class="panel panel-info"> 
            <h1 class= 'panel-heading'>Ajouter étudiant</h1>
            <div class= 'panel-body'> 
<table  class='table table-striped'>
    <tr>
   <td>ID :</td> 
   <td><input type="text" name="id" disabled size="20"/></td></tr>
   <tr>
<td>Nom :</td>
<td><input type="text" name="nom" size="20"/></td></tr>
<tr>
<td>Prénom :</td>
<td><input type="text" name="prenom" size="20"/></td></tr>
<tr>
<td>Sexe :</td>
<td><input type="radio" name="sexe" value="M" /> Masculin
    <input type="radio" name="sexe" value="F" /> Féminin</td></tr>
    <tr>
<td>Année de naissance :</td>
<td><select name="annee">
    <option value="1992">1992</option>
    <option value="1993">1993</option>
    <option value="1994">1994</option>
    <option value="1995">1995</option>
    <option value="1996">1996</option>
    <option value="1997">1997</option>
    <option value="1998">1998</option>
    <option value="1999">1999</option>
    </select></td></tr>

    <tr>
        <td>Photo :</td>
        <td><input type="file" name="photo" /></td></tr>

</table>
<br/>
<input type="submit" value="Envoyer"/><br/>
</div>   </div></div>

</form>
</body>
</html>