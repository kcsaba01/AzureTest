<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy <0811994@rgu.ac.uk>
 * Date: 20/03/2016
 * Time: 22:04
 * Main page for standard users
 */
include("/utility/check.php");
    if ($login_user =="admin")
        {header("location: adminpage.php");
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
            <th><a href="utility/logout.php"> <img align="left" id="bus_logo" height=150 src="businesslogo.png" alt="NoName Company Logo" /></th>
            <th><H1 align="right"><i>Welcome to NoName Company</i></H1></th>
        </tr>
    </table>
</header>
<main>
    <div align="center">
        <br><br>
        <div class="adminBox">
            <h3>Select Task</h3>
            <br><br>
            <table style="width:300">

                <tr>
                    <td><a href="Bugs/retrieve_bug.php"> <H3 align=center style="color:lightgray; background-color: black; font-size: 25px ">Retrieve Bug</H3></td>
                </tr>
                <tr>
                    <td><a href="Bugs/new_bug.php"> <H3 align=center style="color:lightgray; background-color: black; font-size: 25px">Log New Bug</H3></td>
                </tr>
                <tr>
                    <td><a href="Bugs/fixed_bug.php"> <H2 align=center style="color:lightgray; background-color: black; font-size: 25px ">Mark Bug Fixed</H2></td>
                </tr>
                <tr>
                    <td><a href="Bugs/comment_bug.php"> <H2 align=center style="color:lightgray; background-color: black; font-size: 25px">Comment Bug</H2></td>
                </tr>
                <tr>
                    <td><a href="Bugs/add_att_bug.php"> <H2 align=center style="color:lightgray; background-color: black; font-size: 25px ">Add Attachment</H2></td>
                </tr>
            </table>
        </div>
    </div>
    <br><br>
    <br><br>
</main>
</body>
<footer>
    <table class="topBorder" style="width:100%">
        <tr>
            <td><H2 align="left"> <i>Contact Helpdesk</i></H2> <p align="left">512 University Street<br>Aberdeen AB10 7QG<br> 01224 26<b> 0000</b></p></td>
            <td> <a href="utility/logout.php" style="font-size:18px"> <H2 align="right"> <i>Logout?</i></H2></a></td>
        </tr>
    </table>

</footer>
</html>
