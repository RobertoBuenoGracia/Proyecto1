<?php
    
    if (isset($_POST['submit'])){
        $userName = strtolower ($_POST['username']);
        $msg = $_POST['password'];
        $usuario = $_POST['username'];
        $success = TRUE;
        
        

        if($success){
            $user = new User();
            $user->user = $usuario;
            $user->msg = $msg; 
            $user->showInfo();
            $success = insertUserObject ($user);
        }
    }
?>