<?php
   include ('../dbconnect/connection.php');


    $ha_title = $_POST['ha_title'];
    $ha_subtitle = $_POST['ha_subtitle'];
    $ha_desc = $_POST['ha_desc'];


    $sql = "insert into home_about(ha_title, ha_subtitle, ha_desc) values('$ha_title', '$ha_subtitle', '$ha_desc')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location: h-about.php");
    }else {
        echo "Failed";
    }

?>