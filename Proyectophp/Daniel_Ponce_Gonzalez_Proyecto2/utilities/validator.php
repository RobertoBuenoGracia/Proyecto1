<?php

    /*
        0 - OK
        1 - Empty
        2 - Numbers Found
    */

    function validate_name($name){
        if(empty($name)){
            return 1;
        }
        elseif(preg_match('/^[a-zA-Z ]*$/', $name)){
            return 0;
        }
        else{
            return 2;
        }
    }

    function validate_surname($surname){
        if(empty($surname)){
            return 1;
        }elseif(preg_match('/^[a-zA-Z ]*$/',$surname)){
            return 0;
        }else{
            return 2;
        }
    }

    function validate_dni($Dni){
        if(empty($Dni)){
            return 1;
        }elseif(preg_match('/^([0-9]{7,8}[A-Z])$/i',$Dni)){
            return 0;
        }else{
            return 2;
        }
    }

    function validate_email($Email){
        if(empty($Email)){
            return 1;
        }elseif(filter_var($Email, FILTER_VALIDATE_EMAIL)){
            return 0;
        }else{
            return 2;
          
        }
    }

    function validate_phone($phone){
        if(empty($phone)){
            return 1;
        }elseif(preg_match('/^[0-9]*$/i',$phone)){
            return 0;
        }else{
            return 2;
        }
    }
?>