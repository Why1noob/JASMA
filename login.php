<?
	session_start();
	$error = "";
    $pass=$_POST['password'];
    if($pass == "")
   {
    $error = "Please enter the password";
   }
   else
   {
   	if($pass == A1b37s86GTR52o0)
    {
    	$_SESSION['not_logged']=flase;
        header("location: main.php");
    }
    else
    {
        $error = "Impropper Password";
    }
   }
?>