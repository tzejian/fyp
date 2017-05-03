<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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

        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid black;
                background-color: white;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: wheat;
            }
        </style>

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
                                                <a class="smoth-scroll" href="index.php#home" rel="external">Home <div class="ripple-wrapper"></div></a>
                                            </li>
                                            <li><a class="smoth-scroll" href="index.php#about" rel="external">About Us</a>
                                            </li>
                                            <li><a class="smoth-scroll" href="index.php#profile" rel="external">Profile</a>
                                            </li>
                                            <li><a class="smoth-scroll" href="index.php#donation" rel="external">Donation</a>
                                            </li>
                                            <li><a class="smoth-scroll" href="index.php#training" rel="external">Training</a>
                                            </li>
                                            
                                            <li><a class="smoth-scroll" href="index.php#home" rel="external">logout</a>
                                            </li>
                                            <li><a class="smoth-scroll" href="index.php#volunteer" rel="external">Join US</a>
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
                                <div class="col-md-12 ">
                                    <p style="color: white">Volunteer Application</p>

                                    <table>
                                        <tr>
                                            <th>Applicant</th>
                                            <th>Name</th>
                                            <th>NRIC</th>
                                            <th>Approval</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="index.php#profile">Ho Kim Ka</a></td>
                                            <td>S8123388X</td>
                                            <td><input type="radio" name="yes" value="1"><b>YES</b>
                                                <input type="radio" name="yes" value="0"><b>NO</b>
                                            </td>
                                        </tr>

                                    </table>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
    </body>
</html>
