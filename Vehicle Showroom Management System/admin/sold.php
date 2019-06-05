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
                        </h1>
                  <?php 
                        
                        if(isset($_GET['source']))
                        {
                            $source=$_GET['source'];
                        }
                        else
                        {
                            $source='';
                        }
                        switch($source)
                        {
                            case 'add_item';include "includes/add_item.php";
                                break;
                            case 'edit_item'; include "includes/edit_item.php";
                                break;
                            default:
                                include "includes/viewallsold.php";
                                break;
                                
                        }
                        
                        ?>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        <?php include "includes/adminfooter.php" ?>


