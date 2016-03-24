<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy <0811994@rgu.ac.uk>
 * Date: 20/03/2016
 * Time: 22:00
 * Bug Fix Authorisation page for admin
 */
include("../utility/connection.php");
$msg = "";
if(isset($_POST["submit"]))
{
    if(empty($_POST["ftitle"]))
    {
        $msg = "Please input a bug title."; //title cannot be empty
    }
    else
    {
        $ftitle = $_POST['ftitle'];
        $fdate = $_POST["fdate"];
        //converting the date format
        $fdate = date("Y-m-d", strtotime($fdate));
        $title = mysqli_real_escape_string($db, $ftitle); //removing special char. from title
        $sql = "SELECT title FROM bugs WHERE title='$ftitle'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if (mysqli_num_rows($result) != 1) //checking whether the bug exist
        {
            $msg = "Sorry...There is no bug with " . $ftitle . " title";
        } else {
            //adding the approved flag
            $query = mysqli_query($db, "UPDATE bugs SET fixed=1, fixDate='$fdate' WHERE title='$title'") or die(mysqli_error($db));
            if ($query) {
                $msg = "Bug " . $ftitle . " was successfully marked as fixed!";
            }

        }
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to NoName Company</title>
    <link rel="stylesheet" href="/utility/style.css" type="text/css" />
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
<div align="center">
    <br><br>
    <div class="userBox">
        <h3>Mark Bug fixed</h3>
        <br><br>
        <form method="post" action="">
            <label>Bug title:</label><br>
            <input type="text" name="ftitle" placeholder="Bug title" />
            <label> Fixed date:</label>
            <input type="date" name="fdate" />
            <br><br>
            <input type="submit" name="submit" value="Fixed" />
        </form>
        <div class="error"><?php echo $msg;?></div>
    </div>
</div>
<br><br>
<br><br><br>
</main>
</body>
<footer>
    <table class="topBorder" style="width:100%">
        <tr>
            <td><H2 align="left"> <i>Contact Helpdesk</i></H2> <p align="left">512 University Street<br>Aberdeen AB10 7QG<br> 01224 26<b> 0000</b></p></td>
            <td><H2 align="right"> <bi>Mark Bug Fixed</bi></H2></td>
        </tr>
    </table>
</footer>
</html>
