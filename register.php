<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy <0811994@rgu.ac.uk>
 * Date: 20/03/2016
 * Registration page for new users
 */
include("utility/connection.php");
include("utility/submit.php");
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="utility/style.css">
</head>

<body>
<header>
    <table class="bottomBorder" style="width:100%">
        <tr>
            <th><a href="utility/logout.php"> <img align="left" id="bus_logo" height=150 src="businesslogo.png" alt="NoName Company Logo"/></th>
            <th><H1 align="right"><i>Welcome to NoName Company</i></H1></th>
        </tr>
    </table>
</header>
<main>
<!--registration form with some mandatory fields-->
<form method="post" action="">
    <table width="100%" allign =center border="0" cellpadding="10" cellspacing="10">
            <tr>
                <td colspan="2" align="center" class="error"><?php echo $msg;?></td>
            </tr>
            <tr>
                <td style="font-weight: bold">
                    <div align="right"><label for="name">Username</label></div>
                </td>
                <td>
                    <input name="name" type="text" class="input"required />
                </td>
            </tr>
            <tr>
                <td height="23" style="font-weight: bold">
                    <div align="right">
                        <label for="email">Email</label>
                    </div>
                </td>
                <td>
                    <input name="email" type="email" class="input" required />
                </td>
            </tr>
            <tr>
                <td height="23" style="font-weight: bold">
                    <div align="right">
                        <label for="password">Password</label>
                    </div>
                </td>
                <td>
                    <input name="password" type="password" class="input" required />
                </td>
            </tr>
            <tr>
                <td height="23" style="font-weight: bold">
                    <div align="right">
                        <label for="phone">Phone (1000-9999)</label>
                    </div>
                </td>
                <td>
                    <input name="phone" type="number" min=1000 max=9999 class="input" required />
                </td>
        </tr>
            <tr>
                <td height="23"></td>
                <td>
                    <div align="left">
                        <input type="submit" name="submit" value="Register!" />
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
            <td><H2 align="right"> <bi> Login/Registration page</bi></H2></td>
        </tr>
    </table>

</footer>
</html>
