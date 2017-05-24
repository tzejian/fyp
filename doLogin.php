<?php

include "dbconns.php";

$entered_username = $_POST['username'];
$entered_password = $_POST['password'];


$msg = "";

$queryCheck = "SELECT * FROM user WHERE username = '$entered_username' AND password = SHA1('$entered_password')";
$resultCheck = mysqli_query($link, $queryCheck) or die(mysqli_error($link));

// 1 matching row with username and password is found in table: user is valid
if(mysqli_num_rows($resultCheck) == 1) {
    session_start();
    $row = mysqli_fetch_array($resultCheck);
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    
    $msg = "You are logged in as ".$_SESSION['username']."";
    $msg = "<p><a href='index.php'>Home</a></p>";
} else {
    $msg = "<p>Sorry, you must enter a valid username and password to log in.";
}
?>