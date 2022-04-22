<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
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
    <title>WMSU Distance Learning | Home</title>
    <link rel="stylesheet" href="index.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="icon" type="image/png" href="./sample-img/logo.png"/>
  </head>
  <div>
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
          <a class="active list" href="index.php">
            <i class="fa fa-home"></i> HOME</a
          >
          <a href="about.php" class="list">
            <i class="fa fa-lightbulb-o"></i> ABOUT</a
          >
          <a href="admissions.php" class="list">
            <i class="fa fa-university"></i> ADMISSIONS</a
          >
          <a href="academics.php" class="list">
            <i class="fa fa-graduation-cap"></i> ACADEMICS</a
          >
          <a href="contactus.php" class="list">
            <i class="fa fa-phone"></i> CONTACT US</a
          >
          <a class="btn btn-danger btn-lg" href="http://wmsu-distance-edu-app.online" role="button">
            Apply Now
          </a>
        </div>
      </div>
    </div>
    <!--images carousel start-->
    <div class="">
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <?php
                                     include ('./dbconnect/connection.php');
                                      $query=mysqli_query($con,"select * from home_banner");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
          <div class="carousel-item <?php if($row['hb_id'] == 1 ){ echo "active";}?>" data-bs-interval="10000">
            <img src="./sample-img/<?php echo $row['img'];?>" class="d-block w-100"/>
          </div>
          <?php }?>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!--About Distance Learning-->
    <div class="p-5" style="background-color: #EEEDED; height: auto; ">
              <?php
                                     include ('./dbconnect/connection.php');
                                      $query=mysqli_query($con,"select * from home_about");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
      <div class="row container">
        <div class="col-md-9">
          <h3><b><?php echo $row['ha_title'];?></b></h3>
          <p><?php echo $row['ha_subtitle'];?></p>
          <p>
              <?php echo $row['ha_desc'];?>
          </p>
          <a href="about.html"><button type="button" class="btn btn-secondary btn-sm">MORE ABOUT WMSU DISTANCE LEARNING</button></a>
        </div>
      <?php
                                      }
                                      ?>
      <div class="col d-flex justify-content-center p-2">
        <img src="./sample-img/logo.png" class="" style="height: 250px;">
      </div>
      </div> 
    </div>
    <!--Programs Offered Title-->
    <div class="p-3 mt-2 justify-content-center text-center" style="height: auto;">
      <button type="button" class="btn btn-danger btn-lg">Master Degree Programs Offered</button>
    </div>
    <!--Programs Offered-->
    <div class="p-3 h-auto">
      <div class="row container justify-content-center text-center">
        <div class="col-auto mt-3">
          <img src="./sample-img/logo.png" style="height: 250px;">
          <h3 class="pt-3">College of Education</h3>
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Masters Degree Offers
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <a href="#"><h6>Master of Arts in Education Major in Special Education</h6></a>
                    <a href="#"><h6>Master of Arts in Education Major in Special Education</h6></a>
                    <a href="#"><h6>Master of Arts in Education Major in Special Education</h6></a>
                    <a href="#"><h6>Master of Arts in Education Major in Special Education</h6></a>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-auto mt-3">
          <img src="./sample-img/logo.png" style="height: 250px;">
          <h3 class="pt-3">College of Nursing</h3>
            <div class="dropdown">
              <button
                class="btn btn-secondary dropdown-toggle"
                type="button"
                id="dropdownMenuButton1"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Programs Offered
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li>
                  <a class="dropdown-item" href="#"
                    >Master of Arts in Nursing Major in Nurse Practioner</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Master of Arts in Nursing Major in Clinical Nurse
                    Specialist</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Master of Arts in Nursing Major in Certified Nurse
                     Midwife</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Master of Arts in Nursing Major in Public Health</a
                 >
                </li>
              </ul>
            </div>
        </div>
      </div>
    </div>
    <?php
    include ('footer.php');
    ?>
  </body>
</html>
