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
            	<section class="navbar navbar-default">
                    <ul class="nav navbar-nav">
                        <li id='fontit' style="font-size: 16px"><a href="user_page.php">Home</a></li>
                        <li id='fontit' style="font-size: 16px"><a href="about_user.php">About Us</a></li>
                        <li id='fontit' style="font-size: 16px"><a href="contact_user.php">Contact</a></li>
                        <li class="dropdown" id='fontit' style="font-size: 16px"><a class="dropdown-toggle" data-toggle='dropdown' href="#">Product <span class='caret'></span></a>
                            <ul class="dropdown-menu">
                                <li id='fontit' style="font-size: 16px"><a href="livingroom_user.php">Living room</a></li>
                                <li id='fontit' style="font-size: 16px"><a href="bedroom_user.php">Bedroom</a></li>
                                <li id='fontit' style="font-size: 16px"><a href="kitchen_user.php">Kitchen</a></li>
                                <li id='fontit' style="font-size: 16px"><a href="bathroom_user.php">Bathroom</a></li>
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