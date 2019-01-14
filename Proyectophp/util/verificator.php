<?php 
    function checkpasswords ($password){
        /* RETORNA verdadero si se cumplen las condiciones de cada función */
        if (checkLength ($password) && 
            checkNumbers ($password) &&
            checkLetters ($password) &&
            checkSpecialCharacters ($password)){
                return true;
            }
                return false;
    }

    function checkLength ($password){
        /* RETORNA verdadero si la longitud de la contraseña es mayor que 8*/
        if(strlen($password) > 8){
            return True;
        }else{
            return false;
        }
    }

    function checkNumbers ($password){
        /* RETORNA verdadero si la contraseña contiene números (dígitos) */
        if(preg_match('/[0-9]/i',$password)){
            return true;
        }else{
            return false;
        }
    }

    function checkLetters ($password){
        /* RETORNA verdadero si la contraseña tiene caracteres (letras) */
        if(preg_match('/[a-zA-Z ]/', $password)){
            return true;
        }
        else{
            return false;
        }
    }

    function checkSpecialCharacters ($password){
        /* RETORNA verdadero si la contraseña contiene caracteres especiales (*-/+$) */
        if(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $password)){
            return true;
        }
        else{
            return false;
        }
    }

?>