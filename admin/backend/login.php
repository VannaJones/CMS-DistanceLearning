<?php
include ('../../dbconnect/connection.php');


    $username = $_POST['username'];
    $password = $_POST['password'];
  
    $sql = mysqli_query($con, "select * from admin_users where username = '$username' AND  password = '$password' limit 1");
    

     if(mysqli_num_rows($sql) > 0){
         
         while($row = mysqli_fetch_assoc($sql)){
        
             $username = $row["username"];
             $_SESSION['ADMIN_LOGIN']='yes';
             $_SESSION['ADMIN_USERNAME']=$username;
                header('location:../admin_index.php');
                die();
             }
         }
      
     

?>