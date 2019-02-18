<?php
require_once ('dbmanager.php');
if(isset($_GET["mensajito"]) && isset($_GET["username"])){
    $mensajito=$_GET["mensajito"];
    $username =$_GET["username"];
    insert($mensajito, $username);
}

$data=showMe();
foreach($data as $value){
    echo $value["name"];
    echo"<br>";
    echo $value["msg"];
    echo"<br>";
}

?>