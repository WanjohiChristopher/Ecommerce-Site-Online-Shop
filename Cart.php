<?php
session_start();
require_once ("php/CreateDb.php");
require_once ("php/component.php");
$db=new CreateDb("productdb","producttb");

if(isset($_POST['remove'])){
    if($_GET['action']=='remove'){
        foreach ($_SESSION['cart']as $key=>$value){
            if($value["product_id"]==$_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo"<script>alert('PRODUCT HAS BEEN REMOVED...!')</script>";
                echo"<script>window.location='Cart.php'</script>";
            }
        }
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
    <title>Cart</title>
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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

</head>
<body class="bg-light">
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
<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="fas fa-shopping-cart">
                    <h6>My ORDERS</h6>
                <hr>
                <?php
                $total=0;
               if(isset($_SESSION['cart'])){
                   $product_id=array_column($_SESSION['cart'],'product_id');
                   $result=$db->getData();
                   while($row=mysqli_fetch_assoc($result)){
                       foreach ($product_id as $id){
                           if($row['id']==$id){

                               cartElement($row['product_image'],$row['product_name'],$row['product_price'],$row['id']);
                           $total=$total + (int)$row['product_price'];
                           }

                       }
                   }
               }else{
                   echo "<h5>Cart is Empty</h5>";
               }
                ?>
            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
            <div class="pt-4">
                <h6>PRICE DETAILS</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php

                        if(isset($_SESSION['cart'])){
                            $count=count($_SESSION['cart']);
                            echo "<h6>Price($count items)</h6>";
                        }else{
                            echo "<h6>Price(0 items)</h6>";
                        }
                        ?>
                        <h6>Delivery Charges </h6>
                        <hr>
                        <h6>Amount Payable</h6>
                    </div>
                    <div class="col-md-6">
                        <h6>$<?php
                            echo $total;
                            ?></h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6>$<?php
                            echo $total;
                            ?></h6>
                    </div>
                </div>
            </div>
            <button type="button"name="continue"  class="btn-outline-success" ><a href="index.php">CONTINUE SHOPPING</a></button>
            <button type="button"name="continue"  class="btn-danger" ><a href="checkout.php">PROCEED TO CHECKOUT</a></button>
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
