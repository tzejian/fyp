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
        <script>
            $(document).ready(function () {
                $(".tof").hide();
                $(".check").hide();
                $("#testdrop").change(function () {
                    //alert($(this).val());
                    if ($(this).val() === '1') {
                        $(".mcq").show();
                        $(".tof").hide();
                        $(".check").hide();
                    } else if ($(this).val() === '2') {
                        $(".tof").show();
                        $(".mcq").hide();
                        $(".check").hide();
                    } else {
                        $(".check").show();
                        $(".tof").hide();
                        $(".mcq").hide();
                    }
                });

            });
        </script>
    </head>
    <body>
        <header id="home" class="home-section">

            <?php include "adminNavbar.php"?>

            <div class="home-section-background" style="background-image: url(images/bg/me.jpg)" >
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="header-text">
                                        <form action="training.php" method="get" enctype="multipart/form-data">
                                            <h1 style="color: white">Upload Video: </h1><br/>
                                            <input type="text" name="key1" id="key" class="form-control" placeholder="Insert Video Key"/><br/>
                                            <input type ="text" name="title" id="title" class="form-control" placeholder="Title"/><br/>
                                            <textarea rows="auto" cols="auto" name="summary"  id="summary" placeholder="Enter description"></textarea>
                                            <br/>
                                            <a href="training.php"><input type="submit" name="submit" class="ui-btn" value="submit"></a>
                                        
                                   
                                 
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
