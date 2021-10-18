<?php
	session_start();
	session_destroy();
	
	header("location: ../../Homepage/home.php");
	echo"You have been Logged out <a href='home.php'>Click here to login</a>";
	?>