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
		<title>Add-Profile-Page</title>
		<?php include_once('link.php');?>
	</head>
	
	<body>
		<section class="icfai-event-profile-page">
			<div class="container" style="background: #ccccd285;">
				<center><h4>Adding New-event : Enter the details of Event And Submit</h4></center>
				<div class="row">
					<div class="col-md-4 text-center" style="margin: auto;">
						<center><h4 style="font-family: initial;">Poster</h4></center>
						<img src="img/icfai-event-profile/icfai-event.png" id="Icfai-event-profile" >
					</div>
				
					<form id="icfai-event-profile-details" class="col-md-8 text-center" style="display: table; margin: auto;" method="post" action="insertevent.php" target="_blank" >
					<div  style="display: table-row;">
						<label style="display: table-cell;"><b>Event-Name: </b></label>
						<input style="display: table-cell;" type="text" name="name" placeholder="name" required="">
					</div>
					<div  style="display: table-row;">
						<label style="display: table-cell;"><b>Event-description: </b></label>
						<input style="display: table-cell;" type="text" name="event-info" placeholder="event-info" required="">
					</div>
					<div  style="display: table-row;">
						<label style="display: table-cell;"><b>Event-Date:</b></label>
						<input style="display: table-cell;" type="date" name="event-date" placeholder="event-date" required="">
					</div>
					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Submit</b></label>
						<input style="display: table-cell; text-align: center;background-color: #96939391;" type="Submit" name="done" value="Add-event">
					</div>
				</form>
			
				</div>
			</div>
		</section>
	</body>
</html>
<script type="text/javascript">
var x=document.getElementById('event-pro');
window.onload=change();
function change(){
x.style.background='white';
x.style.padding='0px 20px';
x.style.borderRadius='15px';
x.style.color='black';

}
</script>
<style type="text/css">

.icfai-event-profile-page
{
	padding: 20vh 0;
}	
#Icfai-event-profile
{
border-radius: 50%;
padding: 10px;
box-shadow: 0 0 10px #999999;
}
.icfai-event-profile-page label
{
	border: 1px solid #96939391;
    text-align: left;
    padding: 10px;
}
.icfai-event-profile-page input
{
	border: 1px solid #96939391;
    text-align: left;
    width: 100%;
    padding: 10px;

}
</style>
