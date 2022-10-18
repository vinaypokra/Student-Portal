<!DOCTYPE html>
<html  style="scroll-behavior: smooth;">
<head>
	<title>Icfai-jaipur-Event-area</title>
	<?php include_once('link.php');
        
   ?>
</head>
</head>
<body>
	<section id="background">

</section>
	 <section id="icfai-Navbar-page">
    <!-- Navbar code put here -->
    <div class="row" style="margin: 0;">
      <div id="icfai-header-content" class="col-md-6">
        <div class="row" style="margin: 0;">
           <img class="col-4 text-center" src="img/icfai-logo.png" width="10%" height="10%">
            <div id="icfai-portal-name" class="col-8 text-center" style="margin: auto;">
             <h4 style="font-family: initial;">ICFAI Student Portal</h4>
           </div>
        </div>
      </div>
      <div class="col-md-6 text-center" style="margin: auto;">
       
          <form method="post">
             <ul id="Navbar-panel">
            <li><a href="#Icfai-jaipur-Event-area-register">Register</a></li>
             <li><a href="../">Home</a></li>
             </ul>
          </form>
       
      </div>
    </div>
 
  </section>
	<section class="Icfai-jaipur-Event-area-page">
    <center><h3>Up-Coming-Event</h3></center>
	</section>
  <?php include '../component/icfai-event-list.php';
   include '../component/register-button.php';

    ?>
</body>
</html>
<style type="text/css">
	#Icfai-jaipur-Event-area-EventName
	{
		margin: auto;
	}
	#Icfai-jaipur-Event
	{padding: 20px 0;
    margin: 15px 0;
    background: #ffffff73;
	}
	.Icfai-jaipur-Event-area-page
	{
		padding-top: 20vh;
	 }
	 #Icfai-jaipur-Event-area-register input
	 {
	 	padding: 10px 70px;
	 }
   #Navbar-panel{
    margin: auto;
    display: flex;
    list-style-type: none;
    justify-content: space-evenly;
    

   }
    #Navbar-panel a{
    margin: auto;
    text-decoration: none;
    color: white;
    transition: .5s;
   }
    #Navbar-panel a:hover
   {
    padding: 5px 20px;
    border-radius: 15px;
    color: black;
    background-color: white;
   }
  #icfai-Navbar-page
  {
    z-index: 1000;
    position: fixed;
    width: 100%;
    padding: 20px 0px;
    margin: auto;
    background-color: #00031bed;
    color: white;
  }
  @media screen and (max-width:767px)
  {
    #Navbar-panel
    {
    border-style: solid hidden;
    border-color: #08366fbf; 
    }
  }
  #background{
	
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
h3 ,h4,h5,h6
  {
    font-family: initial;
  }

</style>