  <?php

        $conn = mysqli_connect("localhost","root","","vsms");

  ?>
  <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>UserType</th>
                <th>Gender</th>

               




             </tr>
            </thead>
         <tbody>
        <?php 
        $query="SELECT * FROM users";
        $select_users=mysqli_query($conn,$query);

        while($row=mysqli_fetch_assoc($select_users))
        {

        $user_id=$row['u_id'];

            
                    $user_password=$row['u_pass'];
                    $user_firstname=$row['f_name'];


            
            
                    $user_lastname=$row['l_name'];
            
                            $user_email=$row['u_email'];
                     $user_type=$row['u_type'];
                     $user_gender=$row['u_gender'];
                     echo "<tr>";
            
            
                  echo "<td>$user_id</td>";
                              echo "<td>  $user_firstname</td>";
            
            
           
            
                  echo "<td> $user_lastname </td>";
                  echo "<td>$user_email </td>";
                  echo "<td> $user_type</td>";
                  echo "<td> $user_gender</td>";
              echo "<td><a href='users.php?changetosubscriver=$user_id'>User</a> </td>";

            echo "<td><a href='users.php?changetoadmin=$user_id'>Admin</a> </td>";

            
            
             echo "<td><a href='users.php?source=edit_user&edit_user=$user_id'>Edit</a> </td>";
    

     echo "<td><a href='users.php?delete=$user_id'>Delete</a> </td>";


                 
                 echo "</tr>";






            
        }
            

        ?> 
        
                    
                                
                            </tbody>
                        </table>
              
        <?php
                                        
                if(isset($_GET['changetosubscriver']))
            {
                $user_id=$_GET['changetosubscriver'];
             
             
             
                $query="UPDATE users set u_type='user' where u_id=$user_id";
                $approve_query=mysqli_query($conn,$query);
                confirm($approve_query);
                
                header("Location: users.php");
            }
                                                                                             
                                        
                              
                                        
         if(isset($_GET['changetoadmin']))
            {
                $user_id=$_GET['changetoadmin'];
             
             
             
                $query="UPDATE users set u_type='admin' where u_id=$user_id";
                $unapprove_query=mysqli_query($conn,$query);
                confirm($unapprove_query);
                
                header("Location: users.php");
            }
                                                            
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
            if(isset($_GET['delete']))
            {
                $user_id=$_GET['delete'];
                
                $query="DELETE FROM users WHERE u_id={$user_id}";
                $delete_query_user=mysqli_query($conn,$query);
                confirm($delete_query_user);
                
                header("Location: users.php");
            }
                                        
                                        
                                        
                                        ?> 


                        