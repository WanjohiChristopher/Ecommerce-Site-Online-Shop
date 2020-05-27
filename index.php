<?php
session_start();
require_once ('./php/CreateDb.php');
require_once ('./php/component.php');
//create instance of createdB
$database = new CreateDb($dbname="productdb",$tablename="producttb");
if(isset($_POST['add'])){
   // print_r($_POST['product_id']);
if(isset($_SESSION['cart'])) {

    $item_array_id=array_column($_SESSION['cart'],"product_id");
//print_r($item_array_id);

    if(in_array($_POST['product_id'],$item_array_id)){
        echo "<script>alert('product is already added to the cart...!')</script>";
        echo "<script>window.location='index.php'</script>";
    }else{
       $count=count($_SESSION['cart']);
        $item_array=array(
            'product_id'=>$_POST['product_id']
        );
        $_SESSION['cart'][$count]=$item_array;
       // print_r($_SESSION['cart']);
    }
}
else{
    $item_array=array(
            'product_id'=>$_POST['product_id']
    );
    //creating a session variable
        $_SESSION['cart'][0]=$item_array;
        print_r($_SESSION['cart']);

}
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping cart</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="fontawesome-free-5.9.0-web/fontawesome-free-5.9.0-web/css/fontawesome.css"/>
    <link rel="stylesheet" href="fontawesome-free-5.9.0-web/fontawesome-free-5.9.0-web/css/all.css"/>
    <link rel="stylesheet" href="bootstrap/css/flaticon.css"/>
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js"/>
    <link rel="stylesheet" href="bootstrap/js/bootstrap.bundle.min.js"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="bootstrap/css/animate.css"/>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"/>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>
<body>

<?php
require_once ("php/header.php");

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
<div class="hero-slider owl-carousel">
    <div class="hs-item set-bg"><img src="images/1.jpg"></div>
    <div class="hs-item set-bg" ><img src="images/2.jpg"></div>
    <div class="hs-item set-bg" > <img src="images/3.jpg"></div>
</div>

<div class="d-flex justify-content-center">
<div class="spinner-border  text-primaryr"role="status">
    <span class="sr-only">Loading.....</span>
</div>
<div class="spinner-border text-dark"role="status">
    <span class="sr-only">Loading.....</span>
</div>
<div class="spinner-border  text-danger"role="status">
    <span class="sr-only">Loading.....</span>
</div>
<div class="spinner-border  text-info"role="status">
    <span class="sr-only">Loading.....</span>
</div>
<div class="spinner-border  text-warning"role="status">
    <span class="sr-only">Loading.....</span>
</div>
<div class="spinner-border  text-secondary"role="status">
    <span class="sr-only">Loading.....</span>
</div>
<div class="spinner-border  text-success"role="status">
    <span class="sr-only">Loading.....</span>
</div>
<div class="spinner-border  text-white"role="status">
    <span class="sr-only">Loading.....</span>
</div>
</div>
<div class="container">
    <div class="row text-center py-5">
        <?php
        $result=$database->getData();
        while($row=mysqli_fetch_assoc($result)){
            component($row['product_name'],$row['product_price'],$row['product_image'],$row['id']);

        }
        ?>

    </div>
</div>
<?php
if(isset($_POST['logout'])) {
    session_destroy();
    header("location:login.php");
}
?>
<?php
require_once ("Team.php");
?>
<?php
require_once ("footer.php");

?>
<script>
    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").modal();
        });
    });
</script>

</body>
</html>
