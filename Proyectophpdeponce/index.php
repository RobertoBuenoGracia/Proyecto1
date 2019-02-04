<?php
session_start(); 
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style\main.css">
    <link rel="stylesheet" type="text/css" href="style\hover.css">
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
</head>
<?php
    require_once("util/dbManager.php");
    require_once("model/User.php"); 
    require_once("util/verificator.php");
    
    $data = mostrar();

?>
    <body>
        <div class="col-md-12 upper_part">
        </div>
        

        <div class="container">
        <div class="row">
            </div>
            <div class="row">
                <div class="col-sm-8 text-center">
                <div class="text ">
                    <span><span id="sd-1" class="hvr-grow"></span></span>
                    
                </div>
                    
                </div>
                <div class="col-sm-4 text-center">
                <img src="img/logo.gif" alt="Smiley face" height="" width="100%">
                    
            </div>
        </div>
</div>





        <div class="container">
        <div class="row">
            </div>
            <div class="row">
                <div class="col-sm-8 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="div-msg div-scroll upper_part2 btn-5" >
                                    <?php
                                        
                                            foreach($data as $value){
                                                echo '<h3 class="Felix">&nbsp&nbsp'.$value['user_names'].':</h3>';
                                                echo '<h5 class="Felix" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="Rober">'.$value['msg'].'</span></h5>';
                                            } 
                                    
                                    ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <h1> FORM </h1>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                <div class="form-group">
                                    <div class="div-scroll  btn-5" >
                                        <a href="login.php"><span class="glyphicon glyphicon-user"></span> Login/</a><a href="sign_up.php"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a>
                                    </div>
                                </div> 
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<script src="dist/swapdogs.min.js"></script>
<script src="dist/letters.js"></script>
