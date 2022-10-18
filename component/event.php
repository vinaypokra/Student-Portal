<?php
$item=array(
			array("Past Event","about event and event discription","pastevent"),
			array("up-Coming Event","about event and event discription","icfai-student-Event/"),
		    array("Club Registration","about event and event discription","icfai-student-club/")
		) ;
?>

<div class="col-md-12" id="Event-club-section" >
<!-- Put code here -->
	<div class="row" style="margin: 0;">
		<?php for ($i=0; $i <count($item); $i++)
			{ 
			?>
			<div id="<?php echo $item[$i][0] ?>" class="col-md-4 text-center">
				<div id="Event-area">
					<img src="img/event.jpg" width="100%" height="100%">
					<h4><?php echo $item[$i][0]; ?></h4>
					<h6><?php echo $item[$i][1]; ?></h6>
					<a href="<?php echo $item[$i][2]; ?>">Explore</a>
				</div>
			</div>
			<?php 
			}
		?>
	</div>
</div>

<!-- script -->
<script type="text/javascript">

</script>
<!-- style -->
<style type="text/css">
 #Event-club-section
 {  
 	
 	padding: 20px 0;
 }
 #Event-club-section a
 {
 	text-decoration: none;
 	background-color: white;
 	padding:0 10px;
 }
 #Event-area
 { 	border-radius: 10px;
 	padding: 20px 0;
 	margin: 10px;
 	background-color:#ffffffc4;
 }
 #Event-area h1,h6,h2{
	color: #00031bed;
    letter-spacing: 10px;
    font-family: initial;
    padding: 50px 0;
    background: #f0f8ff6e;;
    padding: 50px 0;
}
#Event-area h6,h2{
	padding: 0;
	letter-spacing: 5px;
}
 
</style>