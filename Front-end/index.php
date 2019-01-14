1
<!DOCTYPE html>  
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style/main.css">
    </head>
    <body>  
       
        <h1>ICSETTERS</h1>
            <div class="panel">
                 <?php 
                    if (isset($_POST['submit'])){
                        echo '<p> - <b>'.$_POST['username'].': </b>'.$_POST['msg'].'</p>';
                    }
                    else{
                        echo '<p> No messages... </p>';
                    }
                ?>
            </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="username" > <b>Type your username: </b></label>
            <br>
            <input type="text" name="username">
            <br>
            <br>
            <textarea rows="4" cols="50" placeholder="Type here your tweet" name="msg"> </textarea>
            <br>
            <button type="submit" name="submit"> SEND </button>
        </form>
    </body>
</html>