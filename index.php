<?php
session_start();
?>
<html>
    <head>
        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon/favicon1.ico">
        <link rel="m-icon" sizes="144x144" type="image/x-icon" href="images/favicon/m-icon.png">

        <!-- All CSS Plugins -->
        <link rel="stylesheet" type="text/css" href="css/plugin.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- Main CSS Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!-- Google Web Fonts  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
        <!-- All Javascript Plugins  -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugin.js"></script>



        <!-- Main Javascript File  -->
        <script type="text/javascript" src="js/scripts.js"></script>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title></title>

    </head>
    <body>
        <header id="home" class="home-section">

            <?php
            if (isset($_SESSION['id'])) {
                if ($_SESSION['role'] == 'user') {
                    include "userNavbar.php";
                } else {
                    include "adminNavbar.php";
                }
            } else {
                include "navbarlogin.php";
            }
            ?>

            <div class="home-section-background" style="background-image:url(images/bg/Minds_4.jpg)" >

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/bg/mind_2.jpg" style="width: 100%;height: 100%">
                        </div>

                        <div class="item">
                            <img src="images/bg/minds_3.jpg"  style="width: 100%;height: 100%">
                        </div>

                        <div class="item">
                            <img src="images/bg/bg_minds.jpg"  style="width: 100%;height: 100%">
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
            </div>
        </header>


        <section id="about" class="about-section">
            <div class="row">

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <img class="img-responsive" src="images/bg/me.jpg" draggable="false" alt="">
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-me section-space-padding">

                        <h2>About Us</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>

                </div>

            </div>
        </section>


        <section id="profile" class="about-section">
            <div class="row">


                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-me section-space-padding">

                        <h2>User Profile</h2>
                        <p><img src="images/favicon/propertyagent.jpg" style="max-width: 100px;max-height: 100px" class="img-circle"></p>

                        <p>Name: Low Kong Him</p>
                        <p>Gender: M</p>
                        <p>Age: 29</p>
                        <p>Email: pogChamp@hotmail.com</p>
                        <p>Mobile Number: 96334351</p>
                        <p>Points Awarded: 10</p>
                        <p>Training completed: n/a</p>



                    </div>

                </div>

            </div>
        </section>






        <!-- Portfolio Start -->
        <section id="donation" class="portfolio section-space-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2>Donation</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="text-center margin-top-50">
                <a class="button button-style button-style-dark button-style-icon fa fa-long-arrow-right smoth-scroll" href="#">Donate</a>
            </div>

        </section>

        <section id="adminProfile" class="about-section">
            <div class="row">


                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-me section-space-padding">

                        <h2>Adminstrator</h2>
                        <p><img src="images/favicon/profile.png" style="max-width: 100px;max-height: 100px"></p><br><br>
                        <div class="col-md-6 col-sm-12 col-xs-12">

                            <div class="ui-grid-c">
                                <div class="ui-block-a">
                                    <a href="uploadVid.php" rel="external" class="ui-btn">Upload training video</a>
                                </div>

                                <div class="ui-block-b">
                                    <a href="blackList.php" rel="external" class="ui-btn">BlackList</a>
                                </div>
                                <div class="ui-block-c">
                                    <a href="applicationList.php" rel="external" class="ui-btn">Application List</a>
                                </div>

                            </div>
                        </div>



                    </div>

                </div>

            </div>
        </section>





        <section id="training" class="section-space-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title"> QUIZ Question
                            <?php
                            $queryCat = "SELECT * FROM `category`";
                            $resultCat = mysqli_query($link, $queryCat);

                            while ($rowCat = mysqli_fetch_assoc($resultCat)) {
                                $category[] = $rowCat;
                            }
                            ?>

                            <div class="panel-group" id="accordion">
                                <?php
                                for ($i = 0; $i < count($category); $i ++) {
                                    ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i ?>">
                                                    <?php echo $category[$i]['cat_type'] ?></a>
                                            </h4>
                                        </div>


                                        <div id="collapse<?php echo $i ?>" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <?php
                                                $queryQuestion = "select * from quiz_tested where cat_id = " . $category[$i]['cat_id'];

                                                $resultQns = mysqli_query($link, $queryQuestion);
                                                $showQns = array();

                                                while ($rowQns = mysqli_fetch_assoc($resultQns)) {
                                                    $showQns[] = $rowQns;
                                                }
                                                for ($j = 0; $j < count($showQns); $j ++) {
                                                    ?>

                                                    <h4>Questions:<?php echo $showQns[$j]["question_name"]; ?></h4>

                                                    <div class="radio" name="radio">
                                                        <label><input type="radio" name="mcqRadio<?php echo $j ?>" value="<?php $showQns[$j] ?>"><?php echo $showQns[$j]["q_1"]; ?>

                                                        </label><br>
                                                        <label><input type="radio" name="mcqRadio<?php echo $j ?>" value="<?php $showQns[$j] ?>"><?php echo $showQns[$j]["q_2"]; ?>

                                                        </label><br>
                                                        <label><input type="radio" name="mcqRadio<?php echo $j ?>" value="<?php $showQns[$j] ?>"><?php echo $showQns[$j]["q_3"]; ?>

                                                        </label><br>

                                                    </div>
                                                <?php } ?>

                                            </div>
                                        </div>
                                    </div>

                                <?php }; ?>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>



        <section id="volunteer" class="call-to-action section-space-padding text-center">
            <div class="container section-space-padding">
                <div class="row">
                    <div class="col-md-12">   

                        <h2>Interested? Come join us now</h2>

                        <div class="text-center margin-top-20">
                            <a class="button button-style button-style-dark button-style-icon fa fa-long-arrow-right smoth-scroll" href="registration.php">Register</a>
                        </div>

                    </div>    
                </div>
            </div>
        </section>




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

