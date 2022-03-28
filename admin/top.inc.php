<!doctype html>


<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>

<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <h4 class="text-center p-2 pl-4"><b></b></h4>
                    <li class="menu-item-has-children dropdown">
                        <a href="dashboard.php"><i class="fa fa-chart-line"></i> Dashboard</a>
                    </li>
                    <li class="dropdown">
                        <!-- <a href="add_new_post.php"><i class="fa fa-regular fa-comment-medical"></i> Home</a>  -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label"><i class="fa fa-regular fa-comment-medical"></i> Home</span><span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right text-center">
                                <li><a href="h-banner-img.php">Banner</a></li>
                                <li><a href="h-about.php">About</a></li>
                                <li><a href="#">Degree Offered</a></li>
                                <li><a href="#">Programs Offered</a></li>
                            </ul>    
                    </li>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="manage_post.php"><i class="fa fa-regular fa-comment"></i> About</a>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="drafts.php"><i class="fa fa-regular fa-comment-dots"></i> Admission</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="view_web.php"><i class="fa fa-regular fa-globe"></i> Academics</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="view_web.php"><i class="fa fa-regular fa-globe"></i> Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>
    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img src="../sample-img/WMSU-DL.png"></a>
                    <a class="navbar-brand hidden" href="#"><img src="images/1.png" alt="Logo"></a>
                    <!-- <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a> -->
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome Admin</a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-solid fa-user"></i>Edit Profile</a>
                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    