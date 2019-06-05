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
                            case 'add_user';include "includes/add_user.php";
                                break;
                            case 'edit_user'; include "includes/edit_user.php";
                                break;
                            case '34';echo "nice";
                                break;
                            case '85'; include "beauti";
                                break;
                            default:
                                include "includes/viewallusers.php";
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

