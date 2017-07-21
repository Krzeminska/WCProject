<?php 
header('Access-Control-Allow-Origin: http://localhost');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Toilet Manager</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <h1>
            Welcome in our Toilet Manager<br>
            <small><a href="#" id="get-data">Get JSON data from Czarek</a></small>
        </h1>


        <div class="row">
        <div class="case man col-sm-12 col-md-6 col-lg-3">
                <div class="door open man">
                    <div class="sign sign-man"></div>
                </div>
            </div>
            <div class="case man col-sm-12 col-md-6 col-lg-3">
                <div class="door open man">
                    <div class="sign sign-man"></div>
                </div>
            </div>

            <div class="case woman col-sm-12 col-md-6 col-lg-3">
                <div class="door open woman">
                    <div class="sign sign-woman"></div>
                </div>
            </div>
            <div class="case woman col-sm-12 col-md-6 col-lg-3">
                <div class="door open woman">
                    <div class="sign sign-woman"></div>
                </div>
            </div>
        </div>

        <div class="footer"></div>

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <script src="js/notify.js" type="text/javascript"></script>
    </div>
</body>
</html>