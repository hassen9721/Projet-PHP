<!-- les utilisateurs -->
<?php
class Compte
{
    public $user;
    public $pwd;
    public $pwd2;
    public $email;
    public $isAdmin = 0;

    function getUser()
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "SELECT * FROM compte WHERE user='$this->user'and pwd='$this->pwd'";
        $res = $pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }
    function SignUser()
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "INSERT INTO compte (user,pwd,email,pwd2,isAdmin) VALUES ('$this->user','$this->pwd','$this->email','$this->pwd2','$this->isAdmin')";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }
} ?>