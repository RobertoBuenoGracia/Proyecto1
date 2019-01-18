
<?php
    require_once("util/dbManager.php");
    require_once("model/User.php"); 
    require_once("util/verificator.php");
    

    if (isset($_POST['submit'])){
        $msg = $_POST['msg'];
        $usuario = $_POST['username'];
        if($msg != isEmpty($info) && $usuario != isEmpty($info) ){
        $success = TRUE;

        if($success){
            $user = new User();
            $user->user = $usuario;
            $user->msg = $msg; 
            $success = insertUserObject ($user);
            $data = mostrar();
            if($data != null){
                foreach($data as $value){
                    echo '<h1>Name:'.$value['user'].'</h1>';
                    echo '<h1>Message:'.$value['msg'].'</h1>';
                }
            }
        }
    }else{
        echo"eres subnormal o que te pasa no lo dejes vacio";
    }
}
?>