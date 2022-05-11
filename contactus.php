<?php
    include ('./dbconnect/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
    <script
      src="https://kit.fontawesome.com/a076d05399.js"
      crossorigin="anonymous"
    ></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WMSU Distance Learning | Contact Us</title>
    <link rel="stylesheet" href="index.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="icon" type="image/png" href="./sample-img/logo.png"/>
  </head>
  <body>
    <!--Upper Navigation Bar-->

    <div class="col top">
      <div class="topnav container">
        <a href="https://wmsulibrary.wordpress.com/">eLibrary</a>
        <a href="http://wmsu.edu.ph/">Student Portal</a>
      </div>
    </div>

    <!--Lower Navigations-->
    <div class="col sectop sticky-top shadow">
      <div class="secnav container py-2">
        <img src="./sample-img/WMSU-DL.png" height="75px" class="float-start" />
        <div class="d-flex align-items-center justify-content-end py-2">
          <a href="index.php" class="list"> <i class="fa fa-home"></i> HOME</a>
          <a href="about.php" class="list">
            <i class="fa fa-lightbulb-o"></i> ABOUT</a
          >
          <a href="admissions.php" class="list">
            <i class="fa fa-university"></i> ADMISSIONS</a
          >
          <a href="academics.php" class="list">
            <i class="fa fa-graduation-cap"></i> ACADEMICS</a
          >
          <a class="active list" href="contactus.php" class="list">
            <i class="fa fa-phone"></i> CONTACT US</a
          >
          <a class="btn btn-danger btn-lg" href="http://wmsu-distance-edu-app.online" role="button">
            Apply Now
          </a>
        </div>
      </div>
    </div>
    <!--Contacts Header-->
    <div class="p-5 h-auto">
      <div class="row container">
        <div class="col-md-6">
          <h2><b>CONTACT US</b></h2>
          <br />
          <h3><b>Western Mindanao State University</b></h3>
          <p>Distance Learning Education 2022</p>
          <a href="#"
            ><button type="button" class="btn btn-danger btn-sm">
              <i class="fa fa-envelope"></i> wmsu@wmsu.edu.ph
            </button></a
          >
          <p class="mt-2 mb-1">
            <i class="fa fa-map-marker"></i>&nbsp;&nbsp; Normal Road, Baliwasan,
            Zamboanga City, Philippines 7000
          </p>
        </div>
        <div class="col d-flex justify-content-center p-2">
                                              <?php
                                      $query=mysqli_query($con,"select * from cont_header");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
          <img src="./<?php echo $row['cont_header_img'];?>" class="" style="height: 250px" />
                                            <?php } ?>
        </div>
      </div>
    </div>
    <!--Sub Main Contacts-->
    <div class="row container">
      <div class="col">
        <div class="card mb-3" style="max-width: 540px">
                                    <?php
                                      $query=mysqli_query($con,"select * from cont_pres");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
          <div class="row g-0">
            <div class="col-md-4">
              <img
                src="./<?php echo $row['cont_pres_img'];?>"
                class="img-fluid rounded-start"
                alt="..."
              />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['cont_pres_title'];?></h5>
                <?php } ?>
                <p class="card-text">
                                    <?php
                                      $query=mysqli_query($con,"select * from cont_pres2");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
                  <i class="fa fa-phone"></i>&nbsp;&nbsp;<?php echo $row['cont_pres2_cont'];?><br />
                  <?php } ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="col">
          <div class="card mb-3" style="max-width: 540px">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="./sample-img/nursing-sample.jpg"
                  class="img-fluid rounded-start"
                  alt="..."
                />
              </div>
              <div class="col-md-8">
                <div class="card-body pb-0 mb-0">
                  <h5 class="card-title">Vice President's Office</h5>
                  <p class="card-text">
                    <div class="container">
                      <div class="row">
                        <div class="col">VP RED Office</div>
                        <div class="col"><i class="fa fa-phone"></i>&nbsp;911-8750</div>
                        <div class="w-100"></div>
                        <div class="col">VP Academic Affairs</div>
                        <div class="col"><i class="fa fa-phone"></i>&nbsp;991-2345</div>
                        <div class="w-100"></div>
                        <div class="col">VP Planning, Admin & Finance</div>
                        <div class="col"><i class="fa fa-phone"></i>&nbsp;991-2345</div>
                      </div>
                    </div>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Sub Contacts Title-->
    <div
      class="container justify-content-center p-2"
      style="height: auto; background-color: #a20202"
    >
      <h4 class="text-center pt-2" style="color: aliceblue">
        <b>Other Contacts</b>
      </h4>
    </div>
    <!--Other Contacts-->
    <div class="container justify-content-center pt-3">
      <table class="table table-bordered border-danger">
                                  <?php
                                      $query=mysqli_query($con,"select * from cont_other");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
        <tr>
          <th colspan="5"><?php echo $row['cont_other_name'];?></th>
          <th><i class="fa fa-phone"></i>&nbsp;<?php echo $row['cont_other_contact'];?></th>
        </tr>
                                  <?php
      }
      ?>
      </table>
    </div>
    <?php
    include ('footer.php');
    ?>
  </body>
</html>
