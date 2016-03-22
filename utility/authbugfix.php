<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy <0811994@rgu.ac.uk>
 * Date: 20/03/2016
 * Time: 22:05
 * Authorises a user
 */
include('connection.php');
$msg = "";
if(isset($_POST["submit"]))
{
    if(empty($_POST["title"]))
    {
        $msg = "Please input a bug title.";
    }
    else
    {
        $title = $_POST['title'];
        $title = mysqli_real_escape_string($db, $$title);
        $sql = "SELECT title FROM bugs WHERE title='$title'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if (mysqli_num_rows($result) != 1) //checking whether the user exist
        {
            $msg = "Sorry...There is no bug with " . $title . " title";
        } else {
            //adding the approved flag
            $query = mysqli_query($db, "UPDATE bugs SET approved=1 WHERE title='$title'") or die(mysqli_error($db));
            if ($query) {
                $msg = "Bug " . $title . " was successfully approved!";
            }

        }
    }
}
?>