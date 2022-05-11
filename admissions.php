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
    <title>WMSU Distance Learning | Admissions</title>
    <link rel="stylesheet" href="index.css" />
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
          <a class="active list" href="admissions.php" class="list">
            <i class="fa fa-university"></i> ADMISSIONS</a
          >
          <a href="academics.php" class="list">
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
    <!--Admission Header-->
    <div class="text-center admission-image pt-2">
      <?php
                                      $query=mysqli_query($con,"select * from adm_header");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
      <img
        src="./<?php echo $row['adm_header_img'];?>"
        class="rounded"
        alt="..."
      />
      <h3 class="p-4">
        <b><?php echo $row['adm_header_title'];?></b>
      </h3>
      <?php
            }
      ?>
    </div>
    <!--Accordion-->
    <div class="container p-3 ps-10 pe-10">
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item" id="admin-req">
          <?php
                                      $query=mysqli_query($con,"select * from adm_req");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
          <h2 class="accordion-header" id="flush-headingOne">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#flush-collapseOne"
              aria-expanded="false"
              aria-controls="flush-collapseOne"
            >
              <?php echo $row['adm_req_title'];?>
            </button>
          </h2>
          <div
            id="flush-collapseOne"
            class="accordion-collapse collapse"
            aria-labelledby="flush-headingOne"
            data-bs-parent="#accordionFlushExample"
          >
            <div class="accordion-body">
              <p><?php echo $row['adm_req_cont'];?></p>
            </div>
          </div>
          <?php
            }
      ?>
        </div>
        <div class="accordion-item">
          <?php
                                      $query=mysqli_query($con,"select * from adm_enrol");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
          <h2 class="accordion-header" id="flush-headingTwo">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#flush-collapseTwo"
              aria-expanded="false"
              aria-controls="flush-collapseTwo"
            >
              <?php echo $row['adm_enr_title'];?>
            </button>
          </h2>
          <div
            id="flush-collapseTwo"
            class="accordion-collapse collapse"
            aria-labelledby="flush-headingTwo"
            data-bs-parent="#accordionFlushExample"
          >
            <div class="accordion-body">
              <p><?php echo $row['adm_enr_cont'];?></p>
            </div>
          </div>
          <?php
            }
      ?>
        </div>
        <div class="accordion-item">
          <?php
                                      $query=mysqli_query($con,"select * from adm_term");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
          <h2 class="accordion-header" id="flush-headingThree">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#flush-collapseThree"
              aria-expanded="false"
              aria-controls="flush-collapseThree"
            >
              <?php echo $row['adm_term_title'];?>
            </button>
          </h2>
          <div
            id="flush-collapseThree"
            class="accordion-collapse collapse"
            aria-labelledby="flush-headingThree"
            data-bs-parent="#accordionFlushExample"
          >
            <div class="accordion-body">
              <p><?php echo $row['adm_term_cont'];?></p>
            </div>
          </div>
          <?php
            }
      ?>
        </div>
      </div>
    </div>
    <?php
    include ('footer.php');
    ?>
  </body>
</html>
