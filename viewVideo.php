<?php
include("dbFunctions.php");

$videoid = $_GET['key1'];

$query = "INSERT INTO  `video` ( `video_name` ) VALUES ('$videoid')";
$status = mysqli_query($link, $query) or die(mysqli_error($link));

//Step4: Process results (mysql i_query function will return Boolean for insert/update/delete queries)
if ($status) {
    echo "<b>Update to Database!</b>";
} else {
    echo "Review Submission Failed";
}

//Step5: Close connection
mysqli_close($link);



?>

<html>
    <title>
        
    </title>
    
    <body>
        <iframe style="width: 100%; height: 100%"
          src="https://www.youtube.com/embed/<?php echo $videoid;?>"></iframe><br/>
    </body>
</html>

