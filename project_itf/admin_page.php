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
    <?php include 'link.php'; ?>
</head>

<body>
    <h2 id='fontit' align="center">Admin config</h2>
    <div class="container">
        <button type="button" class="btn btn-default center-block" "><a href="add_product.php ">Add Product</a></button>
		<hr>
		</div>
		<button type="button " class="btn btn-default center-block ""><a href="index.php">Log out</a></button>
    </div>
</body>

</html>