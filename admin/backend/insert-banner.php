<?php
   include ('../../dbconnect/connection.php');
// Add Home Banner Image
if($_GET['action']=='add-banner'){
    $img = $_POST['hb_img'];

    $sql = "insert into home_banner(img) values('$img')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../home_banner.php");
    }else {
        echo "Failed";
    }
}
// Add About Header Image
if($_GET['action']=='add-about-header'){
    $about_img = $_POST['about_img'];

    $sql = "insert into about_header(about_img) values('$about_img')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../about_header.php");
    }else {
        echo "Failed";
    }
}
?>