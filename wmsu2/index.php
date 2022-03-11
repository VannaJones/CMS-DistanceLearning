<?php 
require('top.php');
require ('logic.php');
?>
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
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="01.jpg" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src="02.jpg" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src="03.jpg" class="d-block w-100" alt="..." />
          </div>
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
    <!--News Headline-->
    <div class="container p-3">
      <div class="row">
        <div class="col-sm-7 m-1">
          <div class="row p-2">
            <h2><i class="fa fa-newspaper-o"></i> | NEWS</h2>
            <img src="news-sample.jpg" />
          </div>
          <div class="row">
          <?php foreach($query as $q){ ?>
            <h3><?php echo $q['title'];?></h3>
            <p><i class="fa fa-calendar"></i> November 29, 2022</p>
            <p>
            <?php echo substr($q['content'], 0, 800);?>
            </p>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" type="button">Read More</button>
          </div>
        </div>
        <?php }?>
        <!--List of News-->
        <div class="col m-1">
          <div class="">
            <div class="list-group">
              <a
                href="#"
                class="list-group-item list-group-item-action active"
                aria-current="true"
              >
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">News Headline</h5>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small><i class="fa fa-calendar"></i> October 12, 2021</small>
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">News Headline</h5>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small><i class="fa fa-calendar"></i> August 19, 2021</small>
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">News Headline</h5>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small><i class="fa fa-calendar"></i> August 8, 2021</small>
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">News Headline</h5>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small><i class="fa fa-calendar"></i> August 19, 2021</small>
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">News Headline</h5>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small
                  ><i class="fa fa-calendar"></i> August 19, 2021</small
                > </a
              ><a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">News Headline</h5>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small><i class="fa fa-calendar"></i> August 19, 2021</small>
              </a>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end pt-2">
                <button class="btn btn-primary" type="button">Show More</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Footer-->
<?php require('footer.php') ?>