<?php
   include ('../../dbconnect/connection.php');

$id = $_GET['id'];
// Edit About Mission
if($_GET['action']=='edit-aboutmis'){

    $about_mis_newtitle = $_POST['about_mis_newtitle'];
    $about_mis_newdesc = $_POST['about_mis_newdesc'];

    $sql = "update about_mis set about_mis_title='$about_mis_newtitle', about_mis_desc='$about_mis_newdesc' where about_mis_id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
       header("location:../about_mission.php");
    }else {
        echo "Failed";
    }
}
// Edit About Vision
if($_GET['action']=='edit-aboutvis'){

    $about_vis_newtitle = $_POST['about_vis_newtitle'];
    $about_vis_newdesc = $_POST['about_vis_newdesc'];

    $sql = "update about_vis set about_vis_title='$about_vis_newtitle', about_vis_desc='$about_vis_newdesc' where about_vis_id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
       header("location:../about_vision.php");
    }else {
        echo "Failed";
    }
}
// Edit Home About
if($_GET['action']=='edit-habout'){

    $ha_newtitle = $_POST['ha_newtitle'];
    $ha_newsubtitle = $_POST['ha_newsubtitle'];
    $ha_newdesc = $_POST['ha_newdesc'];


    $sql = "update home_about set ha_title='$ha_newtitle', ha_subtitle='$ha_newsubtitle' where ha_id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
       header("location:../home_about.php");
    }else {
        echo "Failed";
    }
}
// Edit Distance Learning
if($_GET['action']=='edit-about_dl_desc'){
    
    
    $about_dl_newtitle = $_POST['about_dl_newtitle'];
    $about_dl_newdesc = $_POST['about_dl_newdesc'];


    $sql = "update about_dldesc set about_dl_title='$about_dl_newtitle', about_dl_desc='$about_dl_newdesc' where about_dl_id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
       header("location:../about_aboutdesc.php");
    }else {
        echo "Failed";
    }
}
// Edit Rationale
if($_GET['action']=='edit-about_rat'){
    
    
    $about_rat_newtitle = $_POST['about_rat_newtitle'];
    $about_rat_newdesc = $_POST['about_rat_newdesc'];


    $sql = "update about_rat set about_rat_title='$about_rat_newtitle', about_rat_desc='$about_rat_newdesc' where about_rat_id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
       header("location:../about_rationale.php");
    }else {
        echo "Failed";
    }
}







?>