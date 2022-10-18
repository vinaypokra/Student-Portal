<?php
if (!isset($_SESSION['admin-loggedin']))
 {
	header('Location: index.php');
	exit;
} 
include_once'database.php';
$q=mysqli_query($con,"Select * From programs ");
?>

 

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<title>Add-subject-Page</title>
		<?php include_once('link.php');?>
	</head>
	
	<body>
		<section class="icfai-subject-profile-page">
			<div class="container" style="background: #ccccd285;">
				<center><h4>Adding New-subject : Enter the details of subject And Submit</h4></center>
				<div class="row">
					<div class="col-md-4 text-center" style="margin: auto;">
						<center><h4 style="font-family: initial;">Profile-information</h4></center>
						<img src="img/icfai-subject-profile/icfai-subject.jpg" id="Icfai-subject-profile" >
					</div>
				
					<form id="icfai-subject-profile-details" class="col-md-8 text-center" style="display: table; margin: auto;" method="post" action="insertsubject.php" target="_blank" enctype="multipart/form-data">
					<div  style="display: table-row;">
						<label style="display: table-cell;"><b>subject-Name: </b></label>
						<input style="display: table-cell;" type="text" name="name" placeholder="name" required="">
					</div>
					<div  style="display: table-row;">
						<label style="display: table-cell;"><b>Subject-id</b></label>
						<input style="display: table-cell;" type="text" name="s-id" placeholder="Subject-id" required="">
					</div>
					<div  style="display: table-row;">
						<label style="display: table-cell;"><b>Admission_year</b></label>
						<input style="display: table-cell;" type="text" name="admission_year" maxlength="4" placeholder="admission_year" required="">
					</div>
					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Course:</b></label>
						<select style="display: table-cell;" type="text" name="Course" required="">
						<option value="">NA</option>
						<?php while($row=mysqli_fetch_assoc($q)) 
						{ 
						?>
						 <option value="<?php echo $row['Name']; ?>"><?php echo $row['Name']; ?></option>
						<?php
					    }
					   
						?>
						</select>
					</div>	
					<div  style="display: table-row;">
						<label style="display: table-cell;"><b>Semester</b></label>
						<select style="display: table-cell;" type="text" name="Semester" required="">
							<option >NA</option>
							<option value="1">Sem-I</option>
							<option value="2">Sem-II</option>
							<option value="3">Sem-III</option>
							<option value="4">Sem-IV</option>
							<option value="5">Sem-V</option>
							<option value="6">Sem-VI</option>
							<option value="7">Sem-VII</option>
							<option value="8">Sem-VIII</option>
						</select>
					</div>
					<div  style="display: table-row;">
						<label style="display: table-cell;"><b>Course handout:</b></label>
						<input style="display: table-cell;" accept="doc/docx" type="file" name="file" >
					</div>
					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Submit</b></label>
						<input style="display: table-cell; text-align: center;background-color: #96939391;" type="Submit" name="done" value="Add-subject">
					</div>
				</form>
			
			</div>
				
			</div>
			<div class="container" style="margin-top: 40px;padding: 20px;background-color: #ffffff63">
				<center><h4>Already added Subject list</h4></center>
				<center>
				<form method="POST" action="accinfo.php" target="_blank">
					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Course:</b></label>
						<select style="display: table-cell;" type="text" name="Course" required="">
						<option value="">NA</option>
						<?php 
						$q=mysqli_query($con,"Select * From programs ");
						while($row=mysqli_fetch_assoc($q)) 
						{ 
						?>
						 <option value="<?php echo $row['Name']; ?>"><?php echo $row['Name']; ?></option>
						<?php
					    }
					   
						?>
						</select>
					</div>	
					<div  style="display: table-row;">
						<label style="display: table-cell;"><b>Year </b></label>
						<input style="display: table-cell;" type="text" name="year" maxlength="4" placeholder="Admission_year" required="">
					</div>
					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Submit</b></label>
						<input style="display: table-cell; text-align: center;background-color: #96939391;" type="Submit" name="Show-subject" value="show-subject">
					</div>
				</form>	
				</center>
				
			</div>
		</section>
	</body>
</html>

<script type="text/javascript">
var x=document.getElementById('subject');
window.onload=change();
function change(){
x.style.background='white';
x.style.padding='0px 20px';
x.style.borderRadius='15px';
x.style.color='black';

}
</script>
<style type="text/css">

.icfai-subject-profile-page
{
	padding: 20vh 0;
}	
#Icfai-subject-profile
{
border-radius: 50%;
padding: 10px;
box-shadow: 0 0 10px #999999;
}
.icfai-subject-profile-page label
{
	border: 1px solid #96939391;
    text-align: left;
    padding: 10px;
}
.icfai-subject-profile-page input,select
{
	border: 1px solid #96939391;
    text-align: left;
    width: 100%;
    padding: 10px;

}
</style>
