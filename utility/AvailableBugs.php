<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy 0811994@rgu.ac.uk
 * Date: 20/03/2016
 * Time: 00:07
 */
include("../utility/connection.php");
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
    <?php
    $sql = "SELECT * FROM bugs";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<pre>'; print_r($row); echo '</pre>';
            //  echo $row;
            //echo "Bug ID: " . $row["bugID"];
            //echo "<br>Title: " . $rrow["title"];
            //echo "<br>Description: " . $rrow["desc"];
            //echo "<br>Post Date: " . $rrow["postDate"] . "  Fixed Date: " . $rrow["fixDate"];
            //echo "<br>Reported by: " . $rrow["userID"];
            //if ($rrow["fixed"] == 0) {$rfixed='Not Fixed';}
            //else $rfixed='Fixed';
            //if ($rrow["approved"] == 0) {$rapproved = 'Not approved';}
            //else $rapproved = 'Approved';
            //echo "<br>Fixed Status: " . $rfixed . "    Approved Status: " . $rapproved;
        }
    } else {
        echo "0 results";
    }
    ?>
</main>
</body>
<footer>
    <table class="topBorder" style="width:100%">
        <tr>
            <td><H2 align="left"> <i>Contact Helpdesk</i></H2> <p align="left">512 University Street<br>Aberdeen AB10 7QG<br> 01224 26<b> 0000</b></p></td>
            <td><H2 align="center"> <i> Available bugs</i></H2></td>
            <td><H2 align="right"> <bi>Comment Bug</bi></H2></td>
        </tr>
    </table>
</footer>
</html>