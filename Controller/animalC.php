
 <?php
 include 'config.php';

 class animalC
 {
	function ajouterAnimal($animal)
	{
		$sql="insert into animal (
			nom, type, race, poids, idClient) values (:nom, :type, :race, :poids, :idClient)";
		$db = config::getConnexion();
		try
		{
        $req=$db->prepare($sql);

        //$id=$client->getid();
        $nom=$animal->getnom();
        $type=$animal->getType();
        $race=$animal->getRace();
        $poids=$animal->getPoids();
        $idClient=$animal->getIdClient();

		//$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
    $req->bindValue(':type',$type);
    $req->bindValue(':race',$race);
    $req->bindValue(':poids',$poids);
    $req->bindValue(':idClient',$idClient);

    $req->execute();
  }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

		function afficherAnimal()
	{
		//$sql="SElECT * From client inner join formationphp.client a on e.id= a.id";
		$sql="SELECT * From animal";
		$db = config::getConnexion();
		try
		{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

  function afficherAnimauxClient($idClient)
{
  //$sql="SElECT * From client inner join formationphp.client a on e.id= a.id";
  $sql="SELECT * From animal where idClient=".$idClient;
  $db = config::getConnexion();
  try
  {
  $liste=$db->query($sql);
  return $liste;
  }
      catch (Exception $e)
      {
          die('Erreur: '.$e->getMessage());
      }
}

  function supprimerAnimal($id)
	{
		$sql="DELETE FROM animal where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

function modifierAnimal($id,$nom, $type, $race, $poids, $idClient)
	{
		$db = config::getConnexion();
		$sql="UPDATE animal SET nom='".$nom."',type='".$type."',race='".$race."',poids='".$poids."',idClient='".$idClient."'  where id=".$id.";";
		// (,,'".$username."','".$adresse."','".$tel."','".$password."','".$nom."')where id=".$id.0;

		try
		{
        $req=$db->prepare($sql);

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}
  function trierD(){
		$sql="SELECT * from animal order by nom desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
  function trierA(){
		$sql="SELECT * from animal order by nom asc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
  function getAllAnimals($keywords){
		$sql="SELECT * FROM animal WHERE CONCAT(`id`,`nom`,`poids`,`race`,`type`,`idClient`) LIKE '%".$keywords."%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

}
?>
