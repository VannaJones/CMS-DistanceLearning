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
        <a href="about.html">Faculty Portal</a>
        <a href="http://wmsu.edu.ph/">Student Portal</a>
      </div>
    </div>

    <!--Lower Navigations-->
    <div class="col sectop sticky-top shadow">
      <div class="secnav container py-2">
        <img src="./sample-img/WMSU-DL.png" height="75px" class="float-start" />
        <div class="d-flex align-items-center justify-content-end py-2">
          <a class="active list" href="index.html">
            <i class="fa fa-home"></i> HOME</a
          >
          <a href="about.html" class="list">
            <i class="fa fa-question-circle"></i> ABOUT</a
          >
          <a href="admissions.html" class="list">
            <i class="fa fa-university"></i> ADMISSIONS</a
          >
          <a href="academics.html" class="list">
            <i class="fa fa-graduation-cap"></i> ACADEMICS</a
          >
          <a href="contactus.html" class="list">
            <i class="fa fa-phone"></i> CONTACT US</a
          >
          <a class="btn btn-primary btn-lg" href="#" role="button">
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
      <div class="row container">
        <div class="col-md-9">
          <h3><b>Western Mindanao State University</b></h3>
          <p>Distance Learning Education 2022</p>
          <p>
              "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum."
          </p>
          <a href="about.html"><button type="button" class="btn btn-secondary btn-sm">MORE ABOUT WMSU DISTANCE LEARNING</button></a>
        </div>
      <div class="col d-flex justify-content-center p-2">
        <img src="./sample-img/logo.png" class="" style="height: 250px;">
      </div>
      </div> 
    </div>
    <!--Programs Offered Title-->
    <div class="p-3 mt-2 justify-content-center text-center" style="height: auto;">
      <button type="button" class="btn btn-primary btn-lg">Master Degree Programs Offered</button>
    </div>
    <!--Programs Offered-->
    <div class="p-3 h-auto">
      <div class="row container justify-content-center text-center">
        <div class="col-auto mt-3">
          <img src="./sample-img/logo.png" style="height: 250px;">
          <h3 class="pt-3">College of Education</h3>
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
                    >Master of Arts in Education Major in Special Education</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Master of Arts in Education Major in Guidance and
                    Counseling</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Master of Arts in Education Major in Educational
                    Administration</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Master of Arts in Education Major in Early Childhood Study
                    and Development</a
                  >
                </li>
              </ul>
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
    <!--Footer-->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h3>Western Mindanao <br />State University</h3>
            <b>Normal Road, <br />7000 Zamboanga City<br />Philippines</b>
            <a class="pt-2" href="index.html"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-home"></i> Home</button></a>
          </div>
          <div class="footer-col">
            <h4>Programs</h4>
            <ul>
              <li><a href="academics.html#CTE">College of Education</a></li>
              <li><a href="academics.html#CN">College of Nursing</a></li>
            </ul>
            <h4><br />Admission</h4>
            <ul>
              <li>
                <a href="admissions.html#admin-req">Requirements</a>
              </li>
              <li>
                <a href="admissions.html#admin-req">Enrolment Procedure</a>
              </li>
              <li><a href="admissions.html#admin-req">Terms and Policy</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>About Us</h4>
            <ul>
              <li><a href="about.html#wmsu-dl">WMSU Distance Learning</a></li>
              <li><a href="about.html#wmsu-vis">Vision</a></li>
              <li><a href="about.html#wmsu-mis">Mission</a></li>
              <li><a href="about.html#wmsu-rat">Rationale/History</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Links</h4>
            <ul>
              <li><a href="#">News and Announcements</a></li>
              <li><a href="#">Administration</a></li>
              <li><a href="contactus.html">Contact Us</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fa fa-facebook-f"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
