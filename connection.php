<?php

	$servername = "127.0.0.1:3308";
	$username = "root";
	$password = "";

	$link = mysqli_connect($servername, $username, $password, "mydiary2");
	if(mysqli_connect_error()){

		die("Problem...!!");
	}


?>
