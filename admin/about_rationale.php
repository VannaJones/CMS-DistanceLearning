<?php
  include ('../dbconnect/connection.php');
?>

<html lang="en">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="au theme template" />
    <meta name="author" content="Hau Nguyen" />
    <meta name="keywords" content="au theme template" />

    <!-- Title Page-->
    <title>CMS | About Rationale</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all" />
    <link
      href="vendor/font-awesome-4.7/css/font-awesome.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="vendor/font-awesome-5/css/fontawesome-all.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="vendor/mdi-font/css/material-design-iconic-font.min.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Bootstrap CSS-->
    <link
      href="vendor/bootstrap-4.1/bootstrap.min.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Vendor CSS-->
    <link
      href="vendor/animsition/animsition.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"
      rel="stylesheet"
      media="all"
    />
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all" />
    <link
      href="vendor/css-hamburgers/hamburgers.min.css"
      rel="stylesheet"
      media="all"
    />
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all" />
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all" />
    <link
      href="vendor/perfect-scrollbar/perfect-scrollbar.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all" />

    <!-- Logo Title-->
    <link rel="icon" type="image/png" href="../sample-img/logo.png" />
  </head>

  <body>
    <div class="page-wrapper">
      <!-- HEADER MOBILE-->
      <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
          <div class="container-fluid">
            <div class="header-mobile-inner">
              <a class="logo" href="index.html">
                <img src="images/icon/WMSU-DL.png" alt="CoolAdmin" />
              </a>
              <button class="hamburger hamburger--slider" type="button">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>
        <nav class="navbar-mobile">
          <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
              <li class="has-sub">
                <a class="js-arrow" href="admin_index.html">
                  <i class="fas fa-tachometer-alt"></i>Dashboard</a
                >
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-home"></i>Home Page</a
                >
                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                  <li>
                    <a href="home_banner.html">Home Banner</a>
                  </li>
                  <li>
                    <a href="home_about.html">Home About</a>
                  </li>
                  <li>
                    <a href="home_programs_offered.html"
                      >Home Programs Offered</a
                    >
                  </li>
                </ul>
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-lightbulb-o"></i>About Page</a
                >
                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                  <li>
                    <a href="about_header.html">Header</a>
                  </li>
                  <li>
                    <a href="about_aboutdesc.html">Distance Learning</a>
                  </li>
                  <li>
                    <a href="about_mission.php">Mission</a>
                  </li>
                  <li>
                    <a href="about_vision.php">Vision</a>
                  </li>
                  <li>
                    <a href="#">Rationale</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-university"></i>Admissions Page</a
                >
                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                  <li>
                    <a href="#">Header</a>
                  </li>
                  <li>
                    <a href="#">Requirements</a>
                  </li>
                  <li>
                    <a href="#">Enrolment Procedure</a>
                  </li>
                  <li>
                    <a href="#">Terms and Policy</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-graduation-cap"></i>Academics Page</a
                >
                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                  <li>
                    <a href="#">Header</a>
                  </li>
                  <li>
                    <a href="#">College of Education</a>
                  </li>
                  <li>
                    <a href="#">College of Nursing</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-phone"></i>Contact Us Page</a
                >
                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                  <li>
                    <a href="#">WMSU Contact</a>
                  </li>
                  <li>
                    <a href="#">President's Office</a>
                  </li>
                  <li>
                    <a href="#">Vice President's Office</a>
                  </li>
                  <li>
                    <a href="#">Other Contacts</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#"> <i class="fas fa-archive"></i>Drafts</a>
              </li>
              <li>
                <a href="#"> <i class="fas fa-globe"></i>View Website</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- END HEADER MOBILE-->

      <!-- MENU SIDEBAR-->
      <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
          <a href="#">
            <img src="images/icon/WMSU-DL.png" alt="Cool Admin" />
          </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
          <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
              <li>
                <a href="admin_index.html">
                  <i class="fas fa-desktop"></i>Dashboard</a
                >
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-home"></i>Home Page</a
                >
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  <li>
                    <a href="home_banner.html">Home Banner</a>
                  </li>
                  <li>
                    <a href="home_about.html">Home About</a>
                  </li>
                  <li>
                    <a href="home_programs_offered.html"
                      >Home Programs Offered</a
                    >
                  </li>
                </ul>
              </li>
              <li class="has-sub active">
                <a class="js-arrow" href="#">
                  <i class="fas fa-lightbulb-o"></i>About Page</a
                >
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  <li>
                    <a href="about_header.php">Header</a>
                  </li>
                  <li>
                    <a href="about_aboutdesc.php">Distance Learning</a>
                  </li>
                  <li>
                    <a href="about_mission.php">Mission</a>
                  </li>
                  <li>
                    <a href="about_vision.php">Vision</a>
                  </li>
                  <li class="active">
                    <a href="about_rationale.php">Rationale</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-university"></i>Admissions Page</a
                >
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  <li>
                    <a href="adm_header.html">Header</a>
                  </li>
                  <li>
                    <a href="adm_req.html">Requirements</a>
                  </li>
                  <li>
                    <a href="adm_enrol.html">Enrolment Procedure</a>
                  </li>
                  <li>
                    <a href="adm_term.html">Terms and Policy</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-graduation-cap"></i>Academics Page</a
                >
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  <li>
                    <a href="acad_header.html">Header</a>
                  </li>
                  <li>
                    <a href="acad_education.html">College of Education</a>
                  </li>
                  <li>
                    <a href="acad_nursing.html">College of Nursing</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-phone"></i>Contact Us Page</a
                >
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  <li>
                    <a href="#">WMSU Contact</a>
                  </li>
                  <li>
                    <a href="#">President's Office</a>
                  </li>
                  <li>
                    <a href="#">Vice President's Office</a>
                  </li>
                  <li>
                    <a href="#">Other Contacts</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#"> <i class="fas fa-archive"></i>Drafts</a>
              </li>
              <li>
                <a href="#"> <i class="fas fa-globe"></i>View Website</a>
              </li>
            </ul>
          </nav>
        </div>
      </aside>
      <!-- END MENU SIDEBAR-->

      <!-- PAGE CONTAINER-->
      <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="header-wrap float-right">
                <div class="header-button">
                  <div class="account-wrap">
                    <div class="account-item clearfix js-item-menu">
                      <div class="image">
                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                      </div>
                      <div class="content">
                        <a class="js-acc-btn" href="#">john doe</a>
                      </div>
                      <div class="account-dropdown js-dropdown">
                        <div class="info clearfix">
                          <div class="image">
                            <a href="#">
                              <img
                                src="images/icon/avatar-01.jpg"
                                alt="John Doe"
                              />
                            </a>
                          </div>
                          <div class="content">
                            <h5 class="name">
                              <a href="#">john doe</a>
                            </h5>
                            <span class="email">johndoe@example.com</span>
                          </div>
                        </div>
                        <div class="account-dropdown__body">
                          <div class="account-dropdown__item">
                            <a href="#">
                              <i class="zmdi zmdi-account"></i>Account</a
                            >
                          </div>
                        </div>
                        <div class="account-dropdown__footer">
                          <a href="#"> <i class="zmdi zmdi-power"></i>Logout</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="row m-t-10">
                <div class="col-md-12">
                  <!-- DATA TABLE-->
                  <div class="table-responsive m-b-40">
                    <div class="float-left pb-4">
                      <h3>About | Rationale</h3>
                    </div>
                    <div class="float-right pb-4">
                      <button
                        type="button"
                        class="btn btn-info float-right"
                        data-toggle="modal"
                        data-target="#about_rat"
                      >
                        Add New
                      </button>
                    </div>
                    <table class="table table-borderless table-data3">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th></th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                                     require ('../dbconnect/connection.php');
                                      $query=mysqli_query($con,"SELECT * from about_rat");
                                      while($row=mysqli_fetch_array($query))
                                      {
                                    ?>
                        <tr>
                          <td><?php echo $row['about_rat_id'];?></td>
                          <td><?php echo $row['about_rat_title'];?></td>
                          <td><?php echo $row['about_rat_desc'];?></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature">
                              <button
                                class="item"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Edit"
                              >
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <a
                                href="./backend/delete.php?id=<?php echo $row['about_rat_id'];?>&action=del-aboutrat"
                                onclick="confirm('Are you sure you want delete?');"
                              >
                                <button
                                  class="item"
                                  data-toggle="tooltip"
                                  data-placement="top"
                                  title="Delete"
                                >
                                  <i class="zmdi zmdi-delete"></i>
                                </button>
                              </a>
                            </div>
                          </td>
                          <?php
                               }
                           ?>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- END DATA TABLE-->
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
      </div>
    </div>
    <!-- Modal -->
    <div class="modal" id="about_rat" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">About Rationale Details</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form
              action="./backend/update.php?action=upd-aboutrat"
              method="POST"
            >
              <p>Add Distance Learning Rationale Informations</p>
              <input
                class="form-control w-100 mt-3"
                type="text"
                placeholder="Title"
                name="about_rat_title"
              />
              <br />
              <textarea
                name="about_rat_desc"
                class="form-control w-100"
                rows="10"
                placeholder="Description"
              ></textarea>
              <br />
              <input type="submit" class="btn btn-primary" value="Update" />
              <button
                type="button"
                class="btn btn-secondary"
                data-dismiss="modal"
              >
                Cancel
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
  </body>
</html>
