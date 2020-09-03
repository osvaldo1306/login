<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>datos </title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
$con=mysqli_connect('localhost','rtrainer_admin','Canela1306.','rtrainer_register') or die('Eror en la coneccion');
if (isset($_POST['email'])){
    $email=$_POST['email'];
    $talla=$_POST['talla'];
    $peso=$_POST['peso'];
	 $cel=$_POST['celular'];
   
    
        $query = "SELECT * FROM relevante WHERE email='$email'
and talla='$talla'";
   $sql="INSERT INTO relevante
    VALUES(null, '$email', '$talla', '$peso',
    '$cel' )";
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
    <h1 class="login-title">Registro de datos </h1>
    <input type="text" class="login-input" name="email" placeholder="Email Adress" required>
    <input type="text" class="login-input" name="talla" placeholder="talla" required />
    <input type="text" class="login-input" name="peso" placeholder="peso" required>
    <input type="text" class="login-input" name="celular" placeholder="Celular" required />
    <input type="submit" name="submit" value="actualizado" class="login-button">
  <p class="login-lost">Actualizado <a href="principal">Login Here</a></p>
  </form>
 
  </form>
 

</body>
</html>