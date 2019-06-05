
                  <form action="" method="post" >
                   <div class="form-group">
                      <label for="cat-title"> Edit Category</label>
                      
                      <?php 
                       

            if(isset($_GET['edit']))
            {
                $cat_id=$_GET['edit'];

                
                
                   $query="select * from categories where cat_id=$cat_id";
                    $select_catoryid=mysqli_query($connection,$query);
                while($row=mysqli_fetch_assoc($select_catoryid))
                    {
                        $cat_title=$row['cat_title'];
                             
                        $cat_id=$row['cat_id'];
                             
                    
                    ?>
                    
                    
                    <input value="<?php if(isset($cat_title)){echo $cat_title;} ?>"type="text" class="form-control" name="cat_title" >
                    
                    
                    
                    
                 
                       
                       
                       
                       
                       
                    <?php }   
                       
                       
            }
                       
                       
                       ?>
                       
                             <?php //update
                           
                if(isset($_POST['update_cat']))
                {
                    $thecat_title=$_POST['cat_title'];
                    
                     
                $query="update categories set cat_title =' $thecat_title'where cat_id= {$cat_id} ";
                    
                    $update_query =mysqli_query($connection,$query);
                    header("Location: categories.php");

                    
                if(!$update_query)
                {
                    die('Query Failed'. mysqli_error($connection));
                }
                    
                }
                           
                           
                           ?>
                       
                  
                      
                      <input type="text" class="form-control" name="cat_title">
                   
                       
                   </div>
                     <div class="form-group">
                      <input class="btn btn-primary" type="submit" name="update_cat"
                      value="Update Category">
                   
                       
                   </div>
                   
           
                   
                    
               
                    
                </form>
                                
                
