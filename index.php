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
    <img id="bus_logo" src="businesslogo.png" alt="NoName Company Logo"/>
    <div class="Page_title">
        <H1> NoName Company</H1>
    </div>
    </header>
    <main>
        Main comes here
    </main>
</body>
    <footer>
        Footer comes here
    </footer>
</html>