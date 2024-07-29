<?php
include('connection.php');
if(isset($_POST['submit']))
{
    $rollno= mysqli_real_escape_string($conn, $_POST['rollno']);
    $age= mysqli_real_escape_string($conn, $_POST['age']);
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $homeaddress = mysqli_real_escape_string($conn, $_POST['homeaddress']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $image = mysqli_real_escape_string($conn, $_POST['image']);
    

    $checkQuery = "SELECT * FROM teacheraddstudent WHERE email = '$email' AND firstname = '$firstname'";
    $checkResult = mysqli_query($conn, $checkQuery);
    $checkRows = mysqli_num_rows($checkResult);
    if($checkRows > 0){
        echo "<script>alert('student already exist');window.location = '../views/viewallstudentteacher.php'</script>";
    } else{
    $sql="INSERT INTO teacheraddstudent (rollno,age, firstname, lastname, homeaddress, email, image) Value('$rollno', '$age', '$firstname', '$lastname', '$homeaddress', '$email', '$image')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script> alert('student created successfully');window.location ='../views/dashboard.php'</script> ";
    } 
    

    }

//     }

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







//  // To upload file to database
//  $target_dir = "../uploads/";
//  $target_file = $target_dir.basename($_FILES["image"]["name"]);
//  $uploadok = 1;
//  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//  // To check if image is the actual image or fake image

//  if(isset($_POST["submit"])){
// $check = getimagesize($_FILES["image"]["tmp_name"]);
// if($check !== false){
//  echo "file is an image".$check["mime"]. ".";
//  $uploadok = 1;
// } else{
//  echo "file is not an image";
//  $uploadok = 0;
// }

//  }

//  // To check if file already exixts

//  if(file_exists($target_file)){
//      echo "sorry, file already exist";
//      $uploadok = 0;
//  }
//  // Check file size
//  if($_FILES["image"]["size"] > 500000){
//  echo "sorry, your file is too large";
//  $uploadok = 0;
//  }
// // Allow certain file formats
// if($imageFileType !="jpg" && $imageFileType != "png" && $imageFileType != "png"
// && $imageFileType != "jpeg" && $imageFileType != "gif"){
//     echo " sorry, only JPG, JPEG, PNG,& GIF files are allowed.";
//     $uploadok = 0;
// }

// // To check if upload is set to 0 by an error
// if($uploadok == 0){
//     echo "sorry your file was not uploaded.";
// }
// // if everything is ok try to upload file
// else{
//     if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
//         echo "the file".htmlspecialchars(basename($_FILES["image"]["name"]))."has been uploaded.";
//     }
//     // To save the file path and other form data to database
//     else{
//         echo "sorry, there was an error uploading your file";
//     }
// }


?>