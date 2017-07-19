<?php

include("dbFunctions.php");

$type = $_POST['test'];
$message = "";

$question = $_POST['qns'];
$qnsCategory = $_POST['testCat'];
$q_ans = $_POST['mcqRadio'];

$q_1 = $_POST['mcqAns1'];
$q_2 = $_POST['mcqAns2'];
$q_3 = $_POST['mcqAns3'];




$qns = $_POST['qns'];
if ($type === '1') {

//    $queryCat = "INSERT INTO 'category' ('cat_type') VALUES ('$qnsCategory')";
    
    $query = "INSERT INTO `quiz_tested`(`question_name`, `q_1`, `q_2`, `q_3`, `q_ans`,`cat_id`) VALUES ('$qns','$q_1','$q_2','$q_3','$q_ans','$qnsCategory')";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    if ($result) {

        $message = "added";
        
    } else {
        $message = "fuck off";
    }

    echo $message;
    mysqli_close($link);
} else if ($type === '2') {
    echo $qns;
} else {
    echo $qns;
}


