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
<title>PHP Login Form with Session</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>


<body>
    <header>
    The header comes here
    </header>
    <main>
        Main comes here
    </main>
</body>
    <footer>
        Footer comes here
    </footer>
</html>