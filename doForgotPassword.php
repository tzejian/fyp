<?php
include "dbconns.php";

$newPassword = createRandomPassword();
$enteredEmail = $_POST['email'];

$updateQuery = "UPDATE user SET password = SHA1('$newPassword') WHERE email = '$enteredEmail'";
$updated = mysqli_query($link, $updateQuery) or die(mysqli_error($link));

if ($updated) {
    $subject = "";
    $message = "Your new password is $newPassword";
    $headers = "From: minds@org.edu.sg";
    $emailSent = mail($email, $subject, $message, $headers);
    if ($emailSent) {
        $statusMsg = "The email has been sent!";
    }
}