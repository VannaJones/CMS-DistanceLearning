<?php
include ('../dbconnect/connection.php');

if($_GET['action']=='m-delete'){
     echo 'm-delete';

}

if($_GET['action']=='del-banner'){
    $id = $_GET['id'];

    $sql="delete from home_banner where hb_id = $id";
    $result=mysqli_query($con,$sql);
    if($result){

        if(mysqli_num_rows($result) == 0){
            mysqli_query($con, 'alter table home_banner auto_increment = 1 ');
            header('location:h-banner-img.php');
        }

        
    }else{
        echo 'failed: ' . mysqli_error($con);
    }
}

?>