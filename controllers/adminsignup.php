<?php
include ('connection.php');
if(isset($_POST['submit']))
{
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmpassword= mysqli_real_escape_string($conn, $_POST['confirmpassword']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $gender = mysqli_real_escape_string($conn, $_POST['Option']);
    if($confirmpassword != $password){
        echo "<script>alert('password does not match');window.location = '../views/adminsignup.html'</script>";
    }
    // validate gender
    $valid_gender = ['male', 'female','others'];
    if(!in_array($gender, $valid_gender)){
        die("invalid gender value.");
    }
    // hashing password
    // $hashPassword = password_hash($password, PASSWORD_BCRYPT);
    $checkQuery = "SELECT * FROM admin_signup WHERE email = '$email'";
    $checkResult = mysqli_query($conn, $checkQuery);
    $checkRow = mysqli_num_rows($checkResult);
    if($checkRow > 0){
        echo "<script>alert('Account already exist');window.location = '../views/adminsignup.html'</script>";
    } else{
    $sql="INSERT INTO admin_signup (firstname, lastname, password, email, gender) Value('$firstname', '$lastname', '$password','$email','$gender')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script> alert('Account created successfully');window.location ='../views/adminlogin.html'</script> ";
    } 
     else{
        echo 'Form not saved, contact admin';
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