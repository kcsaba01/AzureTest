<?php
	include('login.php'); // Include Login Script

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
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <header>
       <table class="bottomBorder" style="width:100%">
         <tr>
             <th><img align="left" id="bus_logo" height=150 src="businesslogo.png" alt="NoName Company Logo"/></th>
             <th><H1 align="right"><i>Welcome to NoName Company</i></H1></th>
        </tr>
       </table>
    </header>
    <main>
        <div align="center">
            <h1 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:32px;">PHP Login Form with Session</h1>
            <div class="loginBox">
                <h3>Login Form</h3>
                <br><br>
                <form method="post" action="">
                    <label>Username:</label><br>
                    <input type="text" name="username" placeholder="username" /><br><br>
                    <label>Password:</label><br>
                    <input type="password" name="password" placeholder="password" />  <br><br>
                    <input type="submit" name="submit" value="Login" />
                </form>
                <div class="error"><?php echo $error;?></div>
            </div>
        </div>
    </main>
</body>
    <footer>
        <table class="topBorder" style="width:100%">
         <tr>
            <th><H2 align="left">Contact Helpdesk</H2></th>
            <th><H2 align="right"> <i> Login/Registration page</i></H2></th>
         </tr>
        </table>
         <table style="100%">
         <tr>
            <td>512 University Street</td>
         </tr>
         <tr>
             <td>Aberdeen AB10 7QG</td>
         </tr>
         <tr>
             <td> 01224 20 <b>0000</b></td>
         </tr>
        </table>
    </footer>
</html>