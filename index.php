<?php
/**
 * Created by PhpStorm.
 * User: Csaba Keresztessy <0811994@rgu.ac.uk>
 * Date: 20/03/2016
 * Time: 22:04
 * Login page for all users
 */
include('utility/login.php'); // Include Login Script
if ((isset($_SESSION['username']) != ''))
	{
		header('Location: home.php');
	}	
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
             <th><a href="utility/logout.php"> <img align="left" id="bus_logo" height=150 src="businesslogo.png" alt="NoName Company Logo"/></th>
             <th><H1 align="right"><i>Welcome to NoName Company</i></H1></th>
        </tr>
       </table>
    </header>
    <main>
        <div align="center">
            <br><br>
            <div class="loginBox"> <!--logn form, with style defined in the utility/style.css file-->
                <h3>Please login</h3>
                <br><br>
                <form method="post" action="">
                    <label>Username:</label><br>
                    <input type="text" name="username" placeholder="username" /><br><br><br>
                    <label>Password:</label><br>
                    <input type="password" name="password" placeholder="password" />  <br><br><br><br>
                    <input type="submit" name="submit" value="Login" />
                    <input type="submit" name="register" value="Register" />
                </form>
                <div class="error"><?php echo $error;?></div>
            </div>
        </div>
        <br><br>
        <H4> <b><i> Hint!After login, by clicking on the logo you can return to the main page</b></i></H4>
    </main>
</body>
<footer>
    <table class="topBorder" style="width:100%">
        <tr>
            <td><H2 align="left"> <i>Contact Helpdesk</i></H2> <p align="left">512 University Street<br>Aberdeen AB10 7QG<br> 01224 26<b> 0000</b></p></td>
            <td><H2 align="right"> <b> Login/Registration page</b></H2></td>
         </tr>
    </table>

</footer>
</html>