
<?php

include '../database.php';
$q=mysqli_query($con,"Select * From club ");
?>
	<section class="Icfai-jaipur-club-area-page">

		<div class="container">
			
			<?php while($row=mysqli_fetch_assoc($q)) 
			{ 
			?>
			<div id="Icfai-jaipur-club" class="row">
				<div class="col-md-4 text-center">
					<img src="img/icfai-club-profile/icfai-club.png">
				</div>
				<div id="Icfai-jaipur-club-area-clubName" class="col-md-8 text-center" >
					<h4><?php echo $row['clubname']; ?></h4>
					<h5><?php echo $row['clubinfo']; ?></h5>
					<p>Club head:-<?php echo $row['clubhead']; ?></p>
					<a href="#Icfai-jaipur-club-area-register">Click-here To Register</a>
				</div>
			</div>
			<?php 
			}
			$con->close();
		    ?>
		
	</div>
 </section>
 <style type="text/css">
 	h3 ,h4,h5,h6
{
font-family: initial;
}
#Icfai-jaipur-club-area-clubName
{
margin: auto;
}
#Icfai-jaipur-club
{padding: 20px 0;
margin: 15px 0;
background: #ffffff73;
}
.Icfai-jaipur-club-area-page
{
padding: 20vh 0;
}
#Icfai-jaipur-club-area-register input
{
padding: 10px 70px;
}
 </style>
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