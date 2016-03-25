<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy <0811994@rgu.ac.uk>
 * Date: 20/03/2016
 * submitting a bug to the database
 */
$msg = ""; //message variable to communicate with the user
if(isset($_POST["submit"]))
{
    $title = $_POST["title"];
    $descr = $_POST["desc"];
    $postdate = $_POST["postdate"];
    $fixdate = $_POST["fixdate"];
    $fixed = $_POST["fixed"];
    //Converting the read values to the DB format
    if ($fixed=='on') {$fixedint=1;}
    else {$fixedint=0;}
    $postdate = date("Y-m-d", strtotime($postdate));
    $fixdate = date("Y-m-d", strtotime($fixdate));
    $title = mysqli_real_escape_string($db, $title);
    $descr = mysqli_real_escape_string($db, $descr);
    //checking if the bug title already exists
    $sql="SELECT title FROM bugs WHERE title='$title'";
    //getting the user id of the logged in user
    $useridq="SELECT userID FROM users WHERE username='$login_user'";
    $result1=mysqli_query($db,$useridq);
    $useridr=mysqli_fetch_assoc($result1);
    $userid=$useridr["userID"];
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1) //if a bug with this title already exist, inform the user
    {
        $msg = "Sorry...There is already a bug with this title";
    }
    else //updating the database with the data provided by the user
    {
        $query = mysqli_query($db, "INSERT INTO bugs (title, bugs.desc, postDate, fixDate, fixed, userID) VALUES ('$title', '$descr', '$postdate', '$fixdate', $fixedint , $userid)") or die(mysqli_error($db));
        if($query)
        {
            $msg = "Thank You! The bug has been logged."; //Message that confirms the update
        }

    }
}
?>