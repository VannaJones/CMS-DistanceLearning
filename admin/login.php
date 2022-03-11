<?php
require('connection.inc.php');
require('functions.inc.php');
$msg='';
if(isset($_POST['submit'])){
    $username=get_safe_value($con,$_POST['username']);
    $password=get_safe_value($con,$_POST['password']);
    $sql="select * from admin_users where username='$username' and password='$password'";
    $res=mysqli_query($con,$sql);
    $count=mysqli_num_rows($res);
    if($count>0){
        $_SESSION['ADMIN_LOGIN']='yes';
        $_SESSION['ADMIN_USERNAME']=$username;
        header('location:manage_post.php');
        die();

    }else{
        $msg="Please enter correct login details";
    }

}
?>
    <!DOCTYPE html>
    <html lang="en">
    <title>Login</title>
    <link rel="stylesheet" href="../index.css" />

    <head>
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="usercss/login.css">

    <link rel="javascript" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    </head>

    <body class="pt-5 bg-login"><br><br><br>
        <div class="card m-auto p-4" style="width: 25rem;">
            <img src="../WMSU-DL.png" class="card-img-top" alt="..." height="auto">
         <div class="card-body">
             <h5 class="card-title text-center">Content Management System</h5>
                <form method="post">
                    <div class="form-group mb-3"> <input id="inputUsername" type="text" name="username" placeholder="Username" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4"> </div>
                    <div class="form-group mb-3"> <input id="inputPassword" type="password" name="password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-danger"><br> </div>
                    <button type="submit" name="submit" class="btn btn-block text-uppercase mb-2 rounded-pill shadow-sm" style="background-color:#1c62b0" >Sign in</button>
                </form>
         </div>
        </div>

</body>