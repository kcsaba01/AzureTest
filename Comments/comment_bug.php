<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy <0811994@rgu.ac.uk>
 * Date: 20/03/2016
 * Time: 22:00
 *
 */
include("../utility/connection.php"); //creating the DB connection
include("../utility/check.php"); //checking the logged in user identity
include("submit_comment.php"); //php file that actually will update the DB
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
    <form method="post" action="">
        <table width="100%" allign =center border="0" cellpadding="10" cellspacing="10">
            <tr>
                <td colspan="2" align="center" class="error"><?php echo $msg;?></td>
            </tr>
            <tr> <!--Bug ID field-->
                <td style="font-weight: bold">
                    <div align="right"><label for="bugid">Bug ID</label></div>
                </td>
                <td>
                    <input name="bugid" type="number" class="input" size="35" required />
                </td>
            </tr>
            <tr> <!-- Description of ID-->
                <td height="23" style="font-weight: bold">
                    <div align="right">
                        <label for="commdesc">Description</label>
                    </div>
                </td>
                <td>
                    <input name="commdesc" type="text" class="input" size="60" />
                </td>
            </tr>
            <tr>
                <td height="23"></td>
                <td>
                    <div align="left">
                        <input type="submit" name="submit" value="Save" />
                    </div>
                </td>
            </tr>
        </table>
    </form>
    <br><br><br><br><br><br>
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
