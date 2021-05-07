<?PHP
include '../Controller/config.php';
include '../Controller/clientC.php';

if (isset($_POST['username']) and isset($_POST['password'])) {

	$clientC = new clientC();
	$user=$clientC->checklogin($_POST['username'],$_POST['password']);
	if($user)
	{
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
	else {
		echo "<script>
alert('Verifiez vos données!');
window.location.href='index.php';
</script>";
	}
}
else {
	echo "<script>
alert('champs vides.');
window.location.href='index.php';
</script>";
}
?>
