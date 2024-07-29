<?php
include ('connection.php');
if(isset($_POST['submit']))
{
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
   
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username= mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $studentid= mysqli_real_escape_string($conn, $_POST['studentid']);
    $image = mysqli_real_escape_string($conn, $_POST['image']);

   

    $checkQuery = "SELECT * FROM teacher_addguardian WHERE email = '$email' AND firstname = '$firstname'";
    $checkResult = mysqli_query($conn, $checkQuery);
    $checkRows = mysqli_num_rows($checkResult);
    if($checkRows > 0){
        echo "<script>alert('guardianlready exist');window.location = '../views/viewguardian.php'</script>";
    } else{
    $sql="INSERT INTO teacher_addguardian (firstname, lastname, email, username, password, studentid, image) Value('$firstname', '$lastname', '$email','username','$password', '$studentid', '$image')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script> alert('guardian created successfully');window.location ='../views/dashboard.php'</script> ";
    } 
    

    }

    // $firstname = $_POST['firstname'];
    // $lastname = $_POST['lastname'];
    // $password = $_POST['password'];
    // $confirmpassword = $_POST['confirmpassword'];
    // $email = $_POST['email'];
    // $gender = $_POST['gender'];

    // $sql="INSERT INTO admin(firstname, lastname, password, confirmpassword, email,gender) Value('$firstname', '$lastname', '$password','$confirmpassword','$email','$gender')";
    // $result = mysqli_query($conn, $sql);
    // if ($result){
    //     echo 'Account created successfully';
    // } else{
    //     echo 'Account failed';
    // }
    





}

?>