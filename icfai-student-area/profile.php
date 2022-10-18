<?php
// We need to use sessions, so you should always start sessions using the below code.
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
include 'database.php';
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT * FROM `student-Profile` WHERE username = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('s', $_SESSION['name']);
$stmt->execute();
/*$stmt->bind_result();*/
/*$stmt->fetch();*/
$row = $stmt->get_result()->fetch_assoc();
$stmt->close();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<title>Student-Profile-Page</title>
		<?php include_once('link.php');?>
	</head>
	
	<body>
		<section class="icfai-student-profile-page">
			<div class="container" style="background: #ccccd285;">
				<div class="row">
					<div class="col-md-4 text-center" style="margin: auto;">
						<center><h4 style="font-family: initial;">Profile-information</h4></center>
						<img src="img/icfai-student-profile/17stujpcs0012.png" id="Icfai-student-profile" >
						<center><p>Update Password</p></center>
						<form method="post">
							<input type="password" name="password" placeholder="Enter password here" required="">
							<input type="submit" name="Update" value="Update">
						</form>
					</div>
					<div id="icfai-student-profile-details" class="col-md-8 text-center" style="display: table; margin: auto;">
						<div  style="display: table-row;">
						<label style="display: table-cell;"><b>Name: </b></label>
						<label style="display: table-cell;"><?=$row['name']?></label>
					</div>
					<div  style="display: table-row;">
						<label style="display: table-cell;"><b>College ID: </b></label>
						<label style="display: table-cell;"><?=$row['username']?></label>
					</div>
					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Father's Name:</b> </label>
						<label style="display: table-cell;"><?=$row['Father_Name']?></label>
					</div>
					
					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Mother's Name:</b></label>
						<label style="display: table-cell;"><?=$row['Mother_Name']?></label>
					</div>
						
					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Email:</b></label>
						<label style="display: table-cell;"><?=$row['email']?></label>
					</div>

					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Contact No.:</b></label>
						<label style="display: table-cell;"><?=$row['Contact']?></label>
					</div>

					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Date of Birth:</b></label>
						<label style="display: table-cell;"><?=$row['DOB']?></label>
					</div>
						
					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Course:</b></label>
						<label style="display: table-cell;"><?=$row['Course']?></label>
					</div>	

					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Year of Joining:</b></label>
						<label style="display: table-cell;"> <?=$row['Year_of_Joining']?></label>
					</div>
					
					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Year of Graduation:</b></label>
						<label style="display: table-cell;"><?=$row['Year_of_Graduation']?></label>
					</div>

					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Address:</b></label>
						<label style="display: table-cell;"><?=$row['Address']?></label>
					</div>

					<div style="display: table-row;">
						<label style="display: table-cell;"><b>City:</b></label>
						<label style="display: table-cell;"><?=$row['City']?></label>
					</div>

					<div style="display: table-row;">
						<label style="display: table-cell;"><b>State:</b></label>
						<label style="display: table-cell;"><?=$row['State']?></label>
					</div>

					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Pincode:</b></label>
						<label style="display: table-cell;"><?=$row['Pincode']?></label>
					</div>
					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Blood Group:</b></label>
						<label style="display: table-cell;"><?=$row['Blood_group']?></label>
					</div>

					</div>
				</div>
			</div>
		</section>
	</body>
</html>
<script type="text/javascript">
var x=document.getElementById('pro');
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

</style>
