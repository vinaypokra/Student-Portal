
<?php
session_start();
if (!isset($_SESSION['admin-loggedin'])) {
	header('Location: index.php');
	exit;
}
include_once('database.php');

$conn=$con;
$cname=$_POST['name'];
$cinfo=$_POST['Club-info'];
$chead= $_POST['Club-Head-college-id'];
if(!empty($cname)||!empty($cinfo)||!empty($chead))
{
	if (mysqli_connect_error())
	{
		die('Connect Error('. mysqli_connect_error().')'.mysqli_connect_error());
	}
	else
	{
		
		$SELECT="SELECT clubname From `club` where clubname=? Limit 1";
		$INSERT="INSERT INTO `club`(`clubname`, `clubinfo`, `clubhead`) VALUES (?,?,?)";
		$q="CREATE TABLE IF NOT EXISTS `$cname`(
			`id` int(11) NOT NULL AUTO_INCREMENT,
		  	`collegeid` varchar(50) NOT NULL,
		  	`whatsapp` varchar(255) NOT NULL,
		  	`email` varchar(100) NOT NULL,
		    PRIMARY KEY (`id`),
		    UNIQUE (`collegeid`)
		)";

		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("s",$cname);
		$stmt->execute();
		$stmt->bind_result($cname);
		$stmt->store_result();
		$rnum=$stmt->num_rows;

	if($rnum==0)
	{
		$stmt->close();
		$stmt=$conn->prepare($INSERT);
		$stmt->bind_param("sss",$cname,$cinfo,$chead );
		$stmt->execute();
		echo "New Club recored added successfully";
      	echo "<script>alert('New Club recored added successfully')</script>";
      	mysqli_query($conn, $q);
      	$stmt->close();
      	$conn->close(); 
        exit;
		}
	else
	{
		echo "Alredy in database";	
      	$stmt->close();
      	$conn->close(); 
      	echo "<script>alert('Already in database')</script>";
       
        exit;
	}
	}
}
else
{
	echo "All field are required";
	die();
}
?> 
