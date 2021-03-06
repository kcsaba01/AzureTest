<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy <0811994@rgu.ac.uk>
 * Date: 20/03/2016
 * Authorises a user. Only for "admin user"
 */
include('connection.php');
$msg = ""; //message to communidate with the user
if(isset($_POST["submit"]))
{
    if(empty($_POST["username"]))
    {
        $msg = "Please input a username.";
    }
    else
    {
        $username = $_POST['username'];
        $username = mysqli_real_escape_string($db, $username); //removing special chars
        $sql = "SELECT username FROM users WHERE username='$username'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if (mysqli_num_rows($result) != 1) //checking whether the user exist
        {
            $msg = "Sorry...There is no " . $username . " user";
        } else {
            //adding the approved flag
            $query = mysqli_query($db, "UPDATE users SET approved=1 WHERE username='$username'") or die(mysqli_error($db));
            if ($query) {
                $msg = $username . " was successfully approved!";
            }
        }
    }
}
?>