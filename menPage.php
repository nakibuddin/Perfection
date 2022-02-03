<?php
    session_start();
    include_once 'dbconfig/config.php';
    include_once 'cart/php/CreateDb.php';
?>

<!DOCTYPE html>
<style>
.banner{
   /* position: relative;*/

}
.banner-text{
    /*background-color: white;
    width: 300px;
    height: 300px;
    position: absolute;
   left: 80%;
   top: 50%;
   box-sizing: inherit;
   margin-left: -150px;
   margin-top: -150px;
   font-size: 1.6rem;
   font-weight: 400;
   padding-left: 15px;
   padding-right: 15px;
   font-family: "Neutraface", sans-serif;
   text-align: center;*/
}
    .title{
        margin-top: 30px;
        margin-bottom: 30px;
    }
    .link{
        padding-left: 20px;
    }


    /*---------------------------*/

</style>
<html>
<head>
    <title>Man's closet | MYSHOP </title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body>

    <div class="banner">
        <img src="./images/menPage/ban.PNG"  style="width:100%">
     </div>
    <div class="container">
         <div class="title">
             <h2>Men's closet</h2>
             <p>Sunny days and sizzling looks are here again!</p>
         <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="view zoom">
                            <img src="./images/menPage/s.jpg" class="img-responsive" style="width:100%">
                        </div><br>

                    </div>
                    <div class="col-lg-6 ">
                        <div class="view zoom">
                            <img src="./images/menPage/t.jpg" style="width:100%">
                        </div><br>


                    </div>


                </div>
            </div>





            <div class="col-lg-4">
                <div class="link">

                    <h5><strong>Clothing</strong></h5>
                    <a href="ProductListPage.php?c_name=T-shirt">T-shirts</a><br>
                    <a href="">Casual Shirts</a><br>
                    <a href="">Formal Shirts</a><br>
                    <a href="">Suits</a><br>
                    <a href="">Jeans</a><br><br>

                    <h5><strong>Footwear</strong></h5>
                    <a href="">Casual shoes</a><br>
                    <a href="">Sports Shoes</a><br>
                    <a href="">Formal footwear</a><br>
                    <a href="">Socks</a><br><br>

                     <h5><strong>Accessories</strong></h5>
                    <a href="">Watches</a><br>
                    <a href="">Wallet & Belt</a><br>
                    <a href="">Bag & Bagpack</a><br>
                    <a href="">Personal care & Grooming</a><br>
                    <a href="">Sunglass</a><br><br>
                    <b>Click to view detailed products </b><a href="cart/index.php">here</a>

                </div>
            </div>
         </div>
         <div class="col-lg-8 ">
                  <div class="view zoom">
                            <img src="./images/menPage/footwear.jpg" class="img-responsive" style="width:100%">
                        </div><br>
            </div>


    </div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
