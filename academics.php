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
        <a href="about.html">Faculty Portal</a>
        <a href="http://wmsu.edu.ph/">Student Portal</a>
      </div>
    </div>

    <!--Lower Navigations-->
    <div class="col sectop sticky-top shadow">
      <div class="secnav container py-2">
        <img src="./sample-img/WMSU-DL.png" height="75px" class="float-start" />
        <div class="d-flex align-items-center justify-content-end py-2">
          <a href="index.php" class="list"> <i class="fa fa-home"></i> HOME</a>
          <a href="about.html" class="list">
            <i class="fa fa-lightbulb-o"></i> ABOUT</a
          >
          <a href="admissions.html" class="list">
            <i class="fa fa-university"></i> ADMISSIONS</a
          >
          <a class="active list" href="academics.html" class="list">
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
    <!--Academic Header-->
    <div class="header-image">
      <?php
                                      $query=mysqli_query($con,"select * from acad_header");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
      <img
        src="./sample-img/<?php echo $row['acad_header_img'];?>"
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
      <div class="row g-0">
        <div class="col-md-4">
          <img
            src="./sample-img/edu-sample.jpg"
            class="img-fluid rounded-start"
            alt="..."
          />
        </div>
        <div class="col-md-8">
          <div class="card-body ps-5" id="CTE">
            <h5 class="card-title"><b>College of Education</b></h5>
            <p class="card-text pt-2">
              "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum."
            </p>
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
            <p class="card-text pt-3">
              Enrolled Students:<i class="fa fa-female me-3 ms-3">&nbsp;78</i>
              <i class="fa fa-male">&nbsp;135</i>
            </p>
            <p class="card-text pt-1">
              <button class="btn btn-primary" type="button">
                Register Now
              </button>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="card p-5 mx-auto w-100 h-auto" id="CN">
      <div class="row g-0">
        <div class="col-md-4">
          <img
            src="./sample-img/nursing-sample.jpg"
            class="img-fluid rounded-start"
            alt="..."
          />
        </div>
        <div class="col-md-8">
          <div class="card-body ps-5">
            <h5 class="card-title"><b>College of Nursing</b></h5>
            <p class="card-text pt-2">
              "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum."
            </p>
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
            <p class="card-text pt-3">
              Enrolled Students:<i class="fa fa-female me-3 ms-3">&nbsp;102</i>
              <i class="fa fa-male">&nbsp;105</i>
            </p>
            <p class="card-text pt-1">
              <button class="btn btn-primary" type="button">
                Register Now
              </button>
            </p>
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
            <a class="pt-2" href="index.html"
              ><button type="button" class="btn btn-primary btn-sm">
                <i class="fa fa-home"></i> Home
              </button></a
            >
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
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>