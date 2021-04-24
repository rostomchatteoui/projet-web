<?PHP
require_once $_SERVER['DOCUMENT_ROOT'].'\projet\core\clientC.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\projet\entities\client.php';
// var_dump($_POST);
if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['username']) and isset($_POST['adresse']) and isset($_POST['tel']) and isset($_POST['password'])) {
	// echo "1";
	$d=date("Y-m-j");
$client1=new client($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['username'],$_POST['adresse'],
	$_POST['tel'],$_POST['password'],$d,"client");
// echo "2";
$clientC=new clientC();
$clientC->ajouterclient($client1);
header('location: index.php' );
// echo "3";
if (clientC->$client1)

include "../Nexmo/src/NexmoMessage.php" ;




/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('11e5c3a7','lEgEYjOjsMIMtt5U');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message.
	$info = $nexmo_sms->sendText( '21653572801', 'Wapi', 'Votre commande a été Validée ' );

	// Step 3: Display an overview of the message


}
else{
	echo "vérifier les champs";
}
//*/

?>
