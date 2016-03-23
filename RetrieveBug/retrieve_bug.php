<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy <0811994@rgu.ac.uk>
 * Date: 20/03/2016
 * Time: 22:00
 *
 */
include("../utility/connection.php");
include("../utility/check.php");
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
    <form method="post" action="">
        <table width="100%" allign =center border="0" cellpadding="10" cellspacing="10">
            <tr>
                <td colspan="2" align="center" class="error"><?php echo $msg;?></td>
            </tr>
            <tr>
                <td style="font-weight: bold">
                    <div align="right"><label for="rbugid">Bug ID</label></div>
                </td>
                <td>
                    <input name="rbugid" type="number" class="input" size="25"  required />
                </td>
            </tr>
            <tr>
                <td height="23"></td>
                <td>
                    <div align="left">
                        <input type="submit" name="submit" value="Retrieve" />
                    </div>
                </td>
            </tr>
        </table>
    </form>
    <br><br><br><br><br><br>
   <H3>
    <?php
    if(isset($_POST["submit"]))
    {
        $rbugid = $_POST["rbugid"];
        $rsql = "SELECT * FROM bugs WHERE bugID=$rbugid";
        $rresult = mysqli_query($db, $rsql);
        if (mysqli_num_rows($rresult) > 0) {
            // output data of each row
            while ($rrow = mysqli_fetch_assoc($rresult)) {
                echo "Bug ID: " . $rrow["bugID"];
                echo "<br>Title: " . $rrow["title"];
                echo "<br>Description: " . $rrow["desc"];
                echo "<br>Post Date: " . $rrow["postDate"] . "  Fixed Date: " . $rrow["fixDate"];
                echo "<br>Reported by " . $rrow["userID"];
                if ($rrow["fixed"] == 0) {$rfixed='Not Fixed';}
                else $rfixed='Fixed';
                if ($rrow["approved"] == 0) {$rapproved = 'Not approved';}
                else $rapproved = 'Approved';
                echo "<br>Fixed Status: " . $rfixed . "  Approved Status: " . $rapproved;
            }
        } else {
            echo "0 results";
        }
    }
    ?>
   </H3>
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
