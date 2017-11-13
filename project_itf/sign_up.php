<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
	<?php include 'link.php' ?>
</head>
<body>
	<!-- check input -->
	<script type="text/javascript">
		function checkvalidate()
	{
	if (document.form1.username.value == ""){
		alert('Please fill username');
		document.form1.username.focus();
		return false;
	}

	if (document.form1.password.value == ""){
		alert('Please fill password');
		document.form1.password.focus();
		return false;
	}

	if (document.form1.fullname.value == ""){
		alert('Please fill fullname');
		document.form1.fullname.focus();
		return false;
	}

	if (document.form1.lastname.value == ""){
		alert('Please fill lastname');
		document.form1.lastname.focus();
		return false;
	}

	if (document.form1.address.value == ""){
		alert('Please fill address');
		document.form1.address.focus();
		return false;
	}
		document.form1.submit();
	}
	</script>


	<h1 id='fontit' align="center">Sign up</h1>
 	<div class='container'>
 	<!-- form -->
 	<form method="post" action="sign_up.php" name="form1" onsubmit="javascript:return checkvalidate();">
  		<div class="form-group">
    		<label id='fontit' for="username">Username:</label>
    		<input type="text" class="form-control" name='username'>
  		</div>
  		<div class="form-group">
    		<label id='fontit' for='password'>Password:</label>
    		<input type="password" class="form-control" name='password'>
  		</div>
  		<div class="form-group">
    		<label id='fontit' for="fullname">Fullname:</label>
    		<input type="text" class="form-control" name='fullname'>
  		</div>
  		<div class="form-group">
    		<label id='fontit' for="lastname">Lastname:</label>
    		<input type="text" class="form-control" name='lastname'>
  		</div>
  		<div class="form-group">
    		<label id='fontit' for="address">Address:</label>
    		<input type="text" class="form-control" name='address'>
  		</div>
  		<a class='btn btn-default' href="index.php" id='fontit'>Back</a>
  		<input id='fontit click' type="submit" value='sign up' class="btn btn-default">
		</form>
	</div>
	<?php 
		error_reporting(0); //Not show report
		$con = mysqli_connect('localhost', 'root', '', 'product');
		$username = $_POST['username'];
		$password = $_POST['password'];
		$fullname = $_POST['fullname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		if(!empty($username) && !empty($password) && !empty($fullname) && !empty($lastname) 
			&& !empty($address)){
			$sql = "INSERT INTO profile_signup (username, password, fullname, surname, address)
			VALUES ('$username', '$password', '$fullname', '$lastname', '$address')";
			$result = mysqli_query($con, $sql);
			if($result){
				echo '<script>alert("Successful")</script>';
			}
		}
		mysqli_close($con);
	 ?>
</body>
</html>