

<?php
session_start();
if (!isset($_SESSION['admin-loggedin'])) {
	header('Location: index.php');
	exit;
}
include_once('database.php');

$conn=$con;
$username=$_POST['username'];
$name=$_POST['name'];
$Father_Name=$_POST['Father_Name'];
$Mother_Name=$_POST['Mother_Name'];
$email=$_POST['email'];
$DOB=$_POST['DOB'];
$Contact=$_POST['number'];
$Course=$_POST['Course'];
$Year_of_Joining=$_POST['YOJ'];
$Year_of_Graduation=$_POST['YOG'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$State=$_POST['State'];
$Pincode=$_POST['Pincode'];
$Blood_group=$_POST['Blood'];
$pass=substr($name, 0, 3)."@".substr($username, 0, 7); 
$password=password_hash($pass, PASSWORD_DEFAULT);
if(!empty($username)||!empty($name)||!empty($email)||empty($Contact)||!empty($Course))
{
	if (mysqli_connect_error())
	{
		die('Connect Error('. mysqli_connect_error().')'.mysqli_connect_error());
	}
	else
	{
		
		$SELECT="SELECT username From `student-profile` where username=? Limit 1";
		$INSERT="INSERT Into `student-profile`(`username`, `name`, `Father_Name`,`Mother_Name`,`DOB`,`email`,`Contact`,`Course`, `Year_of_Joining`,`Year_of_Graduation`,`Address`,`City`,`State`,`Pincode`,`Blood_group`) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		
		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("s",$username);
		$stmt->execute();
		$stmt->bind_result($Email);
		$stmt->store_result();
		$rnum=$stmt->num_rows;

	if($rnum==0)
	{
		$stmt->close();
		$stmt=$conn->prepare($INSERT);
		$stmt->bind_param("sssssssssssssss", $username, $name, $Father_Name,$Mother_Name,$DOB,$email,$Contact,$Course,$Year_of_Joining,$Year_of_Graduation,$Address,$City,$State,$Pincode,$Blood_group);
		$stmt->execute();
		echo "New recored added successfully";
		$stmt->close();
      	echo "<script>alert('New recored added successfully')</script>";
      	$INSERTACC="INSERT INTO `accounts`(`username`, `password`, `email`,`course`,`starting_year`) VALUES (?,?,?,?,?)";
        $stmt=$conn->prepare($INSERTACC);
        $stmt->bind_param("sssss",$username,$password,$email,$Course,$Year_of_Joining);
        $stmt->execute();
        $stmt->close();
      	$conn->close(); 
         exit;
		}
	else
	{
		echo "Alredy in database";	
      	$stmt->close();
      	$conn->close(); 
      	echo "<script>alert('Alredy in database')</script>";
       
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
