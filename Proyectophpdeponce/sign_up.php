<!DOCTYPE HTML>  
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style\main.css">
    <link rel="stylesheet" type="text/css" href="style\hover.css">
</head>

<?php
require_once('main.php');
?>

<body>  
<center>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="sign_up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<div class="jumbotron text-center">
<h2 class="Sing_up">Sign Up Icsitter</h2>
</div>
<form method="post" action="#"> 
  <div class="container">
    <div class="row">
      <div class="col-sm-4"> 
        <br>
        <h4>Nombre</h4><input style="color:black;" type="text" name="name" ><br><?php echo $name_err?>
        <h4>Apellidos:</h4><input style="color:black;" type="text" name="surname" ><br><?php echo $surname_err?>
        <br><br><br>
        <h4>Nombre De Usuario:</h4> <input style="color:black;" type="text" name="username"  >
        <br><br><br>
      </div>
      <div class="col-sm-4">
        <br>
        <h4>E-mail:</h4> <input style="color:black;" type="text" name="email" ><br><?php echo $email_err?>
        <br><br><br>
        <h4>Contraseña:</h4> <input style="color:black;" type="password" name="password"  ><br><?php echo $password_err?>
        <br><br><br>
      </div>
      <div class="col-sm-4">
        <br>
        <h4>Verificar Contraseña:</h4> <input style="color:black;" type="password" name="password2" ><br><?php echo $password2_err?>
        <br><br><br>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <input type="submit" class="btn btn-default" name="submit" value="Sign Up">
      </div>
    </div>
  </div>
</form>
</center>
</body>
</html>