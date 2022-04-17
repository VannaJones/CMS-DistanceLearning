<?php
   include ('../../dbconnect/connection.php');

// Update Home About Distance Learning
if($_GET['action']=='upd-habout'){
    $ha_title = $_POST['ha_title'];
    $ha_subtitle = $_POST['ha_subtitle'];
    $ha_desc = $_POST['ha_desc'];


    $sql = "insert into home_about(ha_title, ha_subtitle, ha_desc) values('$ha_title', '$ha_subtitle', '$ha_desc')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../home_about.php");
    }else {
        echo "Failed";
    }
}
// Update About Distance Learning
if($_GET['action']=='upd-aboutdl'){
    $about_dl_logo = $_POST['about_dl_logo'];
    $about_dl_title = $_POST['about_dl_title'];
    $about_dl_desc = $_POST['about_dl_desc'];


    $sql = "insert into about_dldesc(about_dl_logo, about_dl_title, about_dl_desc) values('$about_dl_logo', '$about_dl_title', '$about_dl_desc')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../about_aboutdesc.php");
    }else {
        echo "Failed";
    }
}
// Update About Mission
if($_GET['action']=='upd-aboutmis'){
    $about_mis_title = $_POST['about_mis_title'];
    $about_mis_desc = $_POST['about_mis_desc'];


    $sql = "insert into about_mis(about_mis_title, about_mis_desc) values('$about_mis_title', '$about_mis_desc')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../about_mission.php");
    }else {
        echo "Failed";
    }
}
// Update About Vission
if($_GET['action']=='upd-aboutvis'){
    $about_vis_title = $_POST['about_vis_title'];
    $about_vis_desc = $_POST['about_vis_desc'];


    $sql = "insert into about_vis(about_vis_title, about_vis_desc) values('$about_vis_title', '$about_vis_desc')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../about_vision.php");
    }else {
        echo "Failed";
    }
}
// Update About Rationale
if($_GET['action']=='upd-aboutrat'){
    $about_rat_title = $_POST['about_rat_title'];
    $about_rat_desc = $_POST['about_rat_desc'];


    $sql = "insert into about_rat(about_rat_title, about_rat_desc) values('$about_rat_title', '$about_rat_desc')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../about_rationale.php");
    }else {
        echo "Failed";
    }
}
// Update Contact Us Other Contacts
if($_GET['action']=='upd-contother'){
    $cont_other_name = $_POST['cont_other_name'];
    $cont_other_contact = $_POST['cont_other_contact'];


    $sql = "insert into cont_other(cont_other_name, cont_other_contact) values('$cont_other_name', '$cont_other_contact')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../cont_othercontacts.php");
    }else {
        echo "Failed";
    }
}
?>