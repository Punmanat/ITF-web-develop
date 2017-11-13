<?php 
	session_start();
	if($_SESSION['username'] == "")
	{
		header("location:login.php");
		exit();
	}
 ?>

<!DOCTYPE html>
<div class="content row">
	<div class="col-lg-12">
		<header class="clearfix">
			<section>
				<h1 id='fontit'><img src="http://appcenter.bronto.com/wp-content/uploads/2017/03/9.1_CORP_appCenter_icon_cart_recovery@2x.png" width="60" height="60" class="d-inline-block align-top" alt=""> Alaikodai</h1>
				<section class="navbar navbar-default">
					<ul class="nav navbar-nav">
						<li id='fontit' style="font-size: 16px"><a href="user_page.php">Home</a></li>
						<li id='fontit' style="font-size: 16px"><a href="about_user.php">About Us</a></li>
						<li id='fontit' style="font-size: 16px"><a href="contact_user.php">Contact</a></li>
						<li class="dropdown" id='fontit' style="font-size: 16px"><a class="dropdown-toggle" data-toggle='dropdown' href="#">Product <span class='caret'></span></a>
							<ul class="dropdown-menu">
								<li id='fontit' style="font-size: 16px"><a href="livingroom.php">Living room</a></li>
								<li id='fontit' style="font-size: 16px"><a href="bedroom.php">Bedroom</a></li>
								<li id='fontit' style="font-size: 16px"><a href="kitchen.php">Kitchen</a></li>
								<li id='fontit' style="font-size: 16px"><a href="bathroom.php">Bathroom</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav pull-right">
						<li><a href="#" id='fontit'>Welcome <?php echo $_SESSION["fullname"];?></a></li>
						<li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
					</ul>
				</section>
			</section>
		</header>
	</div>
</div>