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
       <table border=1 style="width:100%; border-bottom:10px black">
         <tr>
             <th><img id="bus_logo" height=150 src="businesslogo.png" alt="NoName Company Logo"/></th>
             <th><H1 align="right"><i>Welcome to NoName Company</i></H1></th>
        </tr>
       </table>
    </header>
    <main>
        Main comes here
    </main>
</body>
    <footer>
        <table border=1 style="width:100%; border-top:10px black">
         <tr>
            <th> Contact Helpdesk</th>
            <th><H1 align="right"> Login/Registration page</H1></th>
         </tr>
        </table>
    </footer>
</html>