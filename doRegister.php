<?php
//session_start();
include ("dbFunctions.php");
$msg = "";
//retrieve details
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$query = "INSERT INTO `user`(`username`, `password`, `email`) VALUES ('$username','$password','$email')";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

if ($result){
    $message = "Account Created";
    
}
else{
    $message = "Try Again";
}

echo $message;
mysqli_close($link);