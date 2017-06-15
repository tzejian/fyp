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

$check = "SELECT * FROM user WHERE nric ='$nric'";

$checkResult = mysqli_query($link, $check);
if (mysqli_num_rows($checkResult) == 0) {

    $query = "INSERT INTO `user`(`username`, `password`, `email`, `nric`, `mobile`, `gender`) VALUES ('$username', SHA1('$password'),'$email', '$nric', '$mobile', '$gender')";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    if ($result) {
        $message = "Account Created";
        header("location: index.php");
    } else {
        $message = "Try Again";
    }
} else {
//    $message1 = "NRIC Already Exists.\\nTry again.";
//  echo "<script type='text/javascript'>alert('$message1')</script>";
    $queryblacklist = "INSERT INTO `blacklist`(`username`, `nric`) VALUES ('$username','$nric')";
    $resultblacklist = mysqli_query($link, $queryblacklist) or die(mysqli_error($link));
    if($resultblacklist){
         header("location: registration.php");
    }
    
}
echo $message;
mysqli_close($link);
