<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <?php include 'link.php' ?>
</head>

<body>
    <h1 align="center" id='fontit'>Login</h1>
    <!-- check input -->
    <script type="text/javascript">
    function checkvalidate() {
        if (document.form2.username_login.value == "") {
            alert('Plese fill username');
            document.form2.username.focus();
            return false;
        }

        if (document.form2.password_login.value == "") {
            alert('Plese fill password');
            document.form2.password.focus();
            return false;
        }
    }
    </script>
    <div class='container'>
        <form method="post" action="login.php" name="form2" onsubmit="javascript:return checkvalidate();">
            <div class="form-group">
                <label id='fontit' for="username">Username:</label>
                <input type="text" class="form-control" name='username_login'>
            </div>
            <div class="form-group">
                <label id='fontit' for='password'>Password:</label>
                <input type="password" class="form-control" name='password_login'>
            </div>
            <a class='btn btn-default' href="index.php" id='fontit'>Back</a>
            <input id='fontit click' type="submit" value='sign in' class="btn btn-default">
        </form>
    </div>
    <?php
		error_reporting(0);
		session_start();
		$con = mysqli_connect('10.0.103.0', 'punmanat', 'KDX123456', 'product');
		$username = $_POST['username_login'];
		$password = $_POST['password_login'];
		$count = 0;
		$sql = "SELECT * FROM profile_signup";
		$result = mysqli_query($con, $sql);
		while($check = mysqli_fetch_array($result)){
			if($check['username']==$username and $check['password']==$password){
				$_SESSION["username"] = $check["username"];
		 		$_SESSION["password"] = $check["password"];
		 		$_SESSION["fullname"] = $check["fullname"];
		 		session_write_close();
				header("location:user_page.php");
			}
			else{
				$count = 1;
			}

		}
		if($count == 1){
			echo '<script>alert("Incorrect!")</script>';
			exit();
		}
		mysqli_close($con);
?>
</body>

</html>