<?php
include ('top.inc.php');
include ('../dbconnect/connection.php');
?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">MANAGE POSTS</h4>
                           <h4 class="box-link"><a href="manage_product.php"></a> </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                           
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th class="serial">ID</th>
                                       <th></th>
                                       <th></th>
                                       <th>Title</th>
                                       <th>Image</th>
                                       <th></th>
                                       <th>Content</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                     require ('../dbconnect/connection.php');
                                      $query=mysqli_query($con,"SELECT * from post");
                                      while($row=mysqli_fetch_array($query))
                                      {
                                    ?> 
                                    <tr>
                                       <td class="serialph"><?php echo $row['id']; ?></td>
                                       <td></td>
                                       <td></td>
                                       <td><?php echo $row['title']; ?></td>
                                       <td><img src="../<?php echo $row['image']?>"/></td>
                              
                                       <td></td>
                                       <td><?php echo $row['content']; ?></td>
                                       <td>
                                       
                                      
                                       <button class='badge badge-complete btn btn-primary'><a href="#">View</a></button>&nbsp;
                                       <button class='badge badge-edit' name='update'><a href="Editpost.php">Edit</a></button>&nbsp;
                                       <button class='badge badge-delete' name='delete'><a href="delete.php?id=<?php echo $row['id']; ?>" onclick="confirm('Are you sure you want delete?');">Delete</a></button>
                                     
                                    
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
		  </div>
<?php
require('footer.inc.php')
?>