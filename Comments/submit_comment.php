<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy <0811994@rgu.ac.uk>
 * Date: 20/03/2016
 * Time: 22:04
 * submitting a comment to the database
 */
$msg = "";
if(isset($_POST["submit"]))
{
    $bugid = $_POST["bugid"];
    $commdesc = $_POST["commdesc"];
    $postdate = date("Y-m-d");
    $bugid = mysqli_real_escape_string($db, $bugid);
    $commdesc = mysqli_real_escape_string($db, $commdesc);
    //$sql="SELECT commentID FROM comments WHERE bugID='$bugid'";
    //Getting the login id for the logged in user
    $useridq="SELECT userID FROM users WHERE username='$login_user'";
    $result1=mysqli_query($db,$useridq);
    $useridr=mysqli_fetch_assoc($result1);
    $userid=$useridr["userID"];
    $query = mysqli_query($db, "INSERT INTO comments (comments.desc, postDate, userID, bugID) VALUES ('$commdesc', '$postdate', '$userid', $bugid)") or die(mysqli_error($db));
        if($query)
        {
            $msg = "Thank You! The comment was added.";
        } else {$msg="Something went wrong!";}
}
?>