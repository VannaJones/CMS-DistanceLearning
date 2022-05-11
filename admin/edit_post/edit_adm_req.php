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
    <title>CMS | Admission Requirements</title>

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
      <?php
      include ('disabled_menusidebar.php');
      ?>
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
                    <h3>Edit | Admission Requirements</h3>
                  </div>
                  <br /><br />
                  <form
                    action="../backend/edit.php?id=<?php echo $id;?>&action=edit-admreq"
                    method="POST"
                  >
                    <?php
                                      $query=mysqli_query($con,"SELECT * from adm_req where adm_req_id=$id;");
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Title</label>
                      <input
                        Required
                        name="adm_req_newtitle"
                        type="text"
                        class="form-control"
                        id="exampleFormControlInput1"
                        value="<?php echo $row['adm_req_title'];?>"
                      />
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1"
                        >Content</label
                      >
                      <textarea
                        Required
                        class="form-control"
                        name="adm_req_newcont"
                        
                        id="exampleFormControlTextarea1"
                        rows="5"
                      ><?php echo $row['adm_req_cont'];?></textarea>
                    </div>
                    <input
                      type="submit"
                      class="btn btn-primary"
                      value="Update"
                    />
                    <a href="../adm_req.php"><button
                      type="button"
                      class="btn btn-secondary"
                      data-dismiss="modal"
                    >
                      Cancel
                    </button></a>
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
