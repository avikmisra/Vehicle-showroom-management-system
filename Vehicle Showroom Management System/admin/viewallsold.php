  <?php

        $conn = mysqli_connect("localhost","root","","vsms");

  ?>
  <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Manufacturer Name</th>
                <th>Model</th>
                <th>Registration Date</th>
                <th>Status</th>

               




             </tr>
            </thead>
         <tbody>
        <?php 
        $query="SELECT * FROM Vehicle where status='sold'";
        $select_users=mysqli_query($conn,$query);

        while($row=mysqli_fetch_assoc($select_users))
        {

        $user_id=$row['v_id'];
        $user_name=$row['manufacturer_name'];

            
                    $user_firstname=$row['model_name'];


            
            
                    $user_lastname=$row['registration_year'];
            
                     $user_type=$row['status'];
                     echo "<tr>";
            
            
                  echo "<td>$user_id</td>";
            echo "<td>$user_name</td>";
                              echo "<td>  $user_firstname</td>";
            
            
           
            
                  echo "<td> $user_lastname </td>";
                  echo "<td> $user_type</td>";

     echo "<td><a href='sold.php?delete=$user_id'>Delete</a> </td>";


                 
                 echo "</tr>";






            
        }
            

        ?> 
        
                    
                                
                            </tbody>
                        </table>
              
        <?php
                                        

            if(isset($_GET['delete']))
            {
                $user_id=$_GET['delete'];
                
                $query="DELETE FROM vehicle WHERE v_id={$user_id}";
                $delete_query_user=mysqli_query($conn,$query);
                                header("Location: sold.php");

                
            }
                                        
                                        
                                        
                                        ?> 


                        