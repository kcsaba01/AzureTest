<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy <0811994@rgu.ac.uk>
 * Date: 20/03/2016
 * Time: 22:00
 *
 */
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
    <form method="post" action="">
        <table width="100%" allign =center border="0" cellpadding="10" cellspacing="10">
            <tr>
                <td colspan="2" align="center" class="error"><?php echo $msg;?></td>
            </tr>
            <tr>
                <td style="font-weight: bold">
                    <div align="right"><label for="name">Bug title</label></div>
                </td>
                <td>
                    <input name="title" type="text" class="input" size="35"  required />
                </td>
            </tr>
            <tr>
                <td height="23" style="font-weight: bold">
                    <div align="right">
                        <label for="desc">Description</label>
                    </div>
                </td>
                <td>
                    <input name="desc" type="text" class="input" size="60" required />
                </td>
            </tr>
            <tr>
                <td height="23" style="font-weight: bold">
                    <div align="right">
                        <label for="postdate">Post Date</label>
                    </div>
                </td>
                <td>
                    <input name="postdate" type="date" class="input" size="35" required />
                </td>
            </tr>
            <tr>
                <td height="23" style="font-weight: bold">
                    <div align="right">
                        <label for="fixdate">Fix Date</label>
                    </div>
                </td>
                <td>
                    <input name="fixdate" type="date" class="input" size="35" />
                </td>
            </tr>
            <tr>
                <td height="23" style="font-weight: bold">
                    <div align="right">
                        <label for="fixed">Fixed?</label>
                    </div>
                </td>
                <td>
                    <input name="fixed" type="checkbox" class="input" size="35" />
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
            <td><H2 align="right"> <bi>Log New Bug</bi></H2></td>
        </tr>
    </table>
</footer>
</html>
