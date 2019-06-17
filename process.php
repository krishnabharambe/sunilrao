<?php
require('dbm.php');

if (isset($_POST['mainHeader'])) {
    $destination_image_name = uniqid();
    $file   = $_FILES['imageFileName'];
    $file_name = $_FILES['imageFileName']['name'];
    $file_size =$_FILES['imageFileName']['size'];
    $file_tmp =$_FILES['imageFileName']['tmp_name'];
    $file_type=$_FILES['imageFileName']['type'];
    $file_error = $_FILES['imageFileName']['error'];

    $fileExt = explode('.',  $file_name);
    $fileActualExt = strtolower(end($fileExt));
    
    $allowed = array('jpg','jpeg','png');
    
    if (in_array($fileActualExt, $allowed)) {
        
        if ($file_error === 0) {
            
            if ($file_size < 5000000) {
                $filenamenew = $destination_image_name.".".$fileActualExt;
                $fileDestination = 'upload/'.$filenamenew;
                move_uploaded_file($file_tmp, $fileDestination);


                $statement = $connection->prepare("INSERT into mainHeader (imagename,ext) VALUES(?,?)");
                        $result = $statement->execute([$destination_image_name,$fileActualExt]);
                        if($result){
                            header("Location: index.php?msg=added");
                            exit(); 
                        }else{
                            print_r($statement->errorInfo());
                            // header("Location: cake.php?msg=queryError");
                            // exit();
                        }

                // end 
            }
    
        }else{
            echo 'error whi;e uploading';
        }
    }else{
        echo "invalid ext";
    }
}


if (isset($_POST['aboutevent'])) {
    $description = $_POST['description'];
    $statement = $connection->prepare("INSERT into aboutevent (description) VALUES(?)");
    $result = $statement->execute([$description]);
    if($result){
        header("Location: index.php?msg=added");
        exit(); 
    }else{
        print_r($statement->errorInfo());
        // header("Location: cake.php?msg=queryError");
        // exit();
    }


}