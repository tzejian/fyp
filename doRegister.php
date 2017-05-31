<?php
//session_start();
include ("dbFunctions.php");
$msg = "";
//retrieve details
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$nric = $_POST['nric'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];





$query = "INSERT INTO `user`(`username`, `password`, `email`, `nric`, `mobile`, `gender`) VALUES ('$username', SHA1('$password'),'$email', '$nric', '$mobile', '$gender')";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

if ($result){
    $message = "Account Created";
    
}
else{
    $message = "Try Again";
}

echo $message;
mysqli_close($link);