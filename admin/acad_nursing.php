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

    <!-- Title Page-->
    <title>CMS | Academics College Of Nursing</title>

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
      <?php
      include ('header_mobile.php');
      ?>
      <!-- END HEADER MOBILE-->

      <!-- MENU SIDEBAR-->
      <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
          <a href="#">
            <img src="images/icon/WMSU-DL.png" alt="WMSU Distance Learning" />
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
              <li class="has-sub">
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
              <li class="has-sub active">
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
                  <li class="active">
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
                <a href="../index.php">
                  <i class="fas fa-globe"></i>View Website</a
                >
              </li>
            </ul>
          </nav>
        </div>
      </aside>
      <!-- END MENU SIDEBAR-->

      <!-- PAGE CONTAINER-->
      <div class="page-container">
        <?php
    include ('header_desktop.php');
    ?>

        <!-- MAIN CONTENT-->
        <div class="main-content">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="row m-t-10">
                <div class="col-md-12">
                  <!-- DATA TABLE 1-->
                  <div class="table-responsive m-b-40">
                    <div class="float-left pb-4">
                      <h3>Academics | College of Nursing</h3>
                    </div>
                    <div class="float-right pb-4">
                      <button
                        type="button"
                        class="btn btn-info float-right"
                        data-toggle="modal"
                        data-target="#acad_nur1"
                      >
                        Add New
                      </button>
                    </div>
                    <table class="table table-borderless table-data3">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Image</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Button Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                                     require ('../dbconnect/connection.php');
                                      $query=mysqli_query($con,"SELECT * from acad_nur1");
                                      while($row=mysqli_fetch_array($query))
                                      {
                                    ?>
                        <tr>
                          <td><?php echo $row['acad_nur1_id']?></td>
                          <td>
                            <img src="../<?php echo $row['acad_nur1_img']?>" />
                          </td>
                          <td><?php echo $row['acad_nur1_title']?></td>
                          <td><?php echo $row['acad_nur1_desc']?></td>
                          <td><?php echo $row['acad_nur1_but']?></td>
                          <td>
                            <div class="table-data-feature">
                              <a
                                href="edit_post/edit_acad_nur1.php?id=<?php echo $row['acad_nur1_id'];?>&action=edit-acadnur1"
                              >
                                <button
                                  class="item"
                                  data-toggle="tooltip"
                                  data-placement="top"
                                  title="Edit"
                                >
                                  <i class="zmdi zmdi-edit"></i>
                                </button>
                              </a>
                              <a
                                href="./backend/delete.php?id=<?php echo $row['acad_nur1_id'];?>&action=del-acadnur1"
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
                        </tr>
                        <?php
                      }
                      ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- Table 2 -->
                  <div class="float-right pb-4 pt-4">
                    <button
                      type="button"
                      class="btn btn-info float-right"
                      data-toggle="modal"
                      data-target="#acad_nur2"
                    >
                      Add New
                    </button>
                  </div>
                  <table class="table table-borderless table-data3 mt-4">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Master Degree Course</th>
                        <th></th>
                        <th></th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                                     require ('../dbconnect/connection.php');
                                      $query=mysqli_query($con,"SELECT * from acad_nur2");
                                      while($row=mysqli_fetch_array($query))
                                      {
                                    ?>
                      <tr>
                        <td><?php echo $row['acad_nur2_id'];?></td>
                        <td><?php echo $row['acad_nur2_mas'];?></td>
                        <td></td>
                        <td></td>
                        <td>
                          <div class="table-data-feature">
                            <a
                              href="edit_post/edit_acad_nur2.php?id=<?php echo $row['acad_nur2_id'];?>&action=edit-acadnur2"
                            >
                              <button
                                class="item"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Edit"
                              >
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                            </a>
                            <a
                              href="./backend/delete.php?id=<?php echo $row['acad_nur2_id'];?>&action=del-acadnur2"
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
                      </tr>
                      <?php 
                      }
                      ?>
                    </tbody>
                  </table>
                  <!-- Table 3 -->
                  <div class="float-right pb-4 pt-4">
                    <button
                      type="button"
                      class="btn btn-info float-right"
                      data-toggle="modal"
                      data-target="#acad_nur3"
                    >
                      Add PDF File
                    </button>
                  </div>
                  <table class="table table-borderless table-data3 mt-4">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Downloadble PDF File</th>
                        <th>Filename</th>
                        <th></th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                                     require ('../dbconnect/connection.php');
                                      $query=mysqli_query($con,"SELECT * from acad_nur3");
                                      while($row=mysqli_fetch_array($query))
                                      {
                                    ?>
                      <tr>
                        <td><?php echo $row['acad_nur3_id'];?></td>
                        <td><?php echo $row['acad_nur3_file'];?></td>
                        <td><?php echo $row['acad_nur3_filename'];?></td>
                        <td></td>
                        <td>
                          <div class="table-data-feature">
                            <a
                              href="./backend/delete.php?id=<?php echo $row['acad_nur3_id'];?>&action=del-nurfile"
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
                      </tr>
                      <?php 
                      }
                      ?>
                    </tbody>
                  </table>
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
    <!-- Modal First Table-->
    <div class="modal" id="acad_nur1" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Academics Programs Description</h5>
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
              action="./backend/update.php?action=upd-acadnur1"
              method="POST"
              enctype="multipart/form-data"
            >
              <p>Add Name for the Program Offer</p>
              <input
                class="form-control w-100 mt-3"
                type="text"
                placeholder="Program Name"
                name="acad_nur1_title"
              />
              <br />
              <p>Add Label for the Master Degree Courses Button</p>
              <input
                class="form-control w-100 mt-3"
                type="text"
                placeholder="Button Label Name"
                name="acad_nur1_but"
              />
              <br />
              <label class="label">Add Program Image</label>
              <input type="file" name="acad_nur1_img" class="img-acad" />
              <br />
              <br />
              <textarea
                name="acad_nur1_desc"
                class="form-control w-100"
                rows="10"
                placeholder="Program Description"
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
    <!-- Modal Second Table-->
    <div class="modal" id="acad_nur2" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Program Master Degree Courses</h5>
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
              action="./backend/update.php?action=upd-acadnur2"
              method="POST"
              enctype="multipart/form-data"
            >
              <p>Add Master Degree Course</p>
              <br />
              <textarea
                name="acad_nur2_mas"
                class="form-control w-100"
                rows="5"
                placeholder="Degree Course Name"
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
    <!-- Modal Third Table-->
    <div class="modal" id="acad_nur3" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Nursing Downloadble PDF File</h5>
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
              action="./backend/insert-banner.php?action=add-nurfile"
              method="POST"
              enctype="multipart/form-data"
            >
              <input
                class="form-control w-100 mt-3"
                type="text"
                placeholder="Add Filename to display"
                name="acad_nur3_filename"
              />
              <br />
              <label class="label">Add Downloadble PDF File</label>
              <input type="file" name="acad_nur3_file" class="img-acad" />
              <br />
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
