<?php
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
$msg="";
if(isset($_POST["submit"]))
{
//check for file content
    if (mime_content_type($_FILES["fileToUpload"]["tmp_name"]) == "text/plain")
    {
        $uploadOk = 1;
    } else
    {
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file))
{
    $msg = "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 100000)
{
    $msg = "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($fileType != "txt" && $fileType != "" )
{
    $msg = "Sorry, only files with txt extension or no extension are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0)
{
    $msg = "Sorry, your file does not meet the requirements.";
// if everything is ok, try to upload file
} else
{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
    {
        $msg = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else
    {
        $msg = "Sorry, there was an error uploading your file.";
    }
}
?>