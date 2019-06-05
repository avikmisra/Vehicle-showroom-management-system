
<?php 
if (isset($_POST['checkBoxArray']))
{
    
   foreach(($_POST['checkBoxArray']) as $checkBoxArray)
    
   {
       
      $bulk_option=$_POST['bulk_option'];
       
       switch($bulk_option)
       {
           case 'business':
               $query="UPDATE flight set class='{$bulk_option}' where id={$checkBoxArray}  ";
              
               $uplise=mysqli_query($conn,$query);
               
               
               break;
               
              case 'economy':
               
               $query="UPDATE flight set class='{$bulk_option}' where id={$checkBoxArray}  ";
              
               $uplise=mysqli_query($conn,$query);
               
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
                 
                       <option value="business">Business</option>    
                       <option value="economy">Economy</option>    
     
      
                
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
                    <th>From</th>
                    <th>To</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                    <th>Type</th>
                    <th>Airline</th>
                    <th>No_of_seats</th>
                    <th>Class</th>
                    <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $query="SELECT * from flight order by id desc";
                        $select_posts=mysqli_query($conn,$query);
                        while($row=mysqli_fetch_assoc($select_posts))
                        {

                        $item_id=$row['id'];
                        $from=$row['from1'];
                        $to=$row['to1'];
                        $dept=$row['dept_time'];
                        $arrival=$row['arrival_time'];
                        $type=$row['type'];
                        $airline=$row['airline'];
                        $nos=$row['no_of_seat'];
                        $class=$row['class'];    
                        $price=$row['price'];    
                    echo "<tr>";
?>

                    <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]'
                    
                    
                    value='  <?php echo $item_id;?>'>
                    
                  
                    
                    </td>
                    
                    
                    
                    <?php


                    echo "<td>$item_id </td>";
                    echo "<td>$from </td>";
                     echo "<td> $to</td>";
                     echo "<td> $dept</td>";
                      echo "<td>$arrival</td>";
                        echo "<td>$type </td>";
                        echo "<td>$airline</td>";
                    echo "<td> $nos </td>";
                    echo "<td> $class </td>";
                    echo "<td> $price </td>";

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
                $query ="DELETE from flight where id = {$the_item_id}";
                $delete_query = mysqli_query($conn,$query);
                header("Location: items.php");
            }
           
                                        
                                        
                                        
                                        ?> 


               