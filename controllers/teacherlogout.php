<?php
 include"connection.php";
 session_start();

 if(isset($_POST['submit'])){
unset($_SESSION['email']);
session_destroy();
echo "<script> alert('logout successfully');window.location = '../views/teacherlogin.html' </script> ";
exit;
 }
 ?>