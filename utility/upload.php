<?php
include("../utility/connection.php");
include("../utility/check.php");
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
    //retrieving the user ID of the logged in user
    $ubugid=$_POST["bugID"];
    $uuseridq="SELECT userID FROM users WHERE username='$login_user'";
    $uresult1=mysqli_query($db,$uuseridq);
    $uuseridr=mysqli_fetch_assoc($uresult1);
    $uuserid=$uuseridr["userID"];
    $ufilename=basename($_FILES["fileToUpload"]["name"]);
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
if ($uploadOk != 0)
{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
    {
        $msg = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $query = mysqli_query($db, "INSERT INTO attachments (URL, userID, bugID) VALUES ('$ufilename', '$uuserID', $ubugid)") or die(mysqli_error($db));
        if($query)
        {
            $msg = "Thank You! The comment was added."; //confirming the update
        } else {$msg="Upload successful. Error updating the database";}
    } else
    {
        $msg = "Sorry, there was an error uploading your file.";
    }
} else

?>