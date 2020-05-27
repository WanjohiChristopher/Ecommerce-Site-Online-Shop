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
    <title>Categories</title>
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
<div class="container">
    <!-- Trigger the modal with a button -->
    <button type="button" class="bg-primary btn-lg" id="myBtn">Login</button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                </div>

                <div class="modal-footer">
                    <div style="alignment: left" >

                        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-logout"></span> LOGOUT</button><br>
                    </div>
                    <div style="alignment: left">
                        Not a member?<br>
                        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-user"></span> REGISTER</button><br>
                        <br>
                    </div>
                    <p>Forgot <a href="#">Password?</a></p>
                </div>
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

<hr>
<button type="button" class=" btn btn-primary" data-toggle="modal"data-target="#staticBackdrop">ACCOUNT</button>
<div class="modal fade" id="staticBackdrop"data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <a class="dropdown-item position-absolute"href="Register.php"><span class="glyphicon glyphicon-user"></span> Register</a>
                    <a class="dropdown-item position-absolute"href="login.php"><span class="glyphicon glyphicon-login"></span> Login</a>
                    <a class="dropdown-item position-absolute"href="Register.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                </div>
            </div>
        </div>
    </div>
<div class="dropdown-menu">
    <a class="dropdown-item position-absolute"href="#"><span class="glyphicon glyphicon-user"></span> Register</a>
    <a class="dropdown-item position-absolute"href="#"><span class="glyphicon glyphicon-login"></span> Login</a>
    <a class="dropdown-item position-absolute"href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
</div>
<div class="btn-group dropup ">
    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false" >ACCOUNTS

    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item position-absolute"href="Register.php"><span class=""></span> Register</a>
        <a class="dropdown-item position-absolute"href="login.php"><span class=""></span> Login</a>
        <a class="dropdown-item position-absolute"href="Register.php"><span class=""></span> Logout</a>
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
