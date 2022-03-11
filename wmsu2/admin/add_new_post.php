<?php
require('top.inc.php');
require ('logic.php');
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
						   <form method="POST">
            <input type="text" placeholder="Blog Title" class="form-control my-3" name="title">
            
        
                              
                        
                     
                       <div class="form-group">
                              <label for="categories" class=" form-control-label">Image</label>
                              <input type="file" name="image"  class="form-control" >
                           </div>
                        </div>

    

                           <div class="card-body card-block">
                        
            
            <textarea name="content" class="form-control my-3 bg-dark text-white" cols="5" rows="10"></textarea>
            
        
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