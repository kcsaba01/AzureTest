<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy <0811994@rgu.ac.uk>
 * Date: 20/03/2016
 * Time: 22:05
 */
include('connection.php');
session_start();
$user_check=$_SESSION['username'];

$ses_sql = mysqli_query($db,"SELECT username FROM users WHERE username='$user_check' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_user=$row['username'];

if(!isset($user_check))
{
    header("Location: register.php");
}
?>