<?
	session_start();
	$_SESSION['Last_Activity'] = time();
	$error = "";
    $pass=$_POST['password'];
    if($pass == "")
   {
    $error = "";
   }
   else
   {
   	if($pass == A1b37s86GTR52o0)
    {
        header("location: main.php");
        $_SESSION['logged']=1;
    }
    else
    {
        $error = "Impropper Password";
    }
   }
?>