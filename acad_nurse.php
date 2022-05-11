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
    <div class="container pb-4">
      <?php
                                      $query=mysqli_query($con,"select * from acad_nur1");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
      <div class="row bg-title p-2">
        <div class="col-lg">
          <h2><?php echo $row['acad_nur1_title'];?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 p-4 bg-content">
          <p class="pb-3">
            <?php echo $row['acad_nur1_desc'];?>
          </p>
          <h4>
            <b><?php echo $row['acad_nur1_but'];?></b>
          </h4>
          <?php } ?>
          <ul style="list-style-type: disc">
            <?php
                                      $query=mysqli_query($con,"select * from acad_nur2");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
            <li><?php echo $row['acad_nur2_mas'];?></li>
            <?php } ?>
          </ul>
        </div>
        <div class="col-lg-4 p-3 bg-pdf">
          <b>Downloadable PDF Files</b>
          <br />
          <ul style="list-style-type: disc">
            <?php
                                      $query=mysqli_query($con,"select * from acad_nur3");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
            <li>
              <a
                href="./<?php echo $row['acad_nur3_file'];?>"
                style="text-decoration: none"
                download
              >
                <?php echo $row['acad_nur3_filename'];?></a
              >
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
    <?php
    include ('footer.php');
    ?>
  </body>
</html>
