<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style\main.css">
    <link rel="stylesheet" type="text/css" href="style\hover.css">
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 upper_part">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <center>
                <div class="text ">
                    <span><span id="sd-1" class="hvr-grow"></span></span>
                    <img src="img/logo.gif" alt="Smiley face" height="" width="100%">
                </div>
                </center>
            </div>
            <div class="col-md-6">
                <br><br><br><br><br><br><br><br><br>
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="div-msg upper_part2 draw-border btn-5">
                            <?php 
                            if (isset($_POST['submit'])){
                                echo '<p> - <b>'.$_POST['username'].': </b><br>'.$_POST['msg'].'</p><br>';
                            }
                            else{
                                echo '<p> No messages... </p>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="form-group">
                                <label for="usr">Username:</label>
                                <input type="text" class="form-control btn-5" id="usr" name="username">
                            </div>
                            <div class="form-group">
                                <label for="comment">Comment:</label>
                                <textarea class="form-control btn-5" rows="5" id="comment" name="msg"></textarea>
                                <hr>
                                <button  class="btn btn-5" type="submit" name="submit">SEND</button>  
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="dist/swapdogs.min.js"></script>
<script src="dist/letters.js"></script>
