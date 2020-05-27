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
    <title>CHECKOUT PAGE</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="fontawesome-free-5.9.0-web/fontawesome-free-5.9.0-web/css/fontawesome.css"/>
    <link rel="stylesheet" href="fontawesome-free-5.9.0-web/fontawesome-free-5.9.0-web/css/all.css"/>
    <link rel="stylesheet" href="bootstrap/css/flaticon.css"/>
    <link rel="stylesheet" href="/bootstrap/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="/bootstrap/css/animate.css"/>

    <link rel="stylesheet" href="messtyle.css"/>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
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
<div class="container">
<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <h6>CHECKOUT</h6>
            <input type="checkbox" name="ADDRESS" class="btn-success">1.ADDRESS DETAILS
            <button type="button" onclick="true" class="btn-danger"><a aria-checked="true" href="login.php" >CHANGE</button><br>
            <?php
            echo $_SESSION['username'];

            ?>
            <hr>
        </div>
    </div>
</div>
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
