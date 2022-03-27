<?php
require('top.inc.php');
include ('../dbconnect/connection.php');
$id=$_GET["id"];

$title="";
$image="";
$content="";

$sql=mysql_query("select * from post where id=$id");
while($row=mysqli_fetch_array($sql))
{
   $title=$row["title"];
   $image=$row["image"];
   $content=$row["content"];
}
?>
<div class="content pb-0">
            <div class="orders">
           
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Edit Post </h4>
                        </div>
                        
                       
                       <div class="card-body card-block">
                           <div class="form-group">
						   <form action="./backend/addpost.php" method="post" name="submit">
                     <label  class=" form-control-label">Title Post</label>
                      <input type="text" placeholder="Title" class="form-control my-3" name="title" value="<?php echo $title; ?>">
                       <div class="form-group">
                              <label class=" form-control-label">Image</label>
                              <input type="file" name="image"  class="form-control" >
                           </div>
                        </div>
                           <div class="card-body card-block">
                           <div class="form-group">
                           <label class=" form-control-label">Content</label>
                          <textarea name="content" class="form-control my-3" cols="5" rows="10" value="<?php echo $content; ?>"></textarea>
                        </div>
                     </div>
                     </div>
                     <button name="new_post" type="submit" class="btn btn-lg btn-info btn-block">
                           <span>Submit</span>
                           </button>
						   </form>
                  </div>
               </div>
            </div>
		  </div>
<?php
require('footer.inc.php')
?>