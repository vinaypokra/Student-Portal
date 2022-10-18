<?php

if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
include 'database.php';
$year=$_SESSION['starting_year'];
$course=$_SESSION['course'];
$sem1=mysqli_query($con,"Select * from subject Where `admission_year`='$year' AND `program_name`='$course' AND `program_semester`='1'");
$sem2=mysqli_query($con,"Select * from subject Where `admission_year`='$year' AND `program_name`='$course' AND `program_semester`='2'");
$sem3=mysqli_query($con,"Select * from subject Where `admission_year`='$year' AND `program_name`='$course' AND `program_semester`='3'");
$sem4=mysqli_query($con,"Select * from subject Where `admission_year`='$year' AND `program_name`='$course' AND `program_semester`='4'");
$sem5=mysqli_query($con,"Select * from subject Where `admission_year`='$year' AND `program_name`='$course' AND `program_semester`='5'");
$sem6=mysqli_query($con,"Select * from subject Where `admission_year`='$year' AND `program_name`='$course' AND `program_semester`='6'");
$sem7=mysqli_query($con,"Select * from subject Where `admission_year`='$year' AND `program_name`='$course' AND `program_semester`='7'");
$sem8=mysqli_query($con,"Select * from subject Where `admission_year`='$year' AND `program_name`='$course' AND `program_semester`='8'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>A-Information</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title>Student-Profile-Page</title>
	<?php include('link.php');?>
</head>
<body>
   <section  id="icfai-sem-subject" style="padding: 20vh 0;">
  
   	<div class="row" style="margin: 0;">
   		<div class="col-md-6">
   			<center><h4>Semester-1</h4></center>
   			<table>
   						<tr>
   							<th>Subject Name</th>
   							<th>Subject Code</th>
   						</tr>
   		   
   			<?php
   				while($row=mysqli_fetch_assoc($sem1)) 
   				{
   					?>
   					<tr>
   						<td><a  href="handout/<?php echo $row['subject_id'].'.docx';?>" download><?php echo $row['subject_name'] ;?></a></td>
   						<td><?php echo $row['subject_id'] ;?></td>
   					</tr>
   					<?php
   				}
   			  ?>
   			  </table>
   		</div>
	   	<div class="col-md-6">
	   		<center><h4>Semester-2</h4></center>
   			<table>
   						<tr>
   							<th>Subject Name</th>
   							<th>Subject Code</th>
   						</tr>
   		   
   			<?php
   				while($row=mysqli_fetch_assoc($sem2)) 
   				{?>
   					<tr>
   						<td><?php echo $row['subject_name'] ;?></td>
   						<td><?php echo $row['subject_id'] ;?></td>
   					</tr>
   					<?php
   				}
   			  ?>
   			  </table>
   		</div>
   	</div>
   		<div class="row" style="margin: 0;">
   		<div class="col-md-6">
   			<center><h4>Semester-3</h4></center>
   			<table>
   						<tr>
   							<th>Subject Name</th>
   							<th>Subject Code</th>
   						</tr>
   		   
   			<?php
   				while($row=mysqli_fetch_assoc($sem3)) 
   				{?>
   					<tr>
   						<td><?php echo $row['subject_name'] ;?></td>
   						<td><?php echo $row['subject_id'] ;?></td>
   					</tr>
   					<?php
   				}
   			  ?>
   			  </table>
   		</div>
	   	<div class="col-md-6">
	   		<center><h4>Semester-4</h4></center>
   			<table>
   						<tr>
   							<th>Subject Name</th>
   							<th>Subject Code</th>
   						</tr>
   		   
   			<?php
   				while($row=mysqli_fetch_assoc($sem4)) 
   				{?>
   					<tr>
   						<td><?php echo $row['subject_name'] ;?></td>
   						<td><?php echo $row['subject_id'] ;?></td>
   					</tr>
   					<?php
   				}
   			  ?>
   			  </table>
   		</div>
   	</div>
   		<div class="row" style="margin: 0;">
   		<div class="col-md-6">
   			<center><h4>Semester-5</h4></center>
   			<table>
   						<tr>
   							<th>Subject Name</th>
   							<th>Subject Code</th>
   						</tr>
   		   
   			<?php
   				while($row=mysqli_fetch_assoc($sem5)) 
   				{?>
   					<tr>
   						<td><?php echo $row['subject_name'] ;?></td>
   						<td><?php echo $row['subject_id'] ;?></td>
   					</tr>
   					<?php
   				}
   			  ?>
   			  </table>
   		</div>
	   	<div class="col-md-6">
	   		<center><h4>Semester-6</h4></center>
   			<table>
   						<tr>
   							<th>Subject Name</th>
   							<th>Subject Code</th>
   						</tr>
   		   
   			<?php
   				while($row=mysqli_fetch_assoc($sem6)) 
   				{?>
   					<tr>
   						<td><?php echo $row['subject_name'] ;?></td>
   						<td><?php echo $row['subject_id'] ;?></td>
   					</tr>
   					<?php
   				}
   			  ?>
   			  </table>
   		</div>
   	</div>
   		<div class="row" style="margin: 0;">
   		<div class="col-md-6">
   			<center><h4>Semester-7</h4></center>
   			<table>
   						<tr>
   							<th>Subject Name</th>
   							<th>Subject Code</th>
   						</tr>
   		   
   			<?php
   				while($row=mysqli_fetch_assoc($sem7)) 
   				{?>
   					<tr>
   						<td><?php echo $row['subject_name'] ;?></td>
   						<td><?php echo $row['subject_id'] ;?></td>
   					</tr>
   					<?php
   				}
   			  ?>
   			  </table>
   		</div>
	   	<div class="col-md-6">
	   		<center><h4>Semester-8</h4></center>
   			<table>
   						<tr>
   							<th>Subject Name</th>
   							<th>Subject Code</th>
   						</tr>
   		   
   			<?php
   				while($row=mysqli_fetch_assoc($sem8)) 
   				{?>
   					<tr>
   						<td><?php echo $row['subject_name'] ;?></td>
   						<td><?php echo $row['subject_id'] ;?></td>
   					</tr>
   					<?php
   				}
   			  ?>
   			  </table>
   		</div>
   	</div>
   </section>
</body>
</html>
<script type="text/javascript">
var x=document.getElementById('accinfo');
window.onload=change();
function change(){
x.style.background='white';
x.style.padding='0px 20px';
x.style.borderRadius='15px';
x.style.color='black';

}
</script>
<style type="text/css">
	#icfai-sem-subject .col-md-6
	{

	}
	table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #8686a5ad;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>