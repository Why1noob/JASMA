<?
include('login.php'); 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	<body>
        <b><a href="javascript:readFile("pass.txt")"></a> </b>
		<section class="loginform cf">  
			<form name="login" method="POST">  
    			<ul>  
        		   	<li><label for="password">Password</label>  
        			<input type="password" name="password" placeholder="password" required></li>  
        			<li>  
        			<input type="submit" value="Login"></li>
                    <span><? echo $error ?></span>  
    			</ul>
			</form>  
		</section>  
	</body>
</html>
