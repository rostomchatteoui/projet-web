<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'\projet\core\clientC.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'\projet\entities\client.php';

  $id=$_POST['id'];
  //récupération des valeurs des champs:
  //nom:
  $nom = $_POST["nom"] ;
  //prenom:
  $prenom = $_POST["prenom"] ;
  //adresse:
  $username = $_POST["username"] ;
  //code postal:
  $adresse = $_POST["adresse"] ;
  //numéro de téléphone:
  $tel = $_POST["tel"] ;
  //récupération de l'identifiant de la personne:
  $email = $_POST["email"] ;
  $password=$_POST['password'];

  $clientC=new clientC();
  $clientC->modifierclient($id,$nom,$prenom,$username,$adresse,$tel,$email,$password);

  session_start();
  $_SESSION['id']=$id;
  $_SESSION['nom']=$nom;
  $_SESSION['prenom']=$prenom;
  $_SESSION['email']=$email;
  $_SESSION['username']=$username;
  $_SESSION['adresse']=$adresse;
  $_SESSION['tel']=$tel;
  $_SESSION['password']=$password;

  header("Location:profile.php");
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
