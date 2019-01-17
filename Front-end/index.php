<!DOCTYPE html>  
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style\main.css">
        <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet"> 
    </head>
    <body> 
        <div class="logo jumbotron text-center">
            ICSETTER
        </div> 
            <div class="container">
                <div class="panel col-sm-12">
                    <?php 
                        if (isset($_POST['submit'])){
                            echo '<p> - <b>'.$_POST['username'].': </b>'.$_POST['msg'].'</p>';
                        }
                        else{
                            echo '<p> No messages... </p>';
                        }
                    ?>
                </div>
            </div>   
        <div class="container"> 
            <div class="col-sm-12">        
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <label for="username" > <b>INDIQUE SU USUARIO:</b></label>
                    <br>
                    <input type="text" name="username">
                    <br>
                    <br>
                    <textarea rows="4" cols="50" placeholder="Type here your tweet" name="msg"> </textarea>
                    <br>
                    <button type="submit" name="submit"> SEND </button>
                </form>
            </div>
        </div>
    </body>
</html>