<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy <0811994@rgu.ac.uk>
 * Date: 20/03/2016
 * Time: 22:00
 * Page where admin can authorise users
 */
 //if the user is not admin, a not authorised page is displayed
include ("utility/authuser.php");
include("utility/check.php");
if ($login_user !="admin") //check if the user is admin, if not a Not Authorised page is displayed
{
    header("location: /noauth.php");
}
else
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to NoName Company</title>
    <link rel="stylesheet" href="utility/style.css" type="text/css" />
</head>
<body>
<header>
    <table class="bottomBorder" style="width:100%">
        <tr>
            <th><a href="home.php"> <img align="left" id="bus_logo" height=150 src="businesslogo.png" alt="NoName Company Logo"/></th>
            <th><H1 align="right"><i>Welcome to NoName Company</i></H1></th>
        </tr>
    </table>
</header>
<main>
    <div align="center">
        <br><br>
        <div class="adminBox">
            <h3>Authorise user</h3>
            <br><br>
            <form method="post" action=""> <!--form to read the username-->
                <label>Username:</label><br>
                <input type="text" name="username" placeholder="username" /><br><br><br><br><br>
                <input type="submit" name="submit" value="Authorise" />
            </form>
            <div class="error"><?php echo $msg;?></div>
        </div>
    </div>
    <br><br><br><br><br>
</main>
</body>
<footer>
    <table class="topBorder" style="width:100%">
        <tr>
            <td><H2 align="left"> <i>Contact Helpdesk</i></H2> <p align="left">512 University Street<br>Aberdeen AB10 7QG<br> 01224 26<b> 0000</b></p></td>
            <td><a href="utility/AvailableUsers.php"><H2 align="center"> Available Users</H2></td>
            <td><H2 align="right"> <bi> User auth. page</bi></H2></td>
        </tr>
    </table>

</footer>
</html>