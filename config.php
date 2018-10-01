<?php 

    $host="localhost"; //Add your SQL Server host here
	$user="root"; //SQL Username
	$pass="root"; //SQL Password
	$dbname="guestbook"; //SQL Database Name
	$con=mysqli_connect($host,$user,$pass,$dbname);
	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

?>