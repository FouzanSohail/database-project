<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Fouzan's Grocery Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We are Offering.</h1>
                       <p>15% OFF on all fruit items.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/fruits.jpg" alt="fruits">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Fruits</p>
                                        <p>An Apple a day keeps a doctor Away.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/vege.jpg" alt="Vegetables">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Vegetables</p>
                                    <p>Fresh vegetables from the best Farmers.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/dry.jpg" alt="dry fruits">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Dry Fruits</p>
                                   <p>Good collections from Northern Areas of Pakistan.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>This website is developed by Fouzan Sohail(BCS203168)</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>