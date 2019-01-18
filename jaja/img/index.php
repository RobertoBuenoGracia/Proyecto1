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
                        
                        <div class="div-msg upper_part2 draw-border btn-5"></div>
                    </div>
                    <div class="col-md-4">
                            <div class="form-group">
                                    <label for="usr">Username:</label>
                                    <input type="text" class="form-control btn-5" id="usr">
                                  </div>
                                  
                                  <div class="form-group">
                                        <label for="comment">Comment:</label>
                                        <textarea class="form-control btn-5" rows="5" id="comment"></textarea>
                                        <hr>
                                        <button  class="btn btn-5 ">SEND</button>  
                                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>





</body>

</html>
<script src="dist/swapdogs.min.js"></script>
<script>
    var sd = new SwapDogs(
        document.getElementById('sd-1'), {
            autoInit: true,
            words: [".:ICCSITTER:.", "WELCOME!", "%S$Q$L_ERROR$", "//error$$"],
            letters: 'абвгдеёзжклмнопрст',
            interval: 4000,
            interval2: 50
        }
    );

</script>
