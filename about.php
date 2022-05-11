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
    <title>WMSU Distance Learning | About Us</title>
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
          <a class="active list" href="about.php" class="list">
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
          <a class="btn btn-danger btn-lg" href="http://wmsu-distance-edu-app.online/" role="button">
            Apply Now
          </a>
        </div>
      </div>
    </div>
    <!--About Us Header Image-->
    <div class="header-image">
                          <?php
                                      $query=mysqli_query($con,"select * from about_header");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
      <img src="./<?php echo $row['about_img'];?>" class="w-100" alt="..." />
              <?php 
                                      }
                                      ?>
    </div>
    <!--Distance Learning Description-->
    <div class="container p-3 pt-5" id="wmsu-dl">
                                <?php
                                      $query=mysqli_query($con,"select * from about_dldesc");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
      <div class="row">
        <div class="col-md-3">
          <img src="./sample-img/<?php echo $row['about_dl_logo'];?>" height="200" width="200" />
        </div>
        <div class="col">
          <h3 class="mb-5 mt-1"><?php echo $row['about_dl_title'];?></h3>
          <p>
            <?php echo $row['about_dl_desc'];?>
          </p>
        </div>
      </div>
                    <?php 
                                      }
                                      ?>
    </div>
    <!--Mission and Vision-->
    <div class="container p-3">
      <div class="row">
        <div class="col pe-3" id="wmsu-mis">
                                          <?php
                                      $query=mysqli_query($con,"select * from about_mis");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
          <h3><?php echo $row['about_mis_title'];?></h3>
          <p>
            <?php echo $row['about_mis_desc'];?>
          </p>
          <?php 
                                      }
                                      ?>
        </div>
        <div class="col" id="wmsu-vis">
           <?php
                                      $query=mysqli_query($con,"select * from about_vis");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
          <h3><?php echo $row['about_vis_title'];?></h3>
          <p>
           <?php echo $row['about_vis_desc'];?>
          </p>
                    <?php 
                                      }
                                      ?>
        </div>
      </div>
    </div>
    <div class="container p-3">
    <?php
                                      $query=mysqli_query($con,"select * from about_rat");
                                    
                                      while($row=mysqli_fetch_assoc($query))
                                      {
    ?>
      <div class="row">
        <div class="col ps-3" id="wmsu-rat">
          <h3><?php echo $row['about_rat_title'];?></h3>
          <p>
            <?php echo $row['about_rat_desc'];?>
          </p>
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
