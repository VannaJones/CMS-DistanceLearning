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
if($_GET['action']=='add-aboutheader'){
    $about_img = $_POST['about_img'];

    $sql = "insert into about_header(about_img) values('$about_img')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../about_header.php");
    }else {
        echo "Failed";
    }
}
// Add Admissions Header Image
if($_GET['action']=='add-admheader'){
    $adm_header_img = $_POST['adm_header_img'];
    $adm_header_title = $_POST['adm_header_title'];

    $sql = "insert into adm_header(adm_header_img, adm_header_title) values('$adm_header_img', '$adm_header_title')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../adm_header.php");
    }else {
        echo "Failed";
    }
}
// Add Academics Header Image
if($_GET['action']=='add-acadheader'){
    $acad_header_img = $_POST['acad_header_img'];
    $acad_header_title = $_POST['acad_header_title'];

    $sql = "insert into acad_header(acad_header_img, acad_header_title) values('$acad_header_img', '$acad_header_title')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../acad_header.php");
    }else {
        echo "Failed";
    }
}
?>