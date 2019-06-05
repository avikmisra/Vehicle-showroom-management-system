<?php include "includes/adminheader.php" ?>
    <div id="wrapper">
        
        
    
        <!-- Navigation -->
        <?php include "includes/adminnavigation.php" ?>

     
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To Admin 
                            <small>Author</small>
                        </h1>
                        
            <div class="col-xs-6">
            
    
             
                
              
                
            </div>
                   <class="col-xs-6">
                      
                   
                   
                    <table class="table  table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Sell </th>
                                <th>Repair</th>
                            </tr>
                        </thead>
                   

                       <tbody>
                    <?php 
                         echo "<td><a href='sold.php'>Sell</a> </td>";
                                                  echo "<td><a href='repair.php'>Repair</a> </td>";


          
                                    
                                
                ?>               
                         
                      
                       </tbody>
                </table>             
                                                     
                                                                             
                                                                                                                         
                    </div>

              
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        <?php include "includes/adminfooter.php" ?>

