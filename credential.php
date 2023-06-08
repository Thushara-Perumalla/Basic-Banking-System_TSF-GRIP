  
<?php
/*
connections credential
*/
	$servername = "localhost";
	$username = "root";
	$password = "dbbankpassword";
	$dbname = "dbbank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
    

	if(!$conn){
		die("Cannot connect".mysqli_connect_error());
	}

?>