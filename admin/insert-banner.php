<?php
   include ('../dbconnect/connection.php');


    $img = $_POST['hb_img'];

    $sql = "insert into home_banner(img) values('$img')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location: h-banner-img.php");
    }else {
        echo "Failed";
    }

?>