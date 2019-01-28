<?php
require_once('util/verificator.php');
require_once("util/dbManager.php");
require_once("model/User.php"); 
$name_err = $surname_err = $dni_err = $email_err = $password_err = $password2_err = "";
if (isset($_POST['submit'])){

    $password = $_POST['password'];

    $password2 = $_POST['password2'];

    $name = $_POST['name'];

    $surname = $_POST['surname'];

    $username = $_POST['username'];

    $email = $_POST['email'];

    $name_error = validate_name($_POST['name']);
    
    $surname_error = validate_surname($_POST['surname']);
   
    $email_error = validate_email($_POST['email']);

    $phone_error = checkpasswords($_POST['password']);

    if($name_error){
        global $name_err;
        $name_err = '';
    }else
    {
        global $name_err;
        $name_err = 'Insercion erronea de tu nombre';
    }

    if($surname_error){
        global $surname_err;
        $surname_err = '';
    }else{
        global $surname_err;
        $surname_err = 'Insercion erronea de tu apellido';
    }

    

    if($email_error){
        global $email_err;
        $email_err = '';
    }else{
        global $email_err;
        $email_err = 'Insercion erronea de tu email';
    }

    if($phone_error){
        global $password_err;
        $password_err = '';
    }else{
        global $password_err;
        $password_err = 'Insercion erronea de tu password';
    }
    
    if($password == $password2){
        global $password2_err;
        $password2_err = "";
    }else{
        global $password2_err;
        $password2_err = "No coincide la contraseña";
    }
     if($password2_err == "" && $password_err == "" && $email_err == "" && $surname_err == "" && $name_err == "" ){
        $usuario = new usuario();
        $usuario->name = $name;
        $usuario->surname = $surname;
        $usuario->password = $password;
        $usuario->username = $username;
        $usuario->email = $email;
        $success = insertUserObject ($usuario);
        header('Location: login.php');
     }
}
     
?>
