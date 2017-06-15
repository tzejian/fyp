<?php
include("dbFunctions.php");

$videoid = $_GET['key1'];

$query = "INSERT INTO  `video` ( `video_name` ) VALUES ('$videoid')";
$status = mysqli_query($link, $query) or die(mysqli_error($link));

//Step4: Process results (mysql i_query function will return Boolean for insert/update/delete queries)
if ($status) {
    echo "<b> Successfully Update Video! </b>";
} else {
    echo "Undefine the video link";
}

//Step5: Close connection
mysqli_close($link);

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

            <div class="header-top-area">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-3">
                            <div class="logo">
                                <a href="#">MINDS</a>
                            </div>
                        </div>

                        <div class="col-sm-9">
                            <div class="navigation-menu">
                                <div class="navbar">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="navbar-collapse collapse">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="active">
                                                <a class="smoth-scroll" href="#home">Home <div class="ripple-wrapper"></div></a>
                                            </li>
                                            <li><a class="smoth-scroll" href="#">About Us</a>
                                            </li>
                                            <li><a class="smoth-scroll" href="#">Profile</a>
                                            </li>
                                            <li><a class="smoth-scroll" href="#">Donation</a>
                                            </li>
                                            <li><a class="smoth-scroll" href="#">logout</a>
                                            </li>
                                            <li><a class="smoth-scroll" href="#">Join US</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-section-background" style="background-image: url(images/bg/me.jpg)" >
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="header-text">
        
        
        <h1 style='color: white'>Video's upload : </h1><br/>
        <iframe style="align-content: center"
          src="https://www.youtube.com/embed/<?php echo $videoid;?>"></iframe><br/>
          
          </header>
    </body>
</html>

