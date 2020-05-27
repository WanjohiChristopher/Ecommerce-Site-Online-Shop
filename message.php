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
    <title>CHAT</title>

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
<body  style="background-color: dodgerblue">
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
<hr>
<hr>
<hr>
<hr>
<hr>
<div class="jumbotron-fluid" id="body"class="good" align="center" >

<center>


<form  action="message.php" method="post"align="left">
    <label for="Email">Email:</label><br>
    <input type="text" name="email"placeholder="chris@gmail.com"autocomplete="off"><br>
    <label for="Email">Phone Number:</label><br>
    <input type="number" name="email"placeholder="+254"autocomplete="off"><br>
    <label for="Email">Gender:</label><br>
    <input type="radio" name="gender"autocomplete="off">Male
    <input type="radio" name="gender"autocomplete="off">Female<br>
    <h3>COMMENT</h3>
    <textarea rows="9" cols="60" >
    </textarea>
    <button type="submit"name="submit" value="submit" class="btn btn-success">SUBMIT</button >
</form>
</center>

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
