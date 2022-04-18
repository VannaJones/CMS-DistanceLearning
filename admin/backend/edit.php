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
// Edit Home About
if($_GET['action']=='edit-habout'){

    $ha_newtitle = $_POST['ha_newtitle'];
    $ha_newsubtitle = $_POST['ha_newsubtitle'];
    $ha_newdesc = $_POST['ha_newdesc'];


    $sql = "update home_about set ha_title='$ha_newtitle', ha_subtitle='$ha_newsubtitle', ha_desc='$ha_newdesc' where ha_id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
       header("location:../home_about.php");
    }else {
        echo "Failed";
    }
}







?>