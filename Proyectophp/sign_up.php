<!DOCTYPE HTML>  
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style\main.css">
    <link rel="stylesheet" type="text/css" href="style\hover.css">
</head>
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
<h2>Sign Up Icsitter</h2>
</div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <div class="container">
    <div class="row">
      <div class="col-sm-4"> 
        <br>
        <h4>Nombre</h4><input type="text" name="name"><h4>Apellidos:</h4><input type="text" name="surname">
        <br><br><br>
        <h4>Nombre De Usuario:</h4> <input type="text" name="username" >
        <br><br><br>
      </div>
      <div class="col-sm-4">
        <br>
        <h4>E-mail:</h4> <input type="text" name="email">
        <br><br><br>
        <h4>Contraseña:</h4> <input type="text" name="password" >
        <br><br><br>
      </div>
      <div class="col-sm-4">
        <br>
        <h4>Verificar Contraseña:</h4> <input type="text" name="repeat_password">
        <br><br><br>
        <h4>- Fecha de nacimiento:</h4> <input type="text" name="birthdate" placeholder="DD/MM/YYYY">
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