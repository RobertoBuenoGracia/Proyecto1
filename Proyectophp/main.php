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

    $password_error = checkpasswords($_POST['password']);

    if($name_error == 1){
        global $name_err;
        $name_err = '';
    }elseif($name_error == 0)
    {
        global $name_err;
        $name_err = 'No deje el campo vacio';
    }elseif($name_error == 2){
        $name_err = 'El nombre solo puede contener letras';
    }

    if($surname_error == 1){
        global $surname_err;
        $surname_err = '';
    }elseif($surname_error == 0){
        global $surname_err;
        $surname_err = 'No deje el campo vacio';
    }elseif($surname_error == 2){
        $surname_err = 'El apellido solo puede contener letras';
    }

    

    if($email_error == 1){
        global $email_err;
        $email_err = '';
    }elseif($email_error == 0){
        global $email_err;
        $email_err = 'No deje el campo vacio';
    }elseif($email_error == 2){
        $email_err = 'Email que ha incertado incorrecto';
    }

    if($password_error){
        global $password_err;
        $password_err = '';
    }else{
        global $password_err;
        $password_err = 'Recuerde que la contraseña debe tener una logintud minima de 8 digitos , contener numeros y letras';
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
