<?php
// php file that contains the common database connection code
session_start();
include "dbFunctions.php";
$enteredUsername = $_POST['username'];
$enteredPassword = $_POST['password'];

$msg = "";

$queryCheck = "Select * from user where username='$enteredUsername' and password = ('$enteredPassword')";

$resultCheck = mysqli_query($link, $queryCheck)or die(mysqli_error($link));

if(mysqli_num_rows($resultCheck) == 1){ //check for matching records
    $row = mysqli_fetch_array($resultCheck);
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username']; //assign user id from $row to session
    $_SESSION['name'] = $row['name'];
    
    $msg = "<h2>You are logged in as " .$_SESSION['username']."</h2>";
    $msg .= "<p><a href='index.php'>Home</a>&nbsp<a href='logout.php'>get off</a></p>.</br>";
    

}
else{
    $msg = "<p>Sorry, get out</p>";
    $msg .= "<p><a href='login.php'>Go back to where u belong</a></p>";

}




mysqli_close($link);



/* Redirect browser */
header("Location: index.php");

 
/* Make sure that code below does not get executed when we redirect. */
exit;



?>
<script type="text/javascript">
     alert($msg); 
</script>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
    </head>
    <body style="background-color:lightcyan;">
        <?php
        echo $msg;
        ?>
    </body>
</html>