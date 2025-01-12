<?php 
session_start();
session_destroy();
echo "<script>alert('Logout')</script>";
echo "<script>window.location='index.php'</script>";

 ?>