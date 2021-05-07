<?PHP
include '../Controller/config.php';
include '../Model/animal.php';
include '../Controller/animalC.php';


if (isset($_POST['nom']) and isset($_POST['type']) and isset($_POST['race']) and isset($_POST['poids']) and isset($_POST['idClient']) )
{


	$nom = $_POST['nom'];
	$type = $_POST['type'];
	$race = $_POST['race'];
	$poids = $_POST['poids'];
	$idClient = $_POST['idClient'];

	$animal1=new animal(null,$nom,$poids,$type,$race,$idClient);
	$animalC=new animalC();
	$animalC->modifierAnimal($animal1);

	header("Location:index.php");
}
else{
	echo "vérifier les champs";
}
//*/

?>
