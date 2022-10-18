<?php
if (!isset($_SESSION['admin-loggedin']))
 {
	header('Location: index.php');
	exit;
} 
?>

 

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<title>Add-program-Page</title>
		<?php include_once('link.php');?>
	</head>
	
	<body>
		<section class="icfai-program-profile-page">
			<div class="container" style="background: #ccccd285;">
				<center><h4>Adding New-program : Enter the details of program And Submit</h4></center>
				<div class="row">
					<div class="col-md-4 text-center" style="margin: auto;">
						<center><h4 style="font-family: initial;">Profile-information</h4></center>
						<img src="img/icfai-program-profile/icfai-program.jpg" id="Icfai-program-profile" >
					</div>
				
					<form id="icfai-program-profile-details" class="col-md-8 text-center" style="display: table; margin: auto;" method="post" action="insertprogram.php" target="_blank" >
					<div  style="display: table-row;">
						<label style="display: table-cell;"><b>program-Name: </b></label>
						<input style="display: table-cell;" type="text" name="name" placeholder="name" required="">
					</div>
					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Submit</b></label>
						<input style="display: table-cell; text-align: center;background-color: #96939391;" type="Submit" name="done" value="Add-program">
					</div>
				</form>
			
				</div>
				
			</div>
			<div  class="col-md-4 text-left" >
					<h4>Added Program</h4>
					<?php
					include_once'database.php';
					 $q=mysqli_query($con,"Select * From programs ");
					 while($row=mysqli_fetch_assoc($q)) 
						{ 
						?>
						 
						 <h6><li><?php  echo $row['Name'];  ?></li></h6>
						<?php
					    }
					    $con->close();
						?>
					
				</div>
		</section>
	</body>
</html>
<script type="text/javascript">
var x=document.getElementById('Add-program');
window.onload=change();
function change(){
x.style.background='white';
x.style.padding='0px 20px';
x.style.borderRadius='15px';
x.style.color='black';

}
</script>
<style type="text/css">

.icfai-program-profile-page
{
	padding: 20vh 0;
}	
#Icfai-program-profile
{
border-radius: 50%;
padding: 10px;
box-shadow: 0 0 10px #999999;
}
.icfai-program-profile-page label
{
	border: 1px solid #96939391;
    text-align: left;
    padding: 10px;
}
.icfai-program-profile-page input
{
	border: 1px solid #96939391;
    text-align: left;
    width: 100%;
    padding: 10px;

}
</style>
