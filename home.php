<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy <0811994@rgu.ac.uk>
 * Date: 20/03/2016
 * Time: 22:04
 */
include("check.php");
include('connection.php');
session_start();
$sql_auth="SELECT uid FROM users WHERE username='$login_user' and aproved=1";
$result1=mysqli_query($db,$sql_auth);
if (mysqli_num_rows($result1)==0)
{
    echo $result1;
}else
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
            <th><a href="logout.php"> <img align="left" id="bus_logo" height=150 src="businesslogo.png" alt="NoName Company Logo" /></th>
            <th><H1 align="right"><i>Welcome to NoName Company</i></H1></th>
        </tr>
    </table>
</header>
<main>
    <?php
    if ($login_user =="admin")
        {header("location: adminpage.php");
        }
    else
    ?>
    <h1 class="hello">Hello, <em><?php echo $login_user;?>!</em></h1>
    <br><br><br>
</main>
</body>
<footer>
    <table class="topBorder" style="width:100%">
        <tr>
            <td><H2 align="left"> <i>Contact Helpdesk</i></H2> <p align="left">512 University Street<br>Aberdeen AB10 7QG<br> 01224 26<b> 0000</b></p></td>
            <td> <a href="logout.php" style="font-size:18px"> <H2 align="right"> <i>Logout?</i></H2></a></td>
        </tr>
    </table>

</footer>
</html>
