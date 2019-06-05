<?php 

if(isset($_POST['create_item']))
{
    
                        $item_id=$_POST['v_id'];



                             $item_name=$_POST['item_company'];
                         $item_company=$_POST['item_company2'];


                        $item_category=$_POST['item_company3'];
                        $item_date=$_POST['item_company4'];

                        $item_price=$_POST['item_company5'];

                        $item_status=$_POST['status'];
                            
    
               $query="INSERT INTO vehicle (`v_id`, `manufacturer_name`, `category`, `model_name`, `s_price`, `registration_year`, `status`) VALUES ('{$item_id}', '{$item_name}', '{$item_company}', '{$item_category}', '{$item_date}', '{$item_price}', '{$item_status}')";

    $insert_post= mysqli_query($conn,$query);
    
   confirm($insert_post);
    
    
    
     





    
}





?>
   

   

   
   <form action="" method="post" enctype="multipart/form-data">
    
    
    
    <div class="form-group">
        <label for="title">ID</label>
        <input type="text" class="form-control" name="v_id">
    </div>
        

    <div class="form-group">
        <label for="title">Manufacturer Name</label>
        <input type="text" class="form-control" name="item_company">
    </div>
   <div class="form-group">
        <label for="title">Category</label>
        <input type="text" class="form-control" name="item_company2">
    </div>  
     <div class="form-group">
        <label for="title">Model Name</label>
        <input type="text" class="form-control" name="item_company3">
    </div>
     <div class="form-group">
        <label for="title">Selling Price</label>
        <input type="text" class="form-control" name="item_company4">
    </div>
     <div class="form-group">
        <label for="title">Registration year</label>
        <input type="text" class="form-control" name="item_company5">
    </div>

    <div class="form-group">
       
    <select name="status" id="">
        
        <option value="avialable">Item Status</option>
                <option value="sold">sold</option>
        <option value="repair">repair</option>
        <option value="avialable">avialable</option>
        
        
        
    </select>
       
    </div>
    
     <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_item" value="Add Item">
    </div>
    
    
    

    
    
</form>