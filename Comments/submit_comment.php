<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy <0811994@rgu.ac.uk>
 * Date: 20/03/2016
 * php file that will submit a comment to the DB
 */
$msg = ""; //Message to comunicate with the user
if(isset($_POST["submit"]))
{
    $bugid = $_POST["bugid"];
    $commdesc = $_POST["commdesc"];
    $postdate = date("Y-m-d"); //current date
    $bugid = mysqli_real_escape_string($db, $bugid); //removing special chars
    $commdesc = mysqli_real_escape_string($db, $commdesc);
    //retrieving the userID for the logged in user
    $useridq="SELECT userID FROM users WHERE username='$login_user'";
    $result1=mysqli_query($db,$useridq);
    $useridr=mysqli_fetch_assoc($result1);
    $userid=$useridr["userID"];
    //Adding the comment to the database
    $query = mysqli_query($db, "INSERT INTO comments (comments.desc, postDate, userID, bugID) VALUES ('$commdesc', '$postdate', '$userid', $bugid)") or die(mysqli_error($db));
        if($query)
        {
            $msg = "Thank You! The comment was added."; //confirming the update
        } else {$msg="Something went wrong!";} 
}
?>