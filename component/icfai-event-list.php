
<?php

include '../database.php';
$q=mysqli_query($con,"Select * From events ");
?>
	<section class="Icfai-jaipur-event-area-page">

		<div class="container">
			
			<?php while($row=mysqli_fetch_assoc($q)) 
			{ 
			?>
			<div id="Icfai-jaipur-event" class="row">
				<div class="col-md-4 text-center">
					<img src="../img/icfai-event-profile/<?php echo $row['Event_name'].'.jpg'; ?>" alt="<?php echo $row['Event_name']; ?>">
				</div>
				<div id="Icfai-jaipur-event-area-eventName" class="col-md-8 text-center" >
					<h4><?php echo $row['Event_name']; ?></h4>
					<h5><?php echo $row['Event_description']; ?></h5>
					<p>event Date:-<?php echo $row['Date']; ?></p>
					<a href="#Icfai-jaipur-event-area-register">Click-here To Register</a>
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
#Icfai-jaipur-event-area-eventName
{
margin: auto;
}
#Icfai-jaipur-event
{padding: 10px 0;
margin: 15px 0;
background: #ffffff73;
}
.Icfai-jaipur-event-area-page
{
padding: 15vh 0;
}
#Icfai-jaipur-club-area-register input
{
padding: 10px 70px;
}
 </style>
 <script type="text/javascript">
var x=document.getElementById('event');
window.onload=change();
function change(){
x.style.background='white';
x.style.padding='0px 20px';
x.style.borderRadius='15px';
x.style.color='black';

}
</script>