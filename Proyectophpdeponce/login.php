<?php
session_start(); 
 ?>
<!DOCTYPE HTML>  
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style\main.css">
    <link rel="stylesheet" type="text/css" href="style\hover.css">
</head>
<?php
require_once('util/dbManager.php');


if(isset($_POST['submit'])){
  $username1 = $_POST['username1'];
  $password1 = $_POST['password1'];
  $data = login($username1, $password1);
  if($data > 0){
    echo "perfecto";
    $_SESSION["usuario"] = mostrar_id($username1);
    header('Location: registrado.php');
    exit();
  }else{
    echo "usuario o contraseña erroneo";
  }
}
?>
<body>  
<center>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="sign_up.php" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<div class="jumbotron text-center">
<h2 class="login">Login Icsitter</h2>
</div>
<form method="post" action="#"> 
  <div class="container">
    <div class="row">
      <div class="col-sm-12"> 
        <br>
        <h4>Nombre de Usuario:</h4> <input style="color:black;" type="text" name="username1">
        <br><br><br>
        <h4>Contraseña:</h4> <input style="color:black;" type="password" name="password1" >
        <br><br><br>
        <input  type="submit" class="btn btn-default" name="submit" value="Login">
      </div>
    </div> 
  </div>
</form>
</center>
</body>
</html>