<?php
// php file that contains the common database connection code
session_start();
include "dbFunctions.php";

$msg = "";
if (!isset($SESSION['id'])) {
    if (isset($_POST['username'])) {
        $enteredUsername = $_POST['username'];
        $enteredPassword = $_POST['password'];
        
        $queryCheck = "SELECT * FROM user WHERE username='" . $enteredUsername . "' AND password = SHA1('" . $enteredPassword . "')";
        
        
        $resultCheck = mysqli_query($link, $queryCheck)or die(mysqli_error($link));
        
        if (mysqli_num_rows($resultCheck)  > 0) { //check for matching records
            $row = mysqli_fetch_array($resultCheck);
            $_SESSION['id'] = $row['id'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['username'] = $row['username']; //assign user id from $row to session
            $_SESSION['email'] = $row['email'];
            $_SESSION['fullname'] = $row['fullname'];
            $_SESSION['mobile'] = $row['mobile'];
            $_SESSION['gender'] = $row['gender'];
            $_SESSION['role'] =  $row['role'];

            /* Redirect browser */
            header("Location: index.php");
        } else {
            $msg = "Sorry, you must enter a valid username and password to log in.";
        }
    }
} else {
    $msg = "You are already logged in.";
}
?>

<!-- mysqli_close($link); -->

<!--/* Make sure that code below does not get executed when we redirect. */
exit; 
?> -->
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