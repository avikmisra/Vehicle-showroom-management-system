<?php
use Dompdf\Dompdf;
require 'vendor/autoload.php';
require ("connection.php");
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="src/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<?php
        
                           //$query1=mysqli_query($conn,"update ticket set payment_status='success' where id='$_GET[id]'");
                           $query=mysqli_query($conn,"select * from ticket where id='$_GET[id]'");
                           
                           $datas5=array();
                           if(mysqli_num_rows($query)>0)
                               {
                                   while($row=mysqli_fetch_assoc($query))
                                   {
                                        $datas5[]=$row;
                                   }
                               }
                           else
                               {
                                   $msg="no flights are there";
                                   $msgColor="alert-danger";
                               }
                               //print_r($datas4);
                               foreach ($datas5 as $data): ?>
         <div class="card mt-5 rounded">
                        <div class="card-header bg-primary text-white text-uppercase rounded">
                             <h2>   <?php echo $data['airline']; ?></h2>
                        </div>
                        <?php
                                $x=$data['depttime'];
                                //echo $x;
                                $y=(int)substr($x,0,2);
                                //echo $y;
                                $board1=$y-1;
                                $board=$board1.":".substr($x,3,2);
                                $book_id= $data['id'];
                               // echo $book_id;
                        ?>
                        <div class="card-body bg-danger">
                             <div class="row">
                                 <div class="col-xs-3">
                                        <div><img src="src/img/barcode.jpg" alt="hello" class="rotate-90 pt-5" style="height:85px;width:200px;"></div>
                                 </div>
                                 <div class="col-xs-3">
                                         <div><h6 class="pt-1 text-secondary ">Name</h6></div>
                                             <div class="text-uppercase"><h5><?php echo $data['name'];?></h5></div>
                                         <div><h6 class="pt-1 text-secondary ">From</h6></div>
                                             <div class="text-uppercase"><h5><?php echo $data['from1'];?></h5></div>
                                         <div><h6 class="pt-1 text-secondary ">To</h6></div>
                                             <div class="text-uppercase"><h5><?php echo $data['to1'];?></h5></div>
                                 </div>
                                 <div class="col-xs-3">
                                         <div><h6 class="pt-1 text-secondary ">Date</h6></div>
                                             <div class="text-uppercase"><h5><?php echo $data['date'];?></h5></div>
                                         <div><h6 class="pt-1 text-secondary ">Dept time</h6></div>
                                             <div class="text-uppercase"><h5><?php echo $data['depttime'];?></h5></div>
                                         <div><h6 class="pt-1 text-secondary ">Transaction status</h6></div>
                                             <div class="text-uppercase"><h5 class="text-success"><?php echo $data['payment_status'];?></h5></div>
                                 </div>
                                 <div class="col-xs-3">
                                         <div><h6 class="pt-1 text-secondary ">Flight no</h6></div>
                                             <div class="text-uppercase"><h5><?php echo $data['flight_no'];?></h5></div>
                                         <div><h6 class="pt-1 text-secondary ">Board Till</h6></div>
                                             <div class="text-uppercase"><h5><?php echo $board;?></h5></div>
                                         <div><h6 class="pt-1 text-secondary ">transaction Id</h6></div>
                                             <div class="text-uppercase"><h5><?php echo "HIFL".$data['id'];?></h5></div>

                                </div>
                             </div>
                        </div>
         </div>
         <?php endforeach?>
    
    </body>
    </html>
<?php
$template = ob_get_clean();
$dompdf=new Dompdf();
$dompdf->load_html($template);
$dompdf->setPaper('A4','landscape');

ini_set('memory_limit','128M');
$dompdf->render();
$dompdf->stream('invoice.pdf');
?>
<script src="src/js/jquery.min.js"></script>
        <script src="src/js/popper.min.js"></script>
        <script src="src/js/bootstrap.min.js"></script>
        <script src="src/js/app2.js"></script>
        <script src="src/js/admin.js"></script>
        <script src="src/js/payment.js"></script>
        
</body>
</html>