<?php 
	session_start();
	if($_SESSION['username'] == "")
	{
		echo "Please Login!";
		header("location:login.php");
		exit();
	}
	elseif ($_SESSION['username'] != "admin") {
		echo "This page for Admin only!";
		header("location:login.php");
		exit();
	}
	session_destroy();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<button type="button" class="btn btn-danger"><a href="index.php">Log out</a></button>
</head>
<body>
</body>
</html>