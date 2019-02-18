<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="http://www.wikipedia.org/favicon.ico" />
        <meta charset="utf-8">
        <title>Template Project</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style/main.css">

    </head>

    
    <body>
        <div class="jumbotron text-center">
            <h1> <i class="glyphicon glyphicon-envelope"> </i> ICSSENGER </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-primary">
                            <div class="panel-heading text-center">
                                <i class="glyphicon glyphicon-user"> </i>
                                 <input id="user" value="username" type="text" class="username" >
                            </div>
                            <div class="panel-body" id="panel">
                                
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <input class="form-control" id="msg" placeholder="[type something here...]">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <button class="btn btn-success form-control" onclick="getCountryISO()"> write </button>
                                    </div>
                                </div>
                            </div>
                    </div>          
            </div>
        </div>
    </body>
</html>

<script>
function getCountryISO(){
    var username=document.getElementById("user").value;
    var mensajito=document.getElementById("msg").value;
    console.log("jejeje");
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
            console.log("jejeje2");
            document.getElementById("panel").innerHTML = this.responseText;
            
        }
    };
    xhttp.open("GET", "main.php?username="+ username+"&mensajito="+mensajito, true);
    xhttp.send();   
}




</script>
