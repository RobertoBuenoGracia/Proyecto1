<?php
$santi = 'Dios de todo';
$name_err = $surname_err = $dni_err = $email_err = $phone_err = "";
if (isset($_POST['submit'])){

    $name_error = validate_name($_POST['Name']);
    
    $surname_error = validate_surname($_POST['Surname']);

    $dni_error = validate_dni($_POST["Dni"]);
   
    $email_error = validate_email($_POST['Email']);

    $phone_error = validate_phone($_POST['phone']);

    if($name_error == 1){
        global $name_err;
        $name_err = 'Campo nulo';
    }elseif($name_error == 2){
        global $name_err;
        $name_err = 'Solo letras';
    }

    if($surname_error == 1){
        global $surname_err;
        $surname_err = 'Campo nulo';
    }elseif($surname_error == 2){
        global $surname_err;
        $surname_err = 'Solo letras';
    }

    if($dni_error == 1){
        global $dni_err;
        $dni_err = 'Campo nulo';
    }elseif($dni_error == 2){
        global $dni_err;
        $dni_err = 'formmato incorrecto';
    }

    if($email_error == 1){
        global $email_err;
        $email_err = 'Campo nulo';
    }elseif($email_error == 2){
        global $email_err;
        $email_err = 'formato incorrecto';
    }

    if($phone_error == 1){
        global $phone_err;
        $phone_err = 'Campo nulo';
    }elseif($phone_error == 2){
        global $phone_err;
        $phone_err = 'Solo numero';
    }
    
    if($name_error == 0 && $surname_error == 0 && $dni_error == 0 && $email_error == 0 && $phone_error == 0){
        $user = new User();
        $user->name = $_POST['Name'];
        $user->surname = $_POST['Surname'];
        $user->dni = $_POST["Dni"];
        $user->email = $_POST['Email'];
        $user->phone = $_POST['Email'];
        echo "<style>.title1{opacity: 0;}</style>";
        $user->showInfo();
        if($user->name == "Santi"){
            echo $santi;
        }
    }
}
     
?>
