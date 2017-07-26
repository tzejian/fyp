<?php
include("dbFunctions.php");

$videokey = $_GET['key1'];
$title = $_GET['title'];
$summary = $_GET['summary'];

$query = "INSERT INTO  `video` (`video_key`, `video_name`, `video_desc`) VALUES ('$videokey','$title','$summary')";

$query1 = "SELECT * FROM video";

$query2 = "SELECT * FROM category";
$status1 = mysqli_query($link, $query1) or die(mysqli_error($link));
$status2 = mysqli_query($link, $query2) or die(mysqli_error($link));

while ($row = mysqli_fetch_assoc($status1)) {
    $video[] = $row;
}
while ($row1 = mysqli_fetch_assoc($status2)) {
    $cat [] = $row1;
}


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

            <?php include "adminNavbar.php" ?>


            <div class="home-section-background" style="background-image: url(images/bg/me.jpg)" >
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="header-text">



                                        <h1 style='color: white'>Categories : </h1>
                                        <div data-theme="b" class="panel-group" id="accordion">
                                            <?php for ($i = 0; $i < count($cat); $i++) { ?>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">

                                                                <?php echo $cat[$i]['cat_type']; ?><br/>

                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <?php for ($j = 0; $j < count($video); $j++) { ?>
                                                        <div id="collapse1" class="panel-collapse collapse in">
                                                            <div class="panel-body">

                                                                <iframe style="align-items: center"src="https://www.youtube.com/embed/<?php echo $video[$j]["video_key"]; ?>"></iframe><br/> 
                                                                    <?php echo "video name : " . $video[$j]['video_name'] . "<br/>Description:<br/>" . $video[$j]['video_desc']; ?>
                                                                  
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>

                                            <?php } ?>

                                            <div>

                                            </div>

                                            <br/>


                                            </header>
                                            </body>
                                            </html>

