
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
                                <li><a class="smoth-scroll" href="uploadVid.php">Upload Videos</a>
                                </li>
                                <li><a class="smoth-scroll" href="upLoad_Quiz.php">Create Quiz</a>
                                </li>
                                <li><a class="smoth-scroll" href="#donation">Donation</a>
                                </li>
                                <li><a class="smoth-scroll" href="#training">Training</a>
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


<div id="popupLogin" data-theme="a" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="doLogin.php">
                <div class="form-group">
                    <h3>Please sign in</h3>
                    <label for="un" class="ui-hidden-accessible">Username:</label>
                    <input type="text" class="form-control" name="username" id="user" value="" placeholder="username" >
                    <label for="pw" class="ui-hidden-accessible">Password:</label>
                    <input type="password" class="form-control" name="password" id="pw" value="" placeholder="password" >
                    <button type="submit" name="submit" class="ui-btn ui-corner-all ui-shadow ui-mini ui-btn-b ui-btn-icon-left ui-icon-check">Sign in</button>
                    <a href="registration.php" rel="external" class="btn ui-btn">Register</a>
                    <a href="forgotPassword.php" rel="external" class="btn ui-btn"> Forgot Password </a>
                </div>
            </form>
        </div>
    </div>
</div>


