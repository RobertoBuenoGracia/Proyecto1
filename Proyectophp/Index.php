<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<?php
require_once("main.php");
require_once("util/dbManager.php");
require_once("model/User.php");  
?>
<body>
<div class="container">
  <form action="#" method="$_POST">
    <div class="form-group">
      <input type="text" class="form-control" id="username">
      <input type="text" class="form-control" id="msg">
      <button type="submit" name="submit" class="btn btn-primary">Submmit</button>
    </div>
    </form>
</div>
</body>
</html>