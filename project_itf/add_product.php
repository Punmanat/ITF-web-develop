<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <?php include 'link.php'; ?>
</head>

<body>
    <script type="text/javascript">
    function fncSubmit() {
        if (document.getElementById('text').value == "") {
            alert('PLEASE INPUT DATA');
            return false;
        }
    }
    </script>
    <h2 id='fontit' align="center">Add Product to database</h2>
    <div class="container">
        <form method='post' action="add_product.php">
            <div class="form-group">
                <label id='fontit' for="username">Name:</label>
                <input type="text" class="form-control" name='name'>
            </div>
            <div class="form-group">
                <label id='fontit' for="username">Price:</label>
                <input type="text" class="form-control" name='price'>
            </div>
            <div class="form-group">
                <label id='fontit' for="username">Img:</label>
                <input type="text" class="form-control" name='img'>
            </div>
            <a class='btn btn-default' href="index.php" id='fontit'>Back</a>
            <input id='fontit click' type="submit" value='Add to database' class="btn btn-default">
        </form>
    </div>
    <?php 
		error_reporting(0);
		$con = mysqli_connect('10.0.103.0', 'punmanat', 'KDX123456', 'product');
		$name = $_POST['name'];
		$price = $_POST['price'];
		$img = $_POST['img'];
		$sql = "INSERT INTO showProduct (name, price, img)
		VALUES ('$name', '$price', '$img')";
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