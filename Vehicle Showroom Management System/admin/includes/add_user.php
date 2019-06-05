<?php 

if(isset($_POST['create_user']))
{
    
    $user_id=$_POST['u_id'];
   $user_firstname=$_POST['f_name'];
       $user_lastname=$_POST['l_name'];
 $user_role=$_POST['user_role'];
     
    
    
       // $post_image=$_FILES['image']['name'];
         //   $post_image_temp=$_FILES['image']['temp_name'];

    
        $user_email=$_POST['u_email'];
        $user_password=$_POST['u_pass'];
        $user_gender=$_POST['u_gender'];
    
    //$post_date=date('d-m-y');
          //  $post_comment_count=4;
    
     //   move_uploaded_file($post_image_temp,"../images/$post_image");
    
    
                //$user_password=password_hash($user_password,PASSWORD_BCRYPT,array('cost'=>10));
 
    $query = "insert into users(u_id,f_name,l_name,u_type, u_email,u_pass,u_gender) ";
    
    $query.=" values ('{$user_id}','{$user_firstname}','{$user_lastname}','{$user_role}', '{$user_email}','{$user_password}','{$user_gender}')";
    
    $insert_user= mysqli_query($conn,$query);
    
   confirm($insert_user);
   
    
     echo "User Created"." "."<a href='users.php'>View Users</a>";   





    
}





?>
   

   

   
   <form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="title">ID</label>
        <input type="text" class="form-control" name="u_id">
    </div>

     <div class="form-group">
        <label for="title">Firstname</label>
        <input type="text" class="form-control" name="f_name">
    </div>
    
    <div class="form-group">
        <label for="post_status">Lastname</label>
        <input type="text" class="form-control" name="l_name">
    </div>
    
    
    
    <div class="form-group">
        
        <select name="user_role" id="">
                       <option value="subscriber">Select Option</option>

            
            <option value="admin">Admin</option>
                        <option value="subscriber">User</option>

             </select>           
        
        
        
        
        
    </div>

    <div class="form-group">
        <label for="post_content">Email</label>
                <input type="email" class="form-control" name="u_email">

    </div>
    
    <div class="form-group">
        <select name="u_gender" id="">
                       <option value="subscriber">Select Option</option>

            
            <option value="male">Male</option>
                        <option value="female">Female</option>
            
            
            
            
        </select>
    </div>
    
     <div class="form-group">
        <label for="post_content">Password</label>
                <input type="password" class="form-control" name="u_pass">

    </div>
    
    
    
     <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_user" value="Add User">
    </div>
    
    
    
    
    
    
    
    
     
       
       
       
     
    
  
  <!--  <div class="form-group">
        <label for="post_image">Post Image</label>
        <input type="file" name="image">
    </div> -->
    
    
   
    
    
 
    
    
    
</form>