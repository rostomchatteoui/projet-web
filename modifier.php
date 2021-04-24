<?php
require_once $_SERVER['DOCUMENT_ROOT'].'\projet\core\clientC.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\projet\entities\client.php';



$id=$_POST['id'];

  //récupération des valeurs des champs:
  //nom:
  $nom     = $_POST["nom"] ;
  //prenom:
  $prenom = $_POST["prenom"] ;
  //adresse:
  $username = $_POST["username"] ;
  //code postal:
  $adresse       = $_POST["adresse"] ;
  //numéro de téléphone:
  $tel        = $_POST["tel"] ;

  //récupération de l'identifiant de la personne:
  $email         = $_POST["email"] ;

$password=$_POST['password'];
header("Location:index.php");

 $clientC=new clientC();
$clientC->modifierclient($id,$nom,$prenom,$username,$adresse,$tel,$email,$password);





  //affichage des résultats, pour savoir si la modification a marchée:
  // if($requete)
  // {
  //   echo("La modification à été correctement effectuée") ;
  // }
  // else
  // {
  //   echo("La modification à échouée") ;
  // }
?>
