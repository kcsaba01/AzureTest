<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy <0811994@rgu.ac.uk>
 * Date: 20/03/2016
 * Time: 19:55
 */
session_start();
include("utility/connection.php"); //Establishing connection with the database

$error = ""; //Variable for storing errors.
if(isset($_POST["register"])) {header("location:register.php");} //loads the registration page
if(isset($_POST["submit"]))
{
    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
        $error = "Both fields are required.";
    }else
    {
        // Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];

        // To protect from MySQL injection
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($db, $username);
        $password = mysqli_real_escape_string($db, $password);
        $password = md5($password);

        //Check username and password from database and also if the user was approved by an admin
        $sql="SELECT userID FROM users WHERE username='$username' and password='$password' and approved=1";
        $result=mysqli_query($db,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC) ;

        //If username and password exist in our database and the account was approved then create a session.
        //Otherwise echo error.

        if(mysqli_num_rows($result) == 1)
        {
            $_SESSION['username'] = $username; // Initializing Session
            header("location: home.php"); // Redirecting To Other Page
        }else
        {
            $error = "Incorrect username/password or the account waits for approval";
        }

    }
}
?>