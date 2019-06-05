
<?php 
if (isset($_POST['checkBoxArray']))
{
    
   foreach(($_POST['checkBoxArray']) as $checkBoxArray)
    
   {
       
      $bulk_option=$_POST['bulk_option'];
       
       switch($bulk_option)
       {
           case 'avialable':
               $query="UPDATE vehicle set status='{$bulk_option}' where v_id={$checkBoxArray}  ";
              
               $uplise=mysqli_query($conn,$query);
               confirm($uplise);
               
               
               break;
               
              case 'sold':
               
               $query="UPDATE vehicle set status='{$bulk_option}' where v_id={$checkBoxArray}  ";
              
               $uplise=mysqli_query($conn,$query);
               confirm($uplise);
               
               break;
                case 'repair':
               $query="UPDATE vehicle set status='{$bulk_option}' where v_id={$checkBoxArray}  ";
              
               $uplise=mysqli_query($conn,$query);
               confirm($uplise);             
                 break;
              
           
               
               
               
       }
       
    
   }
    
}

?>
                         

                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
<form action="" method="post">
                          
                          
    <table class="table table-bordered table-hover">
                           
                           
        <div id="bulkOptionContainer" class="col-xs-4">
            
            <select class="form-control"name="bulk_option" id="">
                
                
            <option value="">Select Options</option>    
                 
                       <option value="avialable">avialable</option>    
            <option value="sold">sold</option>    
            <option value="repair">repair</option>
     
      
                
            </select>
            
            
       
            
        </div>                   
          <div class="col-xs-4">

        <input type="submit" class="btn btn-success" name="submit" value="Apply">
        
        <a href="items.php?source=add_item" class="btn btn-primary" >Add New</a>
        
    </div>
    
                    <thead>
                    <tr>

                    <th><input id="selectAllBoxes" type="checkbox"></th>
                    <th>ID</th>
                    <th>Manufacturer name</th>
                    <th>category</th>
                    <th>Model Name</th>
                    <th>Selling Price</th>
                    <th>Registration year</th>
                    <th>Status</th>
        
                    <th>Edit</th>
                    <th>Delete</th>



                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $query="SELECT * from vehicle order by v_id desc";
                        $select_posts=mysqli_query($conn,$query);
                        confirm($select_posts);
                        while($row=mysqli_fetch_assoc($select_posts))
                        {

                        $item_id=$row['v_id'];



                             $item_name=$row['manufacturer_name'];
                         $item_company=$row['model_name'];


                        $item_category=$row['category'];
                        $item_date=$row['s_price'];

                        $item_price=$row['registration_year'];

                        $item_status=$row['status'];
                            
                            



                    echo "<tr>";
?>

                    <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]'
                    
                    
                    value='  <?php echo $item_id;?>'>
                    
                  
                    
                    </td>
                    
                    
                    
                    <?php


                    echo "<td>$item_id </td>";
                    echo "<td>$item_name </td>";
                     echo "<td> $item_category</td>";
                     echo "<td> $item_company</td>";
                      echo "<td>$item_price</td>";
                        echo "<td>$item_date </td>";
                    echo "<td> $item_status </td>";

                    echo "<td><a href='items.php?source=edit_item&p_id={$item_id}'>Edit</a> </td>";

                    echo "<td><a onClick=\"javascript: return confirm('Are You Sure Want to Delete??') ;\"href='items.php?delete={$item_id}'>Delete</a> </td>";


                    echo "</tr>";






            
        }
            

        ?> 
                                      
         </tbody>
            </table>                  
             </form>          
            
      
        <?php
                                        
            if(isset($_GET['delete']))
            {
                $the_item_id=$_GET['delete'];
                $query ="DELETE from vehicle where v_id = {$the_item_id}";
                $delete_query = mysqli_query($conn,$query);
               confirm($delete_query);
                header("Location: items.php");
            }
           
                                        
                                        
                                        
                                        ?> 


               