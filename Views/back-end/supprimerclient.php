<?PHP

include '../../Controller/clientC.php';
include '../../Model/client.php';

// var_dump($_POST);
if (isset($_POST['idsup'])) {
	// echo "1";
// echo "2";
$clientC=new clientC();
$clientC->supprimerclient($_POST['idsup']);
header('location: table2.php' );
// echo "3";


}else{
	echo "vérifier les champs";
}
//*/

?>
