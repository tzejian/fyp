<?php
include "dbFunctions.php";

$newPassword = createRandomPassword();
$enteredEmail = $_POST['email'];



$updateQuery = "UPDATE user SET password = SHA1('$newPassword') WHERE email = '$enteredEmail'";
$updated = mysqli_query($link, $updateQuery) or die(mysqli_error($link));

if ($updated) {
   
    $subject = "MINDS Volunteer App: Password RESET";
    $message = "Your new password is $newPassword";
    $headers = "From: minds@org.edu.sg";
    $emailSent = mail($enteredEmail, $subject, $message, $headers);
    if ($emailSent) {
        $statusMsg = "The email has been sent!";
    }
}

function createRandomPassword () {
    $min = 7491;
    $max = 184521;
    mt_rand($min, $max);
}