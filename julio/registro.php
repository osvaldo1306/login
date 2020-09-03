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
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $direc=$_POST['direc'];
	 $email=$_POST['email'];
    $pass=$_POST['pass'];
    $postal=$_POST['postal'];
    
        $query = "SELECT * FROM registro WHERE email='$email'
and pass='$pass'";
   $sql="INSERT INTO registro 
    VALUES(null, '$nombre', '$apellido', '$pass',
    '$direc','$email', '$postal' )";
    $res=mysqli_query($con,$sql) or die ('Error en el query database');

    $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='principal.php'>Login</a></div>";
        }
    }else{
    //mysqli_close($con);
}
   ?>
    
    <body >
<form class="login" action="" method="post">
    <h1 class="login-title">Registro </h1>
		<input type="text" class="login-input" name="nombre" placeholder="nombre" required />
    <input type="text" class="login-input" name="apellido" placeholder="apellido" required />
    <input type="text" class="login-input" name="email" placeholder="Email Adress" required>
    <input type="text" class="login-input" name="direc" placeholder="Direcci贸n" required />
    <input type="password" class="login-input" name="pass" placeholder="Password" required>
    <input type="text" class="login-input" name="postal" placeholder="Codigo Postal" required />
    <input type="submit" name="submit" value="Registro" class="login-button">
  <p class="login-lost">ya tienes cuenta? <a href="Lg.php">Login Here</a></p>
  </form>
 
  </form>
 

</body>
</html>