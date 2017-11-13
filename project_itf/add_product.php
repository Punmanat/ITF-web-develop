<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<script type="text/javascript">
	function fncSubmit()
	{
    	if(document.getElementById('text').value == "")
    	{
        	alert('PLEASE INPUT DATA');
        	return false;
    	}
	}	
</script>
 	<h2>Add Product to database</h2>
	<form method='post' action="add_product.php">
	Id: <input type="text" name="id"><br>
	Name: <input type="text" name="name"><br>
	Price: <input type="text" name="price"><br>
	Img: <input type="text" name="img"><br>
	<input type="submit">
	</form>
	<?php 
		$con = mysqli_connect('localhost', 'root', '', 'product');
		$id = $_POST['id'];
		$name = $_POST['name'];
		$price = $_POST['price'];
		$img = $_POST['img'];
		$sql = "INSERT INTO showProduct (id, name, price, img)
		VALUES ($id,'$name', '$price', '$img')";
		$result = mysqli_query($con, $sql);
		if($result){
			echo '<script>alert("Add success");</script>';
		}
		else{
			echo '<script>alert("Fail")</script>';
		}
		mysqli_close($con);
	 ?>
</body>
</html>