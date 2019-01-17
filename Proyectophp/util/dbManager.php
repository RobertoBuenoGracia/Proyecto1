<?php
    
    function insertUserObject (User $user){
        try{
            $servername = "localhost";
            $username   = "root";
            $password   = "";
            $db         = 'copia_twitter';
            $conn       = new PDO("mysql:host=$servername;dbname=$db", $username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO information (user, msg)VALUES ('$user->user', '$user->msg');";
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
            $stmt = $conn->prepare("Select user, msg from information" );
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
                echo $v;
            }
            return true;
        }catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
            return false;
        }
            $conn = null;
    }  
?>