<?php
        class User{
            var $user;
            var $msg;
        
            function showInfo(){
                echo '<h1>Nombre: '.$this->user.'</h1>';
                echo '<h1>Apellido: '.$this->msg.'</h1>';;    
            }
    }
?>