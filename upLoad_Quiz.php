<?php
session_start();
if (isset($_SESSION['id'])) {
    if ($_SESSION['role'] != 'admin') {
        die("You don't have sufficient rights.");
    }
}
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

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
        <header id="home" class="home-section">

            <?php include "adminNavbar.php" ?>

            <div class="home-section-background" style="background-image: url(images/bg/me.jpg)" >
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="header-text " >
                                        <form action="doAddQuiz.php" method="post">
                                            <fieldset>
                                                <legend style="color: white">Set up volunteer quiz</legend>
                                                <div class="form-group">
                                                    <select id="testdrop" name="test" class="form-control">
                                                        <option value="1">Multiple choice question</option>
                                                    </select>
                                                    <br>

                                                    <select id="catDrop" name="testCat" class="form-control">
                                                        <option value="1">Hand Sign</option>
                                                        <option value="2">Head Sign</option>


                                                    </select>
                                                    <br>
                                                    <label for="qn" style="color: white">Enter quiz question</label>
                                                    <input type="text" name="qns" class="form-control" id="qn" placeholder="e.g. what should u do ?" >
                                                    
                                                    <div class="mcq">
                                                        <p style="white">Multiple choices questions</p>
                                                        <div class="radio" name="radio">
                                                            <label><input type="radio"  name="mcqRadio" value="1" >
                                                                <input type="text" name="mcqAns1" class="form-control" size="50" placeholder="set your answer ">
                                                            </label><br>

                                                            <label><input type="radio" name="mcqRadio" value="2">
                                                                <input type="text" name="mcqAns2" class="form-control" size="50" placeholder="set your answer ">
                                                            </label><br>

                                                            <label><input type="radio" name="mcqRadio" value="3">
                                                                <input type="text" name="mcqAns3" class="form-control" size="50" placeholder="set your answer ">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <input class="form-control" type="submit" value="Add Quiz">
                                                </div>
                                            </fieldset>
                                        </form>




                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
    </body>
</html>
