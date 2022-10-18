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
		<title>Add-Profile-Page</title>
		<?php include_once('link.php');?>
	</head>
	
	<body>
		<section class="icfai-student-profile-page">
			<div class="container" style="background: #ccccd285;">
				<center><h4>Adding New Student : Enter the details of Student And Submit</h4></center>
				<div class="row">
					<div class="col-md-4 text-center" style="margin: auto;">
						<center><h4 style="font-family: initial;">Profile-information</h4></center>
						<img src="img/icfai-student-profile/17stujpcs0012.png" id="Icfai-student-profile" >
					</div>
				
					<form id="icfai-student-profile-details" class="col-md-8 text-center" style="display: table; margin: auto;" method="post" action="insert.php" target="_blank" >
					<div  style="display: table-row;">
						<label style="display: table-cell;"><b>Name: </b></label>
						<input style="display: table-cell;" type="text" name="name" placeholder="name" required="">
					</div>
					<div  style="display: table-row;">
						<label style="display: table-cell;"><b>College ID: </b></label>
						<input style="display: table-cell;" type="text" name="username" placeholder="username" required="" >
					</div>
					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Father's Name:</b> </label>
						<input style="display: table-cell;" type="text" name="Father_Name" placeholder="Father_Name" required="" >
					</div>
					
					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Mother's Name:</b></label>
						<input style="display: table-cell;" type="text" name="Mother_Name" placeholder="Mother_Name" required="" >
					</div>
						
					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Email:</b></label>
						<input style="display: table-cell;" type="Email" name="email" placeholder="Email" required="">
					</div>

					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Contact No.:</b></label>
						<input style="display: table-cell;" type="text" name="number" placeholder="Contact NO." required="">
					</div>

					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Date of Birth:</b></label>
						<input style="display: table-cell;" type="date" name="DOB" required="" >
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
					    $con->close();
						?>
						</select>
					</div>	

					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Year of Joining:</b></label>
						<input style="display: table-cell;" type="text" name="YOJ" required="" placeholder="Year_of_Joining" >
					</div>
					
					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Year of Graduation:</b></label>
						<input style="display: table-cell;" type="text" name="YOG" required="" placeholder="Year_of_Graduation">
					</div>

					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Address:</b></label>
						<input style="display: table-cell;" type="text" name="Address" placeholder="Address" required="" >
					</div>

					<div style="display: table-row;">
						<label style="display: table-cell;"><b>City:</b></label>
						<input style="display: table-cell;" type="text" name="City" required="" placeholder="City" >
					</div>

					<div style="display: table-row;">
						<label style="display: table-cell;"><b>State:</b></label>
						<input style="display: table-cell;" type="text" name="State" required="" placeholder="State" >
					</div>

					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Pincode:</b></label>
						<input style="display: table-cell;" type="text" name="Pincode" required="" placeholder="Pincode" >
					</div>
					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Blood Group:</b></label>
						<input style="display: table-cell;" type="text" name="Blood" placeholder="Blood_group" required="" >
					</div>
						<div style="display: table-row;">
						<label style="display: table-cell;"><b>Submit</b></label>
						<input style="display: table-cell; text-align: center;background-color: #96939391;" type="Submit" name="done" value="Addstudent">
					</div>
					</form>
			
				</div>
			</div>
		</section>
	</body>
</html>
<script type="text/javascript">
var x=document.getElementById('student-pro');
window.onload=change();
function change(){
x.style.background='white';
x.style.padding='0px 20px';
x.style.borderRadius='15px';
x.style.color='black';

}
</script>
<style type="text/css">

.icfai-student-profile-page
{
	padding: 20vh 0;
}	
#Icfai-student-profile
{
border-radius: 50%;
padding: 10px;
box-shadow: 0 0 10px #999999;
}
.icfai-student-profile-page label
{
	border: 1px solid #96939391;
    text-align: left;
    padding: 10px;
}
.icfai-student-profile-page input,select
{
	border: 1px solid #96939391;
    text-align: left;
    width: 100%;
    padding: 10px;

}
</style>