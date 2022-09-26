<?php
include_once("php/db_connect.php");
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BLOOD BANK</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/search_blood.css">
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="imgs/logo.png" alt="#" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-links" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-capitalize" id="nav-links">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="search.php">Search Blood</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#test">Testimonial</a>
                        </li>

                        <li class="nav-item">
                        <?php
                            if (empty($_SESSION['adminID'])) { 
                            ?>
                            <a class="nav-link log" href="SignIn.php">Log In/Sign Up</a>
                            <?php } 
                            else{ 
                            ?>
                            <a class="nav-link log" href="logout.php">Logout</a>
                            <?php } ?>

                        </li>
                        <li class="nav-item search">
                            <a class="nav-link search-link" href=""><i class="fas fa-search"></i></a>
                            <form>
                                <input type="search">
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
   

        <header id="home">
            <div class="content">
                <div class="d-flex align-items-center flex-column justify-content-center">
                    <h1>Welcome To <br>Blood Bank</h1>
                    <a href="http://www.google.com"target="_blank">
                        <span>read more</span>
                        <i class="fas fa-long-arrow-alt-right fa-2x"></i>
                    </a>
                </div>
            </div>
            <div id="slideToNext" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imgs/header.png" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="imgs/header1.png" class="d-block w-100">
                    </div>

                </div>
                <a class="carousel-control-prev" href="#slideToNext" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slideToNext" role="button" data-slide="next">
                    <i class="fas fa-chevron-right"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </header>
        

        <div class="about" id="about">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="img"><img src="imgs/pic7.jpg"></div>
                </div>
                <div class="col-lg-6 col-12 text-right">
                    <div class="about-child">
                        <h2 class="text-uppercase"><span>abo</span>ut us</h2>
                        <p>Our mission is to Define Quality Policy for the IT era, set new span for Services to Blood Donors</p>
                        <p>Blood Bank Donation system is planned to collect blood from many donators in short from various sources and distribute that blood to needy people who require blood.To do all this we require high quality software to manage those jobs.Help Line is an voluntary purpose.  </p>
                        <a href="http://www.google.com" target="_blank" target="_blank"><i class="fas fa-long-arrow-alt-left fa-2x"></i><span>Read more</span></a>
                    </div>
                </div>
            </div>
        </div>
 
                 
        <div class="contact" id="contact">
            <div class="container"><h2 class="text-capitalize"><span>get</span> in touch</h2></div>
            <div class="contact-child">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="contact-form">
                                <form>
                                    <input type="text" placeholder="Your name*" required="">
                                    <input type="text" placeholder="Your Phone number*" required="">
                                    <input type="text" placeholder="Your E-Mail*" required="">
                                    <input type="text" placeholder="Donor name">
                                    <input type="text" placeholder="Donor Phone number">
                                    <textarea placeholder="Donor Review / Message" required=""></textarea>
                                    <input type="submit" value="send" class="text-uppercase">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
        
        <div class="testimonial" id="test">
            <div class="container"><h2 class="text-capitalize text-center"><span>test</span>imonial</h2></div>
            <div class="test-child">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-1"></div>
                        <div class="col-lg-2 col-md-3 col-4"><img src="imgs/pic8 1.jpg"></div>
                        <div class="col-lg-6 col-8">
                            <h4 class="text-ippercase">sk mohammad asem</h4>
                            <p>Blood Bank Donation system is planned to collect blood from many donators in short from various sources and distribute that blood to needy people who require blood.To do all this we require high quality software to manage those jobs.</p>
                            <li><a href="http://facebook.com" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-4"><img src="imgs/pic9.jpg"></div>
                        <div class="col-lg-6 col-8">
                            <h4 class="text-ippercase">zubayar mahatab md sakif</h4>
                            <p>Blood Bank Donation system is planned to collect blood from many donators in short from various sources and distribute that blood to needy people who require blood.To do all this we require high quality software to manage those jobs.</p>
                            <li><a href="http://facebook.com" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a></li>
                        </div>
                    </div>

                        <div class="row">
                        <div class="col-lg-2 col-md-1"></div>
                        <div class="col-lg-2 col-md-3 col-4"><img src="imgs/pic8.jpg"></div>
                        <div class="col-lg-6 col-8">
                            <h4 class="text-ippercase">nishat tasmim madhu </h4>
                            <p>Blood Bank Donation system is planned to collect blood from many donators in short from various sources and distribute that blood to needy people who require blood.To do all this we require high quality software to manage those jobs.</p>
                            <li><a href="http://facebook.com" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            


            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/bootstrap.min.js"></script>

            <script>
            $(function () {
            
            'use strict';
            
            var winH = $(window).height();
            
            $('header, .slide').height(winH);
            
            $('.navbar a.search-link').on('click', function () {
            $(this).siblings('form').fadeToggle();
            });
            
            $('.navbar ul.navbar-nav li a, footer ul.main-list li a').on('click', function (e) {
            
            var getAttr = $(this).attr('href');
            
            e.preventDefault();
            $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
            });
            });


            </script>
        </body>
    </html>