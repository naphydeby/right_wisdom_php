<?php
include('connection.php');
if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    $query = "SELECT * FROM admin_signup Where email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);
    if($rows > 0){

        session_start();
        $_SESSION['email'] = $email;
        echo "<script>alert('login successful');window.location = '../views/dashboard.php'</script>";
    }else{
        echo "<script>alert('login failed');window.location = '../views/teacherlogin.html'</script>";
    }
    
}
?>