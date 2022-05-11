<?php
  include ('../../dbconnect/connection.php');
  $id=$_GET['id'];
?>

<html lang="en">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Title Page-->
    <title>CMS | Edit Contacts</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all" />
    <link
      href="../vendor/font-awesome-4.7/css/font-awesome.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="../vendor/font-awesome-5/css/fontawesome-all.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="../vendor/mdi-font/css/material-design-iconic-font.min.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Bootstrap CSS-->
    <link
      href="../vendor/bootstrap-4.1/bootstrap.min.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Vendor CSS-->
    <link
      href="../vendor/animsition/animsition.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"
      rel="stylesheet"
      media="all"
    />
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all" />
    <link
      href="../vendor/css-hamburgers/hamburgers.min.css"
      rel="stylesheet"
      media="all"
    />
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all" />
    <link
      href="../vendor/select2/select2.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="../vendor/perfect-scrollbar/perfect-scrollbar.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all" />

    <!-- Logo Title-->
    <link rel="icon" type="image/png" href="../../sample-img/logo.png" />
  </head>

  <body>
    <div class="page-wrapper">
      <!-- HEADER MOBILE-->
      <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
          <div class="container-fluid">
            <div class="header-mobile-inner">
              <a class="logo" href="index.html">
                <img
                  src="images/icon/WMSU-DL.png"
                  alt="WMSU Distance Learning"
                />
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
                    <a href="#">Mission</a>
                  </li>
                  <li>
                    <a href="#">Vision</a>
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
      <?php
      include ('disabled_menusidebar.php');
      ?>
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
                        <img
                          src="../images/icon/avatar-01.jpg"
                          alt="John Doe"
                        />
                      </div>
                      <div class="content">
                        <a
                          class="js-acc-btn"
                          href="#"
                          style="text-decoration: none"
                          >john doe</a
                        >
                      </div>
                      <div class="account-dropdown js-dropdown">
                        <div class="info clearfix">
                          <div class="image">
                            <a href="#">
                              <img
                                src="../images/icon/avatar-01.jpg"
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
                  <div class="float-left">
                    <h3>Edit | Contacts | Vice President's Office</h3>
                  </div>
                  <br /><br />
                  <form
                    action="../backend/edit.php?id=<?php echo $id;?>&action=edit-contvpres"
                    method="POST" enctype="multipart/form-data"
                  >
                    <?php
                                      $query=mysqli_query($con,"SELECT * from cont_vpres where cont_vpres_id=$id;");
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Title</label>
                      <input
                        Required
                        name="cont_vpres_newtitle"
                        type="text"
                        class="form-control"
                        id="exampleFormControlInput1"
                        value="<?php echo $row['cont_vpres_title'];?>"
                      />
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1"
                        >Add Image if you wish to change the existing image.
                        Ignore if you don't want to make any changes</label
                      >
                      <input
                        type="file"
                        name="cont_vpres_newimg"
                        class="img-acad"
                        value="<?php echo $row['cont_vpres_img'];?>"
                      />
                    </div>
                    <input
                      type="submit"
                      class="btn btn-primary"
                      value="Update"
                    />
                    <a href="../cont_vicepres.php"
                      ><button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                      >
                        Cancel
                      </button></a
                    >
                    <?php
                }
                ?>
                  </form>

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
