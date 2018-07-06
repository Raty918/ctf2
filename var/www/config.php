<?php

 $servername = "localhost";
 $username = "debian-sys-maint";
 $password = "lV53YbWMrFmuwBvT";
 $database = "ctf";

 // Create connection
 $db = mysqli_connect($servername, $username, $password, $database);


 // Check connection
 if (mysqli_connect_errno()){
	 echo "Failed to connect to MySQL: " . mysqli_connect_error();
	 die();
 }
// echo "connected successfully";
?> 


