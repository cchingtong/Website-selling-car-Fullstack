<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="images/logo.jpg" />
        <title>selling car</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/js.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/css.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
       
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/slide-8.jpg" alt="" style="width:100%;">
                    </div>
                    <div class="item">
                        <img src="images/slide-7.jpg" alt="" style="width:100%;">
                    </div>
                    <div class="item">
                        <img src="images/slide-6.jpg" alt="" style="width:100%;">
                    </div>
                    <div class="item">
                        <img src="images/slide-9.jpg" alt="" style="width:100%;">
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="login.php">
                                <img src="images/img-1.jpg" alt="">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Highlander</p>
                                        <p>Toyota Highlander on the official Toyota site. Find a Toyota SUV at a dealership near you, or build and price your own online today.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                            <a href="login.php">
                               <img src="images/img-2.jpg" alt="">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Tundra</p>
                                    <p>Toyota Tundra on the official Toyota site. Find this Toyota truck at a dealership near you, or build and price your own online today.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                       <a href="login.php">
                               <img src="images/img-3.jpg" alt="">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">lexus</p>
                                   <p>Welcome to Lexus; official site. Explore the line of Lexus luxury sedans, SUVs, hybrids, performance cars and accessories, or find a Lexus dealer near you.</p>
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
                   <p>Create by group 2 members name :</p>
                   <p> Sim Lyhab Chour Chingtong </p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>