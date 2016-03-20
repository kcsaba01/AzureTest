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
        Main comes here
    </main>
</body>
    <footer>
        <table class="topBorder" style="width:100%">
         <tr>
            <th> Contact Helpdesk</th>
            <th><H1 align="right"> Login/Registration page</H1></th>
         </tr>
        </table>
    </footer>
</html>