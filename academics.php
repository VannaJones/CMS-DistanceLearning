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
    <title>WMSU Distance Learning | Academics</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="font-awesome-colors.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="icon" type="image/png" href="./sample-img/logo.png" />
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
          <a class="active list" href="academics.php" class="list">
            <i class="fa fa-graduation-cap"></i> ACADEMICS</a
          >
          <a href="contactus.php" class="list">
            <i class="fa fa-phone"></i> CONTACT US</a
          >
          <a
            class="btn btn-danger btn-lg"
            href="http://wmsu-distance-edu-app.online"
            role="button"
          >
            Apply Now
          </a>
        </div>
      </div>
    </div>
    <!--Academic Header-->
    <div class="header-image">
      <?php
                                      $query=mysqli_query($con,"select * from acad_header");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
      <img
        src="./<?php echo $row['acad_header_img'];?>"
        class="w-100"
        alt="..."
      />
    </div>
    <div class="text-center m-4">
      <h3>
        <b><?php echo $row['acad_header_title'];?></b>
      </h3>
      <?php
            }
      ?>
    </div>
    <!--Degree Offers-->
    <div class="card p-5 mx-auto w-100 h-auto" id="CTE">
      <?php
                                      $query=mysqli_query($con,"select * from acad_edu1");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
      <div class="row g-0">
        <div class="col-md-4">
          <img
            src="./<?php echo $row['acad_edu1_img'];?>"
            class="img-fluid rounded-start"
            alt="College of Education"
          />
        </div>
        <div class="col-md-8">
          <div class="card-body ps-5" id="CTE">
            <h5 class="card-title">
              <b><?php echo $row['acad_edu1_title'];?></b>
            </h5>
            <p class="card-text pt-2">
              <?php echo $row['acad_edu1_desc'];?>
            </p>
            <a class="btn btn-danger" href="acad_edu.php" role="button">
              <?php echo $row['acad_edu1_but'];?>
            </a>
            <p class="card-text pt-3">
              Applicants:<i class="fa fa-female me-3 ms-3">&nbsp;78</i>
              <i class="fa fa-male">&nbsp;135</i>
            </p>
            <p class="card-text pt-1">
              <a href="http://wmsu-distance-edu-app.online">
                <button class="btn btn-danger" type="button">
                  Register Now
                </button>
              </a>
            </p>
          </div>
        </div>
      </div>
      <?php
            }
      ?>
    </div>
    <div class="card p-5 mx-auto w-100 h-auto" id="CN">
      <?php
                                      $query=mysqli_query($con,"select * from acad_nur1");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
      <div class="row g-0">
        <div class="col-md-4">
          <img
            src="./<?php echo $row['acad_nur1_img'];?>"
            class="img-fluid rounded-start"
            alt="..."
          />
        </div>
        <div class="col-md-8">
          <div class="card-body ps-5">
            <h5 class="card-title">
              <b><?php echo $row['acad_nur1_title'];?></b>
            </h5>
            <p class="card-text pt-2">
              <?php echo $row['acad_nur1_desc'];?>
            </p>
            <a class="btn btn-danger" href="acad_nurse.php" role="button">
              <?php echo $row['acad_nur1_but'];?>
            </a>
            <p class="card-text pt-3">
              Applicants:<i class="fa fa-female me-3 ms-3">&nbsp;102</i>
              <i class="fa fa-male">&nbsp;105</i>
            </p>
            <p class="card-text pt-1">
              <a href="http://wmsu-distance-edu-app.online">
                <button class="btn btn-danger" type="button">
                  Register Now
                </button>
              </a>
            </p>
          </div>
        </div>
      </div>
      <?php
            }
      ?>
    </div>
    <?php
    include ('footer.php');
    ?>
  </body>
</html>
