<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy <0811994@rgu.ac.uk>
 * Date: 20/03/2016
 * Time: 22:05
 * Checks if a user is already registered
 */
$msg = "";
if(isset($_POST["submit"]))
{
    $name = $_POST["username"];
    $name = mysqli_real_escape_string($db, $name);
    $sql="SELECT username FROM users WHERE username='$name'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 0) //checking whether the user exist
    {
        $msg = "Sorry...There is no user with this username...";
    }
    else
    {
        //adding the approved flag
        $query = mysqli_query($db, "UPDATE users SET approved=1 WHERE username='$name'")or die(mysqli_error($db));
        if($query)
        {
            $msg = "Username $name was successfully approved!";
        }

    }
echo $msg;
}
?>