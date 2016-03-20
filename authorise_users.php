<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy <0811994@rgu.ac.uk>
 * Date: 20/03/2016
 * Time: 22:58
 */
include("check.php");
if ($login_user !="admin")
{
    echo "You are not authorised to view this page!";
    header("location: logout.php");
}
else echo "Welcome Admin!"
?>