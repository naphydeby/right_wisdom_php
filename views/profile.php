<?php
include "../controllers/connection.php";
session_start();
if(!isset($_SESSION['email']))
    header("Location:teacherlogin.html");
$email=$_SESSION['email'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='2'>
        <tr>
            
            <th>firstname</th>
            <th>lastname</th>
            <th>Password</th>
            <th>confirmpassword</th>
            <th>email</th>
            <th>gender</th>
        </tr>

        <?php
        $query ="SELECT * FROM admin WHERE email='$email' ";
        $result=mysqli_query($conn, $query);
        $rows=mysqli_num_rows($result);
        if($rows > 0){
            while($data=mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$data['firstname']."</td>";
                echo "<td>".$data['lastname']."</td>";
                echo "<td>".$data['password']."</td>";
                echo "<td>".$data['confirmpassword']."</td>";
                echo "<td>".$data['email']."</td>";
                echo "<td>".$data['gender']."</td>";
                
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>
