<?php include "includes/adminheader.php" ?>
    <div id="wrapper">
       
   <?php 
        
        
     $count_user=usersonline();
        
        
        ?>    
       
       
       
       
       
        
        
    
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
                        
                    </div>
                </div>
                <!-- /.row -->
                       
                <!-- /.row -->

                
                
                
                
                
                <div class="row">
                    
      <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Break',      2],
          ['Meeting',  2],
          
        ]);

        var options = {
          title: ' Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <div id="piechart" style="width: auto; height: 500px;"></div>
      
                    
                    
                    
                </div>
                
                
                
                
                
                
                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        <?php include "includes/adminfooter.php" ?>

