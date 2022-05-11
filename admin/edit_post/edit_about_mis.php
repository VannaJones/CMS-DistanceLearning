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
    <title>CMS | About Mission</title>

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

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all" />

    <!-- Logo Title-->
    <link rel="icon" type="image/png" href="../../sample-img/logo.png" />
  </head>

  <body>
    <div class="page-wrapper">
      <!-- HEADER MOBILE-->
      <?php
      include ('../header_mobile.php');
      ?>
      <!-- END HEADER MOBILE-->

      <!-- MENU SIDEBAR-->
      <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
          <a href="#">
            <img src="../images/icon/WMSU-DL.png" alt="WMSU Distance Learning" />
          </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
          <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
              <li>
                <a href="admin_index.php">
                  <i class="fas fa-desktop"></i>Dashboard</a
                >
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-home"></i>Home Page</a
                >
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  <li>
                    <a href="home_banner.php">Home Banner</a>
                  </li>
                  <li>
                    <a href="home_about.php">Home About</a>
                  </li>
                  <li>
                    <a href="home_programs_offered.php"
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
                  <li class="active">
                    <a href="about_mission.php">Mission</a>
                  </li>
                  <li>
                    <a href="about_vision.php">Vision</a>
                  </li>
                  <li>
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
                    <a href="adm_header.php">Header</a>
                  </li>
                  <li>
                    <a href="adm_req.php">Requirements</a>
                  </li>
                  <li>
                    <a href="adm_enrol.php">Enrolment Procedure</a>
                  </li>
                  <li>
                    <a href="adm_term.php">Terms and Policy</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-graduation-cap"></i>Academics Page</a
                >
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  <li>
                    <a href="acad_header.php">Header</a>
                  </li>
                  <li>
                    <a href="acad_education.php">College of Education</a>
                  </li>
                  <li>
                    <a href="acad_nursing.php">College of Nursing</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-phone"></i>Contact Us Page</a
                >
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  <li>
                    <a href="cont_wmsu.php">WMSU Contact</a>
                  </li>
                  <li>
                    <a href="cont_pres.php">President's Office</a>
                  </li>
                  <li>
                    <a href="cont_vicepres.php">Vice President's Office</a>
                  </li>
                  <li>
                    <a href="cont_othercontacts.php">Other Contacts</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#"> <i class="fas fa-archive"></i>Drafts</a>
              </li>
              <li>
                <a href="../index.php"> <i class="fas fa-globe"></i>View Website</a>
              </li>
            </ul>
          </nav>
        </div>
      </aside>
      <!-- END MENU SIDEBAR-->

      <!-- PAGE CONTAINER-->
      <div class="page-container">
        <!-- HEADER DESKTOP-->
        <?php
          include ('../header_desktop.php');
        ?>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="row m-t-10">
                <div class="col-md-12">
                  <!-- DATA TABLE-->
                  <div class="float-left">
                    <h3>Edit | About | Mission</h3>
                  </div>
                  <br /><br />
                  <form
                    action="../backend/edit.php?id=<?php echo $id;?>&action=edit-aboutmis"
                    method="POST"
                  >
                    <?php
                                      $query=mysqli_query($con,"SELECT * from about_mis where about_mis_id=$id;");
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Title</label>
                      <input
                        Required
                        name="about_mis_newtitle"
                        type="text"
                        class="form-control"
                        id="exampleFormControlInput1"
                        value="<?php echo $row['about_mis_title'];?>"
                      />
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1"
                        >Description</label
                      >
                      <textarea
                        Required
                        class="form-control"
                        name="about_mis_newdesc"
                        
                        id="exampleFormControlTextarea1"
                        rows="5"
                      ><?php echo $row['about_mis_desc'];?></textarea>
                    </div>
                    <input
                      type="submit"
                      class="btn btn-primary"
                      value="Update"
                    />
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-dismiss="modal"
                    >
                      Cancel
                    </button>
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
