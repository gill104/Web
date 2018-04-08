<?php
/* Directory for upload */
$target_dir = "uploads/";

/* Path to Upload to */
$target_file = $target_dir . 
basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;

/* Gets the file extension lowercased */
$imageFileType = 
    strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//check if image file is a actual image or fake image
if(isset($_POST["submit"])){
                         //$_FILES[Userfile][Name]
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false){
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else{
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

//check if file already exists
if(file_exists($target_file)){
    echo "File Exists!";
    $uploadOk = 0;
}

//check file size 500 KB
if($_FILES["fileToUpload"]["size"] > 500000){
    echo "File larger than 500KB!";
    $uploadOk = 0;
}

//Limit File type
if($imageFileType != "jpg" && $imageFileType != "png" &&
   $imageFileType != "jpeg"){
       echo "File needs to be .jpg/.png/.jpeg";
       $uploadOk = 0;
   }

//check if $upload is set to 0 by an error
if($uploadOk = 0)
{
    echo "File not uploaded";
} else{
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)){
        echo "File " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
    } else{
        echo "Error while uploading";
    }
}
?>