<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy <0811994@rgu.ac.uk>
 * Date: 20/03/2016
 * Time: 22:04
 * Retrieve a bug from the database
 */
include("../utility/connection.php");
include("../utility/check.php");
$msg = "";
$rtitle="1";
$rdesc="3";
if(isset($_POST["submit"]))
{
    $rbugid = $_POST["rbugid"];
    $rsql = "SELECT * FROM bugs WHERE bugID=$rbugid";
    $rresult = mysqli_query($db, $rsql);
    if (mysqli_num_rows($rresult) > 0) {
    // output data of each row
    while($rrow = mysqli_fetch_assoc($rresult)) {
        echo "bugID: " . $rrow["bugID"]. " - Title: " . $rrow["title"]. " " . $rrow["bugs.desc"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
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
            <th><a href="/utility/logout.php"> <img align="left" id="bus_logo" height=150 src="/businesslogo.png" alt="NoName Company Logo"/></th>
            <th><H1 align="right"><i>Welcome to NoName Company</i></H1></th>
        </tr>
    </table>
</header>
<main>
    <?php echo $msg;?>
    <?php echo $rtitle;?>
    <?php echo $rdesc;?>
</main>
</body>
<footer>
    <table class="topBorder" style="width:100%">
        <tr>
            <td><H2 align="left"> <i>Contact Helpdesk</i></H2> <p align="left">512 University Street<br>Aberdeen AB10 7QG<br> 01224 26<b> 0000</b></p></td>
            <td><H2 align="right"> <bi>Comment Bug</bi></H2></td>
        </tr>
    </table>
</footer>
</html>
