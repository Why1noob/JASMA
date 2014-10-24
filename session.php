<?
session_start();
$_SESSION['Last_Activity'] = time();
$isLogged = $_SESSION['logged'];
	if(!isset($isLogged))
{
	header('location: index.php');
}
if(isset($_SESSION['Last_Activity']) && (time() - $_SESSION['Last_Activity'] > 120)){
	session_unset();
	session_destroy();
}
?>