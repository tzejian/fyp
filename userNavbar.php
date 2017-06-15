<?php
session_start();
include "dbFunctions.php";
?>

<div class="header-top-area" style="background-color: #237EF5">
    <div class="container">
        <div class="row">

            <div class="col-sm-3">
                <div class="logo">
                    <a href="#home">MINDS</a>
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
                                    <a class="smoth-scroll" href="index.php">Home <div class="ripple-wrapper"></div></a>
                                </li>
                                <li><a class="smoth-scroll" href="#about">About Us</a>
                                </li>
                              
                                <li><a class="smoth-scroll" href="#donation">Donation</a>
                                </li>
                                <li><a class="smoth-scroll" href="#training">Training</a>
                                </li>
                                <li><a class="smoth-scroll" href="registration.php">Join US</a>
                                </li>
                                <li>
                                    <a class="smoth-scroll" href="profile.php">
                                        <?php
                                         echo"" . $_SESSION['username'] . "";                                                                          
                                        ?></a>
                                                                                                                                                                
                                </li>
                                
                                <li><a href="logout.php"  data-rel="external" class="smoth-scroll">logout</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



