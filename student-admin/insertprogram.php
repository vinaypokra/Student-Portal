
<?php
session_start();
if (!isset($_SESSION['admin-loggedin'])) {
	header('Location: index.php');
	exit;
}
include_once('database.php');

$conn=$con;
$cname=$_POST['name'];
if(!empty($cname))
{
	if (mysqli_connect_error())
	{
		die('Connect Error('. mysqli_connect_error().')'.mysqli_connect_error());
	}
	else
	{
		
		$SELECT="SELECT Name From `programs` where Name=? Limit 1";
		$INSERT="INSERT INTO `programs`(`Name`) VALUES (?)";

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
		$stmt->bind_param("s",$cname);
		$stmt->execute();
		echo "New program recored added successfully";
      	echo "<script>alert('New program recored added successfully')</script>";
      
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
