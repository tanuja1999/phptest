<?php
$target_dir = "phptest/";
$target_file= $target_dir . basename($_FILES["fileToUpload"]["tiger.jpg"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo(target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"]))
{
    $check = Getimagesize($_FILES["fileupload"]["tmp_name"]);
    if ($check !== false)
    {
        echo "File is an image - ". $check["mime"] . ".";
        $uploadsOk = 1 ;

    } else {
echo "File is not an image.";
$uploadOk = 0;
    }
}
// check if file already exists 
if (file_exists($target_file))
{
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// check file size 
if($_FILES["fileToUpload"]["size"]> 500000)
{
echo "Sorry, Your file is to large.";
$uploadOk = 0;
}
// Allow certain file formates
if ($imageFileType != "jpg" && $imageFileType!= "png")
?>