<?php
    require_once("util/verificator.php");
    require_once("util/dbManager.php");
    require_once("model/User.php");
    if (isset($_POST['submit'])){
        $userName = strtolower ($_POST['username']);
        $msg = $_POST['password'];
        $usuario = $_POST['username'];

        
        

        if($success){
            $user = new User();
            $user->user = $usuario;
            $user->msg = $msg; 
            $user->showInfo();
            $success = insertUserObject ($user);
        }
    }
?>