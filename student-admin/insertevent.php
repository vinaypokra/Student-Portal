
<?php
session_start();
if (!isset($_SESSION['admin-loggedin'])) {
	header('Location: index.php');
	exit;
}
include_once('database.php');

$conn=$con;
$ename=$_POST['name'];
$einfo=$_POST['event-info'];
$edate= $_POST['event-date'];
if(!empty($ename)||!empty($einfo)||!empty($edate))
{
	if (mysqli_connect_error())
	{
		die('Connect Error('. mysqli_connect_error().')'.mysqli_connect_error());
	}
	else
	{
		
		$SELECT="SELECT Event_name From `events` where Event_name=? Limit 1";
		$INSERT="INSERT INTO `events`(`Event_name`, `Event_description`, `Date`) VALUES (?,?,?)";
		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("s",$ename);
		$stmt->execute();
		$stmt->bind_result($Email);
		$stmt->store_result();
		$rnum=$stmt->num_rows;

	if($rnum==0)
	{
		$stmt->close();
		$stmt=$conn->prepare($INSERT);
		$stmt->bind_param("sss",$ename,$einfo,$edate );
		$stmt->execute();
		echo "New event recored added successfully";
      	echo "<script>alert('New event recored added successfully')</script>";
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
