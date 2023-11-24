<?php 
    $target_dir = "./img/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;

    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (isset($_POST["submit"])) {
        $checkMimeType = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($checkMimeType !== false) {
            echo "File is an image";
            $uploadOk = 1;
        }
        else {
            header("Location: ./cms.php?error=image not valid");
            $uploadOk = 0;
        }
    }

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    

    if ($uploadOk == 0) {
        header("Location: ./cms.php?error=Upload Failed");

    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
        echo "Sorry, there was an error uploading your file.";
        }
    }

?>