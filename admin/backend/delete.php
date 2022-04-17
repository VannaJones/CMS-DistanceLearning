<?php
include ('../../dbconnect/connection.php');

if($_GET['action']=='m-delete'){
     echo 'm-delete';

}
// Delete Home Banner Image
if($_GET['action']=='del-banner'){
    $id = $_GET['id'];

    $sql="delete from home_banner where hb_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table home_banner auto_increment = 1 ');
            header('location:../home_banner.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }
}
// Delete from Home About Page
if($_GET['action']=='del-habout'){
    $id = $_GET['id'];

    $sql="delete from home_about where ha_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table home_about auto_increment = 1 ');
            header('location:../home_about.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the About Header
if($_GET['action']=='del-abouthead'){
    $id = $_GET['id'];

    $sql="delete from about_header where about_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table about_header auto_increment = 1 ');
            header('location:../about_header.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from About Distance Learning
if($_GET['action']=='del-dldesc'){
    $id = $_GET['id'];

    $sql="delete from about_dldesc where about_dl_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table about_dldesc auto_increment = 1 ');
            header('location:../about_aboutdesc.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from About Mission
if($_GET['action']=='del-aboutmis'){
    $id = $_GET['id'];

    $sql="delete from about_mis where about_mis_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table about_mis auto_increment = 1 ');
            header('location:../about_mission.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from About Vision
if($_GET['action']=='del-aboutvis'){
    $id = $_GET['id'];

    $sql="delete from about_vis where about_vis_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table about_vis auto_increment = 1 ');
            header('location:../about_vision.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from About Rationale
if($_GET['action']=='del-aboutrat'){
    $id = $_GET['id'];

    $sql="delete from about_rat where about_rat_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table about_rat auto_increment = 1 ');
            header('location:../about_rationale.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the Academics Header
if($_GET['action']=='del-acadheader'){
    $id = $_GET['id'];

    $sql="delete from acad_header where acad_header_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table acad_header auto_increment = 1 ');
            header('location:../acad_header.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the Admission Header
if($_GET['action']=='del-admheader'){
    $id = $_GET['id'];

    $sql="delete from adm_header where adm_header_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table adm_header auto_increment = 1 ');
            header('location:../adm_header.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
// Delete from the Contact Us Other Contacts
if($_GET['action']=='del-contother'){
    $id = $_GET['id'];

    $sql="delete from cont_other where cont_other_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table cont_other auto_increment = 1 ');
            header('location:../cont_othercontacts.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

}
?>