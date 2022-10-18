
<?php
session_start();
if (!isset($_SESSION['admin-loggedin'])) {
	header('Location: index.php');
	exit;
}
include_once('database.php');

$conn=$con;
$subjectname=$_POST['name'];
$subject_id=$_POST['s-id'];
$admission_year=$_POST['admission_year'];
$program_semester=$_POST['Semester'];
$program_name=$_POST['Course'];


  $extension = end(explode(".", $_FILES["file"]["name"]));
  $docx = $subject_id.".".$extension;
  $docxTmp = $_FILES['file']['tmp_name'];
  $docxSize = $_FILES['file']['size'];
  $type = $_FILES["file"]["type"];
if ($docx)  
{
		$file_dir = '../icfai-student-area/handout/';
		
		$allowedExts = array("doc", "docx");
		if (($type == "application/msword" || $type == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") && in_array($extension, $allowedExts))
		 {
		  move_uploaded_file($docxTmp, $file_dir . $docx);
		}
}
if(!empty($subjectname)||!empty($subject_id)||!empty($admission_year)||!empty($program_semester)||!empty($program_name))
{


	if (mysqli_connect_error())
	{
		die('Connect Error('. mysqli_connect_error().')'.mysqli_connect_error());
	}
	else
	{
		
		$SELECT="SELECT subject_id From `subject` where subject_id=? Limit 1";
		$INSERT="INSERT INTO `subject`(`subject_id`,`subject_name`,`admission_year`,`program_semester`,`program_name`) VALUES (?,?,?,?,?)";

		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("s",$subject_id);
		$stmt->execute();
		$stmt->bind_result($subject_id);
		$stmt->store_result();
		$rnum=$stmt->num_rows;

	if($rnum==0)
	{
		$stmt->close();
		$stmt=$conn->prepare($INSERT);
		$stmt->bind_param("sssss",$subject_id,$subjectname,$admission_year,$program_semester,$program_name);
		$stmt->execute();
		echo "New program recored added successfully";
      	echo "<script>alert('New program recored added successfully')</script>";
         echo "<script>window.close();</script>";
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
        echo "<script>window.close();</script>";
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
