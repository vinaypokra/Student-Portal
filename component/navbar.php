  <section id="icfai-Navbar-page">
    <!-- Navbar code put here -->
    <div class="row" style="margin: 0;">
      <div id="icfai-header-content" class="col-md-6">
        <div class="row" style="margin: 0;">
           <div id="icfai-logo" class="col-6 text-center">
             <img src="img/icfai-logo.png" width="50%" height="50%">
           </div>
            <div id="icfai-portal-name" class="col-6 text-center">
             <h4>ICFAI Student Portal</h4>
           </div>
        </div>
      </div>
      <div class="col-md-6 text-center" style="margin: auto;">
        <ul id="Navbar-panel">
          <li ><a href="#icfai-home-header-page">Home</a></li>
          <li><a href="#content-club-event-page">Event</a></li>
          <li><a href="#icfai-Contact-page">Contact</a></li>
          <li><a href="#icfai-Aboutus-page">About us</a></li>
          <li><a href="icfai-student-area/">Login</a></li>
        </ul>
      </div>
    </div>
  </section>


  <!-- script for Navbar page -->
  <script type="text/javascript">
    
  </script>
  <!-- style for Navbar page -->
  <style type="text/css">
  #icfai-logo{
    margin: auto;
    justify-content: center;
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
    #Navbar-panel a
   {
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
    padding: 10px 0px;
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
 
  </style>