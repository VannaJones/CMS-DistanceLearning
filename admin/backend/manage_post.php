<?php
include ('../../dbconnect/connection.php');


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["title"]. " " . $row["content"]. "<br>";
    }
    if($result){
        //echo "deleted";
        header('location:../manage_post.php');
    }else{
        die(mysqli_error($con));
    }
}


?>