<?php
session_start();
include "dbFunctions.php";



if (isset($_SESSION['id'])) {
    $old_pass = $_POST['oldPass'];
    $new_pass = $_POST['newPass'];
    $re_pass = $_POST['retypePass'];
    $changePassword = "SELECT password FROM user WHERE id='" . $_SESSION['id'] . "'";;
    $result = mysqli_query($link, $changePassword) or die(mysqli_error($link));
    
    $row = mysqli_fetch_array($result);

    $data_pwd = $row['password'];

    
    
    if ($data_pwd == SHA1($old_pass)) {
        if ($new_pass == $re_pass) {
            $update_pwd = "UPDATE user SET password = SHA1('$new_pass') WHERE id= '" . $_SESSION['id'] . "'";
            $updated = mysqli_query($link, $update_pwd) or die(mysqli_error($link));
            echo "<script>alert('Update Sucessfully'); window.location='index.php'</script>";
        } else {
            echo "<script>alert('Your new and Retype Password is not match'); window.location='index.php'</script>";
        }
    } else {
        echo "<script>alert('Your old password is wrong'); window.location='index.php'</script>";
    }
}
?>