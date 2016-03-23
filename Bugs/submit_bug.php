<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy <0811994@rgu.ac.uk>
 * Date: 20/03/2016
 * Time: 22:04
 * submitting a bug to the database
 */
$msg = "";
$loggeduser = $_SESSION['username'];
if(isset($_POST["submit"]))
{
    $title = $_POST["title"];
    $descr = $_POST["desc"];
    $postdate = $_POST["postdate"];
    $fixdate = $_POST["fixdate"];
    $fixed = $_POST["fixed"];
    if ($fixed=='on') {$fixedint=1;}
    else {$fixedint=0;}
    //$fixedint = (int)($fixed);
    $postdate = date("Y-m-d", strtotime($postdate));
    $fixdate = date("Y-m-d", strtotime($fixdate));
    $title = mysqli_real_escape_string($db, $title);
    $descr = mysqli_real_escape_string($db, $descr);
    $sql="SELECT title FROM bugs WHERE title='$title'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1)
    {
        $msg = "Sorry...There is already a bug with this title";
    }
    else
    {
        $query = mysqli_query($db, "INSERT INTO bugs (title, bugs.desc, postDate, fixDate, fixed, userID) VALUES ('$title', '$descr', '$postdate', '$fixdate', $fixedint , 131)") or die(mysqli_error($db));
        if($query)
        {
            $msg = "Thank You! The bug has been logged.". $loggeduser;
        }

    }
}
?>