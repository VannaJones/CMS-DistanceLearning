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
              <h4 class="box-title">Home About Details</h4>
            </div>
            <button
              type="button"
              class="btn btn-info"
              data-toggle="modal"
              data-target="#ha_about"
            >
              Edit
            </button>
            <div class="card-body--">
              <div class="table-stats order-table ov-h">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th></th>
                      <th>Sub Title</th>
                      <th></th>
                      <th></th>
                      <th>Description</th>
                      <th></th>
                      <th></th>
                      <th>Action</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                                     require ('../dbconnect/connection.php');
                                      $query=mysqli_query($con,"SELECT * from home_about");
                                      while($row=mysqli_fetch_array($query))
                                      {
                                    ?>
                    <tr>
                      <td><?php echo $row['ha_title'];?></td>
                      <td></td>
                      <td><?php echo $row['ha_subtitle'];?></td>
                      <td></td>
                      <td></td>
                      <td><?php echo $row['ha_desc'];?></td>
                      <td></td>
                      <td></td>
                      <td>
                        <button
                          type="button"
                          class="btn btn-info"
                          data-toggle="modal"
                          data-target="#ha_about"
                        >
                          Edit
                        </button>
                      </td>
                      <td></td>
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

    <div class="modal" id="ha_about" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">About Details</h5>
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
            <form action="update.php" method="POST">
              <p>Edit the details.</p>
              <input
                class="form-control w-100"
                type="text"
                placeholder="Title"
                name="ha_title"
              />
              <br />
              <input
                class="form-control w-100"
                type="text"
                placeholder="Sub Title"
                name="ha_subtitle"
              />
              <br />
              <textarea
                name="ha_desc"
                class="form-control w-100"
                rows="10"
                placeholder="Description"
              ></textarea>
              <br />
              <input type="submit" class="btn btn-primary" value="Update" />
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
