<?PHP
include '../Controller/config.php';
include '../Model/client.php';
include '../Controller/clientC.php';
// var_dump($_POST);
if (isset($_POST['idsup'])) {
	// echo "1";
// echo "2";
$clientC=new clientC();
$clientC->supprimerclient($_POST['idsup']);
header('location: index.php' );
// echo "3";


}else{
	echo "vérifier les champs";
}
//*/

?>
