<?php
$host="localhost";
$dbUsername="vinaydata";
$dbPassword="Vinay@123";
$dbName="capturedthing";
$port=3306;
$con=new mysqli($host,$dbUsername,$dbPassword,$dbName,$port);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
 ?>