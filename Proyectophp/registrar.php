<?php
    require_once('model/User.php');
    require_once('main.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/main1.css" >
</head>
<body>
<div class="title1">
    <div class="title">
        <h1>Formulario de ingreso</h1>
    
    <div class="text">
    <form action="#" method="POST">
        <h3>Name:</h3>
        <input type="text" name="Name" value="Daniel"><span class="error">*<?php echo $name_err;  ?></span>
        <h3>Surname:</h3>
        <input type="text" name="Surname" value="Daniel"><span class="error">*<?php echo $surname_err;  ?></span>
        <h3>DNI:</h3>
        <input type="text" name="Dni" value="45347807h"><span class="error">*<?php echo $dni_err;  ?></span>
        <h3>Email:</h3>
        <input type="text" name="Email" value="Daniel@ho.com"><span class="error">*<?php echo $email_err;  ?></span>
        <h3>Phone:</h3>
        <input type="text" name="phone" ><span class="error">*<?php echo $phone_err; ?></span>
        <br><button type="submit" name="submit" class="boton">Registrarse</button>
    </form>
    </div>
    </div>
    <div class="fondo">
        <h2 >WEB DE PONCE</h2>
    </div> 
    </div>
</body>
</html>