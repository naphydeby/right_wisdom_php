<!-- <?php
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['image']['name']);
    $uploadok = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // CHECK IF IMAGE FILE IS AN ACTUAL IMAGE OR FAKE
    if(isset($_POST['upload'])){
      $check= getimagesize($_FILES['image']['temp_name']);
      if($check !== false){
        echo 'File is an image -'. $check['mime'] . '.';
        $uploadok = 1; 
      } else{
        echo 'file is not an image.';
        $uploadok = 0;
      }
    }

    // CHECK IF FILES ALREADY EXISTS
    if(file_exists($target_file)){
        echo ' sorry, file already exists.';
        $uploadok = 0;
    }
    // CHECK FILE SIZE
    if($_FILES['image']['size'] > 500000){
        echo ' sorry,your file is too large.';
        $uploadok = 0;
    }
    // ALLOW CERTAIN FILE FORMAT
    $allowed_types =['jpg','jpeg', 'png', 'gif'];
    if(!in_array($imageFileType, $allowed_types)){
        echo 'sorry, only JPG, JPEG, PNG, & GIF files are allowed';
        $uploadok = 0;
    }

    // CHECK IF $uploadisok is set to 0 by an error
    if($uploadisok == 0){
        echo ' sorry your file was not uploaded.';
    } else{
        // try to upload file
        if(move_uploaded_file($_FILES['image']['temp_name'], $target_file)){
            echo ' The file'.htmlspecialchars(basename($_FILES['image']['name'])) . 'has been uploaded.';
        } else{
            echo 'sorry, there was an error uploading your file.';
        }
    }

}



?> -->