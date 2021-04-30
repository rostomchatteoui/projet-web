<?PHP
require_once $_SERVER['DOCUMENT_ROOT'].'\projet\core\clientC.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\projet\entities\client.php';


if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['username']) and isset($_POST['adresse']) and isset($_POST['tel']) and isset($_POST['password']))
{
	session_start();
	session_destroy();

	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$adresse=$_POST['adresse'];
	$tel=$_POST['tel'];
	$password=$_POST['password'];

	$d=date("Y-m-d H:i:s");
	$client1=new client(null,$nom,$prenom,$email,$username,$adresse,$tel,$password,$d,"client");
	$clientC=new clientC();
	$clientC->ajouterclient($client1);
	$user = $client1->checklogin($username,$password);
// if ($client1)
// {
// 		include "../Nexmo/src/NexmoMessage.php" ;
// 	/** To send a text message.*/
// 		// Step 1: Declare new NexmoMessage.
// 		$nexmo_sms = new NexmoMessage('11e5c3a7','lEgEYjOjsMIMtt5U');
// 		// Step 2: Use sendText( $to, $from, $message ) method to send a message.
// 	$info = $nexmo_sms->sendText( '21653572801', 'Wapi', 'Votre commande a été Validée ' );
// }
	// Step 3: Display an overview of the message

	session_start();
	$_SESSION['id']=$user['id'];
	$_SESSION['nom']=$user['nom'];
	$_SESSION['prenom']=$user['prenom'];
	$_SESSION['email']=$user['email'];
	$_SESSION['username']=$user['username'];
	$_SESSION['adresse']=$user['adresse'];
	$_SESSION['tel']=$user['tel'];
	$_SESSION['password']=$user['password'];
	$_SESSION['role']=$user['role'];

	header("Location:index.php");
}
else{
	echo "vérifier les champs";
}
//*/

?>
