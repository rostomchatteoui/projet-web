<?PHP
require_once $_SERVER['DOCUMENT_ROOT'].'\projet\core\clientC.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\projet\entities\client.php';
// var_dump($_POST);
if (isset($_POST['idsup'])) {
	// echo "1";
// echo "2";
$clientC=new clientC();
$clientC->supprimerclient($_POST['idsup']);
header('location: table.php' );
// echo "3";


}else{
	echo "vérifier les champs";
}
//*/

?>
