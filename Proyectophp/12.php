<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
require_once("main.php");
require_once("util/dbManager.php");
require_once("model/User.php");  
?>

<body>
  <form action="#" method="POST">
    <div class="form-group">
      <input type="text" name="username">
      <input type="text" name="msg">
      <button type="submit" name="submit">Submmit</button>
    </div>
    </form>
</body>
</html>