 <?php 
if(isset($_GET['p_id']))
{
    
    
    $the_item_id=$_GET['p_id'];
    

    
        $query="SELECT * from vehicle where v_id= {$the_item_id}";
        $select_po=mysqli_query($conn,$query);
    confirm($select_po);
        while($row=mysqli_fetch_assoc($select_po))
        {
            $item_id=$row['v_id'];
            $item_company=$row['manufacturer_name'];

           $item_name=$row['model_name'];

        
                    $item_category=$row['category'];
                    $item_price=$row['s_price'];
                    $item_year=$row['registration_year'];
                    $item_status=$row['status'];


        }
}
   if(isset($_POST['update_item']))
    {
               $item_company=$_POST['m-name'];

           $item_name=$_POST['mod-name'];
        	$item_year=$_POST['year'];
        
    
    		 $item_id=$_POST['id'];
                 
                $item_category=$_POST['category'];
                    $item_status=$_POST['status'];
                          $item_price=$_POST['price'];

       
        
        $query="UPDATE vehicle set ";
       $query.="manufacturer_name='{$item_company}', ";
                $query.="category='{$item_category}', ";
                $query.="model_name='{$item_name}', ";
                $query.="status='{$item_status}', ";
                       $query.="s_price='{$item_price}', ";
                  $query.="registration_year='{$item_year}' ";
     $query.="WHERE v_id={$item_id}";


            $update_query=mysqli_query($conn,$query);
          
        confirm($update_query);
       
       
       echo "<p class='bg-success'>Item Updated . <a href='items.php'>Edit More Items</a></p>";
       

/*and post image is not working 



    
  */ 

    }
    
    

      
       
?>        
         
          
           
            
             
              
               
                 
   
   
   <form action="" method="post" enctype="multipart/form-data">
    
     
    <div class="form-group">
        <label for="title">ID</label>
        <input value="<?php echo $item_id;?>" type="text" class="form-control" name="id">
    </div>
   
    
    <div class="form-group">
        <label for="title">Manufacturer Name</label>
        <input value="<?php echo $item_company;?>" type="text" class="form-control" name="m-name">
    </div>
    
   
    <div class="form-group">
        <label for="title">Model Name</label>
        <input value="<?php echo $item_name;?>" type="text" class="form-control" name="mod-name">
    </div>
   
    
    <div class="form-group">
        <label for="title">Category</label>
        <input value="<?php echo $item_category;?>" type="text" class="form-control" name="category">
    </div>
    
    <div class="form-group">
        <label for="title">Price</label>
        <input value="<?php echo $item_price;?>" type="text" class="form-control" name="price">
    </div>
   
    
    
    <div class="form-group">
        <label for="title">Status</label>
        <input type="<?php echo $item_status;?>" type="text" class="form-control" name="status">
    </div>
     <div class="form-group">
        <label for="title">Registration Year</label>
        <input value="<?php echo $item_year;?>" type="text" class="form-control" name="year">
    </div>
    
     <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_item" value="Update Item">
    </div>
    
    
    
 
    
</form>