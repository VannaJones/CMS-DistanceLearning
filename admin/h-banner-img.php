<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <?php include 'top.inc.php';?>
    <div class="content pb-0">
      <div class="orders">
        <div class="row">
          <div class="col-xl-12">
            <div class="card"></div>
            <div class="card-body">
              <h4 class="box-title">Home Banner Images</h4>
              <button
                type="button"
                class="btn btn-info float-right"
                data-toggle="modal"
                data-target="#banner"
              >
                Add Image
              </button>
            </div>
            <div class="card-body--">
              <div class="table-stats order-table ov-h">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="serial">ID</th>
                      <th>Images</th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th>Action</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                                     require ('../dbconnect/connection.php');
                                      $query=mysqli_query($con,"SELECT * from home_banner");
                                      while($row=mysqli_fetch_array($query))
                                      {
                                    ?>
                    <tr>
                      <td class="id"><?php echo $row['hb_id']; ?></td>
                      <td>
                        <img src="../sample-img/<?php echo $row['img'];?>" />
                      </td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <a
                          href="delete.php?id=<?php echo $row['hb_id'];?>&action=del-banner"
                          onclick="confirm('Are you sure you want delete?');"
                          class="btn py-2"
                          >Delete</a
                        >
                      </td>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" id="banner" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Banner</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="insert-banner.php" method="POST">
              <p>Please input image to display.</p>
              <label class="label">Image</label>
              <input type="file" name="hb_img" class="img-banner" />

              <input type="submit" class="btn btn-primary" />
              <button
                type="button"
                class="btn btn-secondary"
                data-dismiss="modal"
              >
                Cancel
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
