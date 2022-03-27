<?php
include ('../dbconnect/connection.php');

$id = $_GET['id'];

    $sql="delete from post where id = $id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "deleted";
        header('location:manage_post.php');
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

?>