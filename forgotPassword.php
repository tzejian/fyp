<?php
include "dbFunctions.php"
?>
<html>
    <head>
                <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon/favicon1.ico">
        <link rel="m-icon" sizes="144x144" type="image/x-icon" href="images/favicon/m-icon.png">

        <!-- All CSS Plugins -->
        <link rel="stylesheet" type="text/css" href="css/plugin.css">

        <!-- Main CSS Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!-- Google Web Fonts  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
        <!-- All Javascript Plugins  -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugin.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC0HAKwKinpoFKNGUwRBgkrKhF-sIqFUNA"></script>
        
        <!-- Main Javascript File  -->
        <script type="text/javascript" src="js/scripts.js"></script>
        <script src="js/signUp.js" type="text/javascript"></script>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Forgot Password</title>
    </head>
    <body>
        <header id="home" class="home-section">
            <?php include("navbarlogin.php") ?>

            
            <div class="home-section-background" style="background-image:url(images/bg/bg_minds.jpg) " >
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="header-text">
                                        
                    
                




                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        
        
        
        <div class="col-md-8 col-md-offset-2">
                        <div class="page-header">
                            <p></p>
                            <h2>Forgot Password?</h2>
                        </div>

            <form id="defaultForm" method="post" action="doForgotPassword.php" class="form-horizontal">
                            
                <p style="color:white">Please enter your <b>registered email address</b> to reset your current password:</p>
                <br/>
                
                
                
                              <div class="form-group">
                                <label class="col-md-3 control-label"style="color:white">Email</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="email" required />
                                </div>
                            </div>
                            
               

                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-3">
                                    <button type="submit" class="ui-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
        
        
        
        
        
        


       




        <!-- Footer Start -->
        <footer class="footer-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 text-left">
                        <p><span><a href="#about" class="smoth-scroll">About Us</a></span> | <span><a href="#" class="smoth-scroll">MINDS</a></span></p>
                    </div>

                    <div class="col-md-6 text-right">
                        <ul class="social-icon">
                            <li><a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a></li>

                        </ul>
                    </div>


                </div>
            </div>
        </footer>
        <!-- Footer End -->


        <!-- Back to Top Start -->
        <a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
        <!-- Back to Top End -->
    </body>
</html>
