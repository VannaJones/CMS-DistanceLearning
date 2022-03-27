
<?php
include ('../dbconnect/connection.php');

$id = $_GET['id'];

$sql = "update post set name=$name,content=$content where id =$id";   
$result = mysqli_query($con, $sql);
    if($result){
        //echo "deleted";
        header('location:manage_post.php');
    }else{
        echo 'failed: ' . mysqli_error($con);
    }

?>