<?php
session_start();
if (!isset($_SESSION['loggedin']))
 {
	header('Location: index.php');
	exit;
} 
include_once'database.php';

$q=mysqli_query($con,"Select * From events ");
if (isset($_POST['done'])) 
{   
	$Event_name=$_POST['Event_name'];
	$collegeid=$_POST['clg-id'];
	$email=$_POST['email-id'];
	$whatsapp=$_POST['whatsapp'];
	$conn=$con;
		if(!empty($Event_name)||!empty($collegeid)||!empty($email)||empty($whatsapp))
		{
			if (mysqli_connect_error())
			{
				die('Connect Error('. mysqli_connect_error().')'.mysqli_connect_error());
			}
			else
			{
				
				$SELECT="SELECT college_id,Event_name From `e_participants` where college_id=? AND Event_name=? limit 1 ";
				$INSERT="INSERT Into `e_participants`(`college_id`,`Event_name`, `whatsapp`, `email`) values (?,?,?,?)";
				
				$stmt=$conn->prepare($SELECT);
				$stmt->bind_param("ss",$collegeid,$Event_name);
				$stmt->execute();
				$stmt->bind_result($collegeid,$Event_name);
				$stmt->store_result();
				$rnum=$stmt->num_rows;

					if($rnum==0)
					{
						$stmt->close();
						$stmt=$conn->prepare($INSERT);
						$stmt->bind_param("ssss",$collegeid,$Event_name,$whatsapp,$email );
						$stmt->execute();
					
				      	echo "<script>alert('Registered successfully')</script>";
				        $stmt->close();
				      	$conn->close(); 
				   
						}
					else
					{
						
				      	$stmt->close();
				      	$conn->close(); 
				      	echo "<script>alert('Already in Registered')</script>";
				   
					}
			}
		}
		else
		{
			echo "All field are required";
			die();
		}

}

?>

 

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<title>Event-Registar-Page</title>
		<?php include_once('link.php');?>
	</head>
	
	<body>
		<section id="background">

         </section>
		 <section class="Club-Registar-Page">
			<div class="container" style="background: #ccccd285;">
				<center><h4>Club registration</h4></center>
				<div class="row">
					<div class="col-md-4 text-center" style="margin: auto;">
						<center><h4 style="font-family: initial;">Profile-information</h4></center>
						<img src="img/icfai-club-profile/icfai-club.png" id="Icfai-club-profile" >
					</div>
				
					<form id="icfai-club-profile-details" class="col-md-8 text-center" style="display: table; margin: auto;" method="post" >
					<div  style="display: table-row;">
						<label style="display: table-cell;"><b>Select-Club-Name: </b></label>
						<Select style="display: table-cell;" name="Event_name"  required="">
						<?php while($row=mysqli_fetch_assoc($q)) 
						{ 
						?>
						 <option value="<?php echo $row['Event_name']; ?>"><?php echo $row['Event_name']; ?></option>
						<?php
					    }
						?>
					</Select>
					</div>
					<div  style="display: table-row;">
						<label style="display: table-cell;"><b>Your-college-id: </b></label>
						<select name="clg-id"  required="">
							<option value="<?php echo $_SESSION['name']; ?>"><?php echo $_SESSION['name']; ?></option>
						</select>
					</div>
					<div  style="display: table-row;">
						<label style="display: table-cell;"><b>Your-Email-id: </b></label>
						<select name="email-id"  required="">
							<option value="<?php echo $_SESSION['email']; ?>"><?php echo $_SESSION['email']; ?></option>
						</select>
					</div>
						<div  style="display: table-row;">
						<label style="display: table-cell;"><b>Your-WhatsAPP </b></label>
						<input style="display: table-cell;" type="text" name="whatsapp" placeholder="Your-WhatsAPP" required="">
					</div>
					<div style="display: table-row;">
						<label style="display: table-cell;"><b>Submit</b></label>
						<input style="display: table-cell; text-align: center;background-color: #96939391;" type="Submit" name="done" value="Join-Club">
					</div>
				</form>
				</div>
			</div>
		</section>
		
	</body>
</html>
<script type="text/javascript">
var x=document.getElementById('club');
window.onload=change();
function change(){
x.style.background='white';
x.style.padding='0px 20px';
x.style.borderRadius='15px';
x.style.color='black';

}
</script>
<style type="text/css">

.Club-Registar-Page
{
	padding: 20vh 0;
}	
#Icfai-club-profile
{
border-radius: 50%;
padding: 10px;
box-shadow: 0 0 10px #999999;
}
.Club-Registar-Page label
{
	border: 1px solid #96939391;
    text-align: left;
    padding: 10px;
}
.Club-Registar-Page input,select
{
	border: 1px solid #96939391;
    text-align: left;
    width: 100%;
    padding: 10px;

}
 #background
{
opacity: 0.5;
width: 100%;
background: center;
height: 100%;
background-repeat: no-repeat;
position: fixed;
background-size: cover;
background-image: url(../img/icfai-home.jpeg);
z-index: -50;
}
</style>
