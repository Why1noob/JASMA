<?
$isLogged = $_SESSION['not_logged'];
if(isLogged){
	header('location: index.php');
}
?>