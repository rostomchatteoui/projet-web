<?PHP

include '../Controller/config.php';
include '../Controller/animalC.php';
include '../Model/animal.php';

// var_dump($_POST);
if (isset($_POST['idsup'])) {
	// echo "1";
// echo "2";
$animalC=new animalC();
$animalC->supprimerAnimal($_POST['idsup']);
header('location: animaux.php' );
// echo "3";


}else{
	echo "vérifier les champs";
}
//*/

?>
