<?php
require('top.inc.php');

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
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">ID</th>
                                       <th></th>
                                       <th>Categories</th>
                                       <th>Name</th>
                                       <th>Image</th>
                                       <th></th>
                                       <th>Content</th>
                                       
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    
                                    <tr>
                                       <td class="serial">1</td>
                                       <td></td>
                                       <td>Lorem Ipmsum</td>
                                       <td>John</td>
                                       <td><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>"/></td>
                                     
                                       <td></td>
                                       <td></td>
                                       <td>
                                       
                                      
                                          <span class='badge badge-complete'><a href="#"
                                         >View</a></span>&nbsp;
                                    
                                      
                                       
                                       <span class='badge badge-edit'><a href="#">Edit</a></span>&nbsp;
                                      <span class='badge badge-delete'><a href="#".>Delete</a></span>
                                     
                                    
                                       </td>
                                    </tr>

                                    <tr>
                                       <td class="serial">2</td>
                                       <td></td>
                                       <td>Lorem</td>
                                       <td>John Doe</td>
                                       <td><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>"/></td>
                                     
                                       <td></td>
                                       <td></td>
                                       <td>
                                       
                                      
                                          <span class='badge badge-complete'><a href="#"
                                         >View</a></span>&nbsp;
                                    
                                      
                                       
                                       <span class='badge badge-edit'><a href="#">Edit</a></span>&nbsp;
                                      <span class='badge badge-delete'><a href="#".>Delete</a></span>
                                     
                                    
                                       </td>
                                    </tr>
                                   
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