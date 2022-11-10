<?php

session_start(); 
include('connection.php');

 	if (isset($_SESSION['id'])) {
 	}
 	else{

 		header('location:index.php');
 	}
?>

<html>
<title>Admin Panel</title>
<link rel="shortcut icon" href="sta_rosa.png">

<Style>
body {
	background-color: white;
}
</style>
<head>
<frameset rows="80%,5.5%" frameborder="0">

<frameset cols="20%,80%">
<frame src="modules.php" name="FraLink">
<frame src="Communication/dashboard.php" name="FraDisplay">
</frameset>
<frame src="footer.php" name="FraDisplay">

</frameset>
</head></html>