<?php
include_once 'conn.php';

//chek if there is upload directory
$uploadDir = "Uploads";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

if ($_POST['upload']) {
    $fullname = $_POST['name'];
    $fileName = $_FILES['photo']['name'];


    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $allowedExt = array("jpg", "jpeg", "png", "gif");
    
    $tmpame = $_FILES['photo']['tmp_name'];
    $targetPath = "Uploads/" . $fileName;

    if (in_array($fileExt, $allowedExt)) {
        if (move_uploaded_file($tmpame, $targetPath)) {
            $query = "INSERT INTO uploads (Name,fileName) VALUES ('$fullname','$fileName')";
            if (mysqli_query($conn, $query)) {
                echo "Image was uploaded successfully";
            } else {
                echo "Something went wrong";
            }
        } else {
            echo "File is not uploaded";
        }
    } else {
        echo 'File extention not allowed';
    }
}
