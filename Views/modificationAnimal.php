<?PHP
include '../Controller/config.php';
include '../Model/animal.php';
include '../Controller/animalC.php';


if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['type']) and isset($_POST['race']) and isset($_POST['poids']) and isset($_POST['idClient']) )
{

	$id = $_POST['id'];
	$nom = $_POST['nom'];
	$type = $_POST['type'];
	$race = $_POST['race'];
	$poids = $_POST['poids'];
	$idClient = $_POST['idClient'];

	$animalC=new animalC();
	$animalC->modifierAnimal($id,$nom, $type, $race, $poids, $idClient);

	header("Location:index.php");
}
else{
	echo "vérifier les champs";
}
//*/

?>
