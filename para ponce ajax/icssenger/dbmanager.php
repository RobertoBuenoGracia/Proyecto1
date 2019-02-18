<?php

    
    
    function insert($username,$mensajito){
        
        $servername = "localhost";
        $username1 = "root";
        $password = "";
        $dbname = 'wonka2'; 
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username1, $password);
        $smg= $pdo->query("INSERT INTO usuario(name, msg) VALUES('$username', '$mensajito')");
        
    }
     
    function showMe(){
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = 'wonka2'; 
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $data= $pdo->query("SELECT * FROM usuario")->fetchAll();
        return $data;
        
    }



?>