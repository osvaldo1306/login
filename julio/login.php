<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login </title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php


$con=mysqli_connect('localhost','rtrainer_admin','Canela1306.','rtrainer_register') or die('Eror en la coneccion');
if (isset($_POST['email'])){
	$email=$_POST['email'];
	$pass=$_POST['pass'];
        $query = "SELECT * FROM registro WHERE email='$email'
and pass='$pass'";
	$result = mysqli_query($con,$query) or die("error loco");
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['email'] = $email;
	    header("Location: principal.php");
         }else{
	echo "<div class='form'>
<h3>Email/password es incorrecto.</h3>
<br/>Click here to <a href='LG.php'>Login</a></div>";
	}
    }else{
?>
	<form class="login" action="" method="post" name="login">
    <h1 class="login-title">Login</h1>
    <input type="email" class="login-input" name="email" placeholder="Email" autofocus required>
    <input type="password" class="login-input" name="pass" placeholder="Contraseña" required>
    <input type="submit" value="Login" name="submit" class="login-button">
  <p class="login-lost">no tienes cuenta? <a href="client2.php">Registrate</a></p>
  </form>
 
<?php } ?>
</body>
</html>