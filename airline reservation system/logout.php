<?php
//echo "hello";
session_start();
session_destroy();
header("location:/airline3/index.php"); //to redirect back to "index.php" after logging out
exit;
?>