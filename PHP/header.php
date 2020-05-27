<?php

require_once ("php/CreateDb.php");
require_once ("php/component.php");
$database = new CreateDb($dbname="productdb",$tablename="producttb");
$output= '';
// collect data

if(isset($_POST['search'])){
    $searchq =$_POST['search'];
    $searchq = preg_replace("#[^0-19a-z]#i","",$searchq);


    $query = "SELECT * FROM producttb WHERE product_name LIKE '%$searchq%' OR product_price LIKE '%$searchq%'" or die("could not search");
    $counter= mysqli_num_rows($query);
    if($counter == 0){
        $output ='There was no search results found';
    }else{
       while ($row = mysqli_fetch_array($query)) {
           $product_name = $row['product_name'];
           $product_price = $row['product_price'];

           $output .='<div>'.$product_name.' '.$product_price.'</div>';
       }
    }
}

?>
<header id="header">


    <nav class="navbar  fixed-top navbar navbar-expand-sm navbar-light bg-primary">
        <a href="index.php" class="navbar-brand ">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket " ></i>Kreezy Shop
            </h3>

        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler=icon"></span>
        </button>




                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php" class="bg-white"><i class="fas fa-home"></i>Home</a></li>
                    <li><a href="categories.php" class="bg-primary"><i class="fas fa-check-square"></i>Categories</a></li>
                    <li><a href="message.php" class="bg-primary"><i class="fas fa-facebook-messenger"></i>Message</a></li>

                    <li><a href="Account.php" class="bg-primary"><i class="fas fa-user"></i>Account</a></li>
                    <li><a href="modal.php" class="bg-dark"><i class="fas fa-user"></i>Account</a></li>

                </ul>



        <div class="collapse navbar-collapse"id="navbarNavAltMarkup"></div>
        <div class="mr-auto"></div>
        <div class="navbar-nav">
            <a href="Cart.php" class="nav-item nav-link active">
                <h5 class="px-5"cart>
                    <i class="fas fa-shopping-cart"></i>Cart
                    <?php
                    if(isset($_SESSION['cart'])){
                        $count=count($_SESSION['cart']);
                        echo "<span id='cart_count'class='text-warning bg-light'>$count</span>";
                    }else{
                        echo "<span id='cart_count'class='text-warning bg-light'>0</span>";
                    }

                    ?>
                </h5>
            </a>
        </div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">

                <a class="glyphicon glyphicon-logout" href="login.php"><a class="bg-primary" href="login.php"><?php
                    echo $_SESSION['username'];
                    ?></a>
                </a>
                <form class="form-inline my-2 my-lg-0" method="post" action="index.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" aria-describedby="addon-wrapping" name="search">

                        <button class="btn bg-white my-2 my-sm-0" type="submit">Search</button>

                </form>
<?php print("$output");?>
            </li>
        </ul>

    </nav>

</header>
