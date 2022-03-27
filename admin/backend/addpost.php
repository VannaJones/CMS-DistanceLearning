<?php
include ('../../dbconnect/connection.php');

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $image = $_POST['image'];
    $content = $_POST['content'];

    $sql = "insert INTO post(title, image, content) VALUES('$title', '$image', '$content')";
    $result = mysqli_query($con, $sql);

    if($result){
    header("Location: ../manage_post.php");
    } else {
        echo "failed";
    }

    exit();
}

?>