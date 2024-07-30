<?php
include('connection.php');
if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

// Query to the hashed password for the given email
$encryptQuery = "SELECT * FROM admin_signup WHERE email = '$email'";
$encryptResult = mysqli_query($conn, $encryptQuery);
$encryptRow = mysqli_num_rows($encryptResult);

if($encryptRow){
    // fetch the result
    // $emailRow = mysqli_fetch_assoc($encryptResult);
    // $hashpassword = $emailRow['password'];
    // Verify password
    // if(password_verify($password, $hashpassword)){
        session_start();
        $_SESSION['email'] = $email;
        echo "<script>alert('login successful');window.location = '../views/admindashboard.php'</script>";
    } 
} else{
    echo "<script>alert('login failed');window.location = '../views/adminlogin.html'</script>";
}



    // // VERIFY PASSWORD
    // $encryptPassword = password_verify($password, $hashPassword);
    // if($encryptPassword){
    //  echo "password is  valid";
    // } else{
    //     echo "password is INvalid";
    // }


    // $query = "SELECT * FROM admin Where email = '$email' AND password = '$encryptPassword'";
    // $result = mysqli_query($conn, $query);
    // $rows = mysqli_num_rows($result);
    // if($rows > 0){

    //     session_start();
    //     $_SESSION['email'] = $email;
    //     echo "<script>alert('login successful');window.location = '../views/admindashboard.php'</script>";
    // }else{
    //     echo "<script>alert('login failed');window.location = '../views/adminlogin.html'</script>";
    // }
    

?>