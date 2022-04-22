<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="logo.png" />
        <title>All in One Pet Site</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="stylephp.css" type="text/css">
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
                       <h1>We sell</h1>
                       <p>Homemade Pet Products.</p>
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
                                <img src="proimg/fodya.png" alt="Food">
                           </a>
                           <center>
                                <div class="caption">
                                        <b><p id="autoResize">Homemade Food</p></b>
                                        <h6><p>You will be provided with Homemade Dog Food</p></h6>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="proimg/toy.png" alt="Toy">
                           </a>
                           <center>
                                <div class="caption">
                                <b><p id="autoResize">Locally Made Toys</p></b>
                                <h6><p>You will get Locally and Homemade created Toys</p></h6>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="proimg/dogya.png" alt="Shelter">
                           </a>
                           <center>
                               <div class="caption">
                                <b><p id="autoResize">Shelter's For Dogs</p></b>
                                <h6><p>You will also be provided with Shelter's for Dog</p></h6>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br><br><br><br>
            <footer id="footer" class="footer divider parallax layer-overlay overlay-dark-9" data-bg-img="images/bg/bg7.jpg" data-parallax-ratio="0.7">
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
          <img src="images/Logo_copy111.png" alt="">
          <p class="mt-20 mb-20">All in One Pet Site is an Online Platform for the Local Pet Producers to expand their business.</p>
        </div>
      </div>
    </div>
    <div class="container-fluid copy-right p-20 bg-black-333">
      <div class="row text-center">
        <div class="col-md-12">
         
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
  
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
        </div>
        
    </body>
</html>