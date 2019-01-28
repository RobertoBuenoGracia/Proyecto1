<?php
    
    function insertUserObject (usuario $usuario){
        try{
            $servername = "localhost";
            $username   = "root";
            $password   = "";
            $db         = 'copia_twitter';
            $conn       = new PDO("mysql:host=$servername;dbname=$db", $username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO usuario (user_names, email, passwords, name, surname)VALUES ('$usuario->username', '$usuario->email', '$usuario->password', '$usuario->name', '$usuario->surname');";
            $conn->exec($sql);
            return true;
        }catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
            return false;
        }
            $conn = null;
    }  

    function login ($username1, $password1){
        try{
            $servername = "localhost";
            $username   = "root";
            $password   = "";
            $db         = 'copia_twitter';
            $conn       = new PDO("mysql:host=$servername;dbname=$db", $username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO messages (user_id, msg)VALUES ('$user->user', '$user->msg');";
            $conn->exec($sql);
            return true;
        }catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
            return false;
        }
            $conn = null;
    }
    
    function insertmsgObject (User $user){
        try{
            $servername = "localhost";
            $username   = "root";
            $password   = "";
            $db         = 'copia_twitter';
            $conn       = new PDO("mysql:host=$servername;dbname=$db", $username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO messages (user_id, msg)VALUES ('$user->user', '$user->msg');";
            $conn->exec($sql);
            return true;
        }catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
            return false;
        }
            $conn = null;
    }
     
    function mostrar(){
        try{
            $servername = "localhost";
            $username   = "root";
            $password   = "";
            $db         = 'copia_twitter';
            $conn       = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = "Select user_id, msg from messages";
            $result = $conn->query($stmt);
            $conn->exec($stmt);
            return $result;
        }catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
            return false;
        }
            $conn = null;
    }  
?>