<?php
    function isEmpty ($info){
        return ($info == "" || $info == "&nbsp;" || $info == " ");
    }
    
    function familyfriendliy($value){
        return ($value == "marica" || $value == "hijo de puta" || $value == "puta" || $value == "puto" || $value == "cabron" || $value == "retrasado" || $value == "Abanto" || $value == "Abrazafarolas" || $value == "Adufe" || $value == "Alcornoque" || $value == "Alfeñique" || $value == "Andurriasmo" || $value == "Artabán" || $value == "coño" || $value == "pene" || $value == "polla" || $value == "chupamela" || $value == "rabo" || $value == "atarre" || $value == "baboso" || $value == "barrabás" || $value == "bellaco" || $value == "pichacorta" || $value == "picha" || $value == "barriobajero" || $value == "besugo" || $value == "bobo" || $value == "boba" || $value == "tonto" || $value == "tonta" || $value == "retrasada" || $value == "bocabuzón" || $value == "muerde almuhada" || $value == "bocallanta" || $value == "bocachancla" || $value == "carapijo" || $value == "caracaballo" || $value == "carajote" || $value == "lameculos" || $value == "cuerpoescombro" || $value == "morroestufa" || $value == "pagafantas" || $value == "tolai" || $value == "perroflauta" || $value == "parguela" || $value == "cenutrio" || $value == "melón" || $value == "tocapelotas" );
    }

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