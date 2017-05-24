<?php
include "dbconns.php"
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
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--        hello im here-->
<link href="css/login_style.css" rel="stylesheet" type="text/css"/>
<script src="js/login_effect.js" type="text/javascript"></script>
        <title></title>

    </head>
    <body>
      <?php
      include("navbarlogin.php");
      ?>
         
  <center>
  <div id = "loginform">
  <form method = "post" action = "">
   <p>Te</p>
   <input type = "image" id = "close_login" src = "images/close.png">
   <input type = "text" id = "login" placeholder = "Email Id" name = "uid">
   <input type = "password" id = "password" name = "upass" placeholder = "***">
   <input type = "submit" id = "dologin" value = "Login">
  </form>
 </div>
</center>

        
    </body>
    
    
</html>
    
    
