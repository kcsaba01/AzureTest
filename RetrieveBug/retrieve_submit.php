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
$rdesc="2";
if(isset($_POST["submit"]))
{
    $rbugid = $_POST["rbugid"];
    //$commdesc = $_POST["commdesc"];
    //$postdate = date("Y-m-d");
    $rbugid = mysqli_real_escape_string($db, $bugid);
    //$commdesc = mysqli_real_escape_string($db, $commdesc);
    //$sql="SELECT commentID FROM comments WHERE bugID='$bugid'";
    //Getting the login id for the logged in user
    $sql="SELECT bugID, title, bugs.desc,postDate, fix Date, fixed, userID, approved FROM users WHERE bugID='$rbugid'";
    $rresult=mysqli_query($db,$sql);
    if ($rresult)
    {
        $rresult1=mysqli_fetch_assoc($rresult);
        $rtitle=$rresult1["title"];
        $rdesc=$rresult1["bugs.desc"];
        $ruserid=$rresult1["userID"];
    } else {$msg="No bug with this ID";}
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
