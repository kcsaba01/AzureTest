<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy 0811994@rgu.ac.uk
 * Date: 20/03/2016
 * This is a helper file that will print all the records in the users table
 */
include("../utility/connection.php");
include("check.php");
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
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<header>
    <table class="bottomBorder" style="width:100%">
        <tr>
            <th><a href="../home.php"> <img align="left" id="bus_logo" height=150 src="/businesslogo.png" alt="NoName Company Logo"/></th>
            <th><H1 align="right"><i>Welcome to NoName Company</i></H1></th>
        </tr>
    </table>
</header>
<main>
    <?php
    //for security reasons the password field is left out
    $sql = "SELECT userID, username, email, phone, approved FROM users";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<pre>'; print_r($row); echo '</pre>';
        }
    } else {
        echo "0 records";
    }
    ?>
</main>
</body>
<footer>
    <table class="topBorder" style="width:100%">
        <tr>
            <td><H2 align="left"> <i>Contact Helpdesk</i></H2> <p align="left">512 University Street<br>Aberdeen AB10 7QG<br> 01224 26<b> 0000</b></p></td>
            <td><H2 align="center"> <i> Available users</i></H2></td>
            <td><H2 align="right"> <bi>Helper file</bi></H2></td>
        </tr>
    </table>
</footer>
</html>