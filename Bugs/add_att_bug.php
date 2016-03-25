<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy <0811994@rgu.ac.uk>
 * Date: 20/03/2016
 * Adding an attachment to a bug
 */
include('../utility/upload.php');
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
            <th><a href="../home.php"> <img align="left" id="bus_logo" height=150 src="/businesslogo.png" alt="NoName Company Logo"/></th>
            <th><H1 align="right"><i>Welcome to NoName Company</i></H1></th>
        </tr>
    </table>
</header>
<main>
    <div align="center">
        <br><br>
        <div class="userBox">
        <h3>Upload a file</h3>
        <br><br>
        <form action="" method="post" enctype="multipart/form-data" >
            <label>Select file to upload:</label><br><br>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <br><br>
            <input type="submit" value="Upload File" name="submit"> <br>
        </form>
        <div class="error"><?php echo $msg;?></div>
        </div>
        <p> File naming convention: <b>bugID-username.txt<b>. A file name validation is not performed, however it will be easier to identify the file in the future</p>
    </div>
</main>
</body>
<footer>
    <table class="topBorder" style="width:100%">
        <tr>
            <td><H2 align="left"> <i>Contact Helpdesk</i></H2> <p align="left">512 University Street<br>Aberdeen AB10 7QG<br> 01224 26<b> 0000</b></p></td>
            <td><H2 align="right"> <bi> Add attachment</bi></H2></td>
        </tr>
    </table>
</footer>
</html>
