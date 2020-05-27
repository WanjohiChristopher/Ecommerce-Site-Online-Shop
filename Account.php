<?php
session_start();
require"config.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="fontawesome-free-5.9.0-web/fontawesome-free-5.9.0-web/css/fontawesome.css"/>
    <link rel="stylesheet" href="fontawesome-free-5.9.0-web/fontawesome-free-5.9.0-web/css/all.css"/>
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js"/>
    <link rel="stylesheet" href="bootstrap/js/bootstrap.bundle.min.js"/>
    <link rel="stylesheet" href="bootstrap/css/flaticon.css"/>
    <link rel="stylesheet" href="bootstrap/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="bootstrap/css/animate.css"/>

    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="messtyle.css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body >
<?php
require_once ('php/header.php');
?>
<hr>
<hr>
<hr>
<hr>
<hr>
<hr>
<hr>
<hr>
<footer id="body">

    <center><h1>ACCOUNT  INFO</h1>
        <img src="./images/wanjohi.jpg" class="photo"/>

    </center>

    <div class="jumbotron">
        <h3>PAYMENT METHODS</h3>
        <img src="./images/card_1.png" alt=""><h6>VISA</h6><br>
        <img src="./images/card_2.png" alt=""><h6>Mastercard</h6><br>
        <img src="./images/card_3.png" alt=""><h6>Maestro</h6>
        <img src="./images/card_4.png" alt=""><h6>Paypal</h6>
        <img src="./images/LIPA.png" alt=""><h6>LIPA NA MPESA</h6>
        <img src="./images/MPESA.png" alt=""><h6>MPESA</h6>
    </div>
    <div class="jumbotron">
<nav class="navbar navbar-expand-lg navbar-light bg-dark">

    <div class="Collapse navbar-collapse" id="navbarCollapse">
        <div class=" navbar-nav">
            <a href="#"class="nav-item nav-link active bg-info">Home</a>
            <a href="#"class="nav-item nav-link bg-secondary">Home</a>
            <a href="#"class="nav-item nav-link bg-primary">Home</a>
            <a href="#"class="nav-item nav-link disabled bg-success" tabindex="-1">repoud</a>
        </div>

    </div>
</nav>
    <hr>

    </div>
    <script>
        $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal();
            });
        });
    </script>
</body>
</html>
