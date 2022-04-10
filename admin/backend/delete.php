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

?>