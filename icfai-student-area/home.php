<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
  header('Location: index.php');
  exit;
}
?>
<html style="scroll-behavior: smooth;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>Icfai-student-area-Home</title>
     <?php include_once('link.php');
     
      ?>
  </head>
  <body class="Icfai-student-area-page">
   <!--  <nav class="icfai student-nav">
      <div>
        <h1>Website Title</h1>
        <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
        
      </div>
    </nav>
    -->
<section id="background">

</section>
     <section id="icfai-Navbar-page">
    <!-- Navbar code put here -->
    <div class="row" style="margin: 0;">
      <div id="icfai-header-content" class="col-md-6">
        <div class="row" style="margin: 0;">
           <img class="col-4 text-center" src="img/icfai-logo.png" width="10%" height="10%">
            <div id="icfai-portal-name" class="col-8 text-center">
             <h4>ICFAI Student Portal</h4>
           </div>
        </div>
      </div>
      <div class="col-md-6 text-center" style="margin: auto;">
       
          <form method="post">
           
             <ul id="Navbar-panel">
             <li><input id="home-screen" type="submit"  name="select-info" value="Home">
            <li><input id="pro"  type="submit"  name="select-info" value="Profile"></li>
            <li><input  type="submit" name="select-info" value="Archivement"></li>
            <li><input id="accinfo" type="submit" name="select-info" value="A-information"></li>
            <li><input id="event" type="submit" name="select-info" value="Event"></li>
            <li><input id="club" type="submit" name="select-info" value="Club"></li>
             </ul>

          </form>
       
      </div>
    </div>
   <a id="logout" href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
  </section>
  <div class="content" style="padding: 10vh 0;">
    <?php
      if(isset($_POST['select-info']))
      {
        $select=$_POST['select-info'];
        switch ($select)
         {
          case 'Profile':
          include 'profile.php';
          break;

           case 'A-information':
          include 'accinfo.php';
          break;

           case 'Home':
          include 'welcome.php';
          break;

          case 'Club':
          include '../component/icfai-club-list.php';
          ?>
          <form style="padding: 2vh 0;" action="icfai-club-Register.php" method="Post" target="_blank">
               <center id="Icfai-jaipur-club-area-register">  <input type="submit" name="btn" value="Register Here"></center>
          </form>
          <?php
          break;

          case 'Event':

          include '../component/icfai-event-list.php';
          ?>
          <form style="padding: 2vh 0;" action="icfai-event-Register.php" method="Post" target="_blank">
               <center id="Icfai-jaipur-event-area-register">  <input type="submit" name="btn" value="Register Here"></center>
          </form>
          <?php
          break;
          default:
            # code...
          include 'welcome.php';
          break;

        }
      }
      
      else
      {  
        include 'welcome.php';
        
      }

     ?>
      
    </div>
  </body>
</html>

<script type="text/javascript">

</script>
<style type="text/css">
  #logout
  {
    float: right;
    padding: 5px 10px;
  }
 
  #icfai-portal-name{
    font-family: initial;
    margin: auto;
    justify-content: center;
  }
   #Navbar-panel
   {
    margin: auto;
    overflow: auto;
    white-space: nowrap;
    list-style-type: none;
    justify-content: space-evenly;
    

   }
   #Navbar-panel li
   {
    padding: 5px 20px;
    display: inline-block;
   }
    #Navbar-panel input
   {
    margin: auto;
    text-decoration: none;
    color: white;
    background: transparent;
    transition: .5s;
    border: none;
   }
    #Navbar-panel input:hover
   {
    padding: 0px 20px;
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