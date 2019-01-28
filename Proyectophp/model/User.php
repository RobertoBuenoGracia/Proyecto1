<?php
        class User{
            var $user;
            var $msg;
        
            function showInfo(){
                echo '<h1>Nombre: '.$this->user.'</h1>';
                echo '<h1>Apellido: '.$this->msg.'</h1>';;    
            }
    }

    
        class usuario{
            var $name;
            var $surname;
            var $phone;
            var $dni;
            var $email;

            function showInfo(){
                echo '<h1>Nombre: '.$this->name.'</h1>';
                echo '<h1>Apellido: '.$this->surname.'</h1>';
                echo '<h1>phone: '.$this->phone.'</h1>';
                echo '<h1>dni: '.$this->dni.'</h1>';
                echo '<h1>email: '.$this->email.'</h1>';    
            }
        }


?>