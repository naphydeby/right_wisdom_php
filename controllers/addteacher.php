<?php
include ('connection.php');
if(isset($_POST['submit']))
{
    
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $phonenumber= mysqli_real_escape_string($conn, $_POST['phonenumber']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $homeaddress = mysqli_real_escape_string($conn, $_POST['homeaddress']);
    $class = mysqli_real_escape_string($conn, $_POST['class']);
    $image = mysqli_real_escape_string($conn, $_POST['image']);

   

    $checkQuery = "SELECT * FROM admin_addteacher WHERE email = '$email' AND firstname = '$firstname'";
    $checkResult = mysqli_query($conn, $checkQuery);
    $checkRows = mysqli_num_rows($checkResult);
    if($checkRows > 0){
        echo "<script>alert('Teacher already exist');window.location = '../views/viewteacher.php'</script>";
    } else{
    $sql="INSERT INTO admin_addteacher ( firstname, lastname, phonenumber, email, homeaddress, class, image) Value( '$firstname', '$lastname', '$phonenumber','$email','$homeaddress', '$class', '$image')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script> alert('Teacher created successfully');window.location ='../views/admindashboard.php'</script> ";
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