  <section style="padding-top: 25vh;">
           
            <div class="container">
            <div class="row">
              <div class="col-md-4">
                  <h4>Welcome to student Area</h4>
            <?php echo "<h2>Home Page</h2><br><p>Welcome back<br>UserID=".$_SESSION['id']."<br>UserName=".$_SESSION['name']."!</p>";?>
            <?php echo $_SESSION['course']."<br>".$_SESSION['starting_year']; ?>
              </div>
              <div class="col-md-8">
                 <form method="post">
           
                   <ul id="welcome-panel" class="row">
                  
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
         
           </div>
  </section>
  <script type="text/javascript">
  var x=document.getElementById('home-screen');
window.onload=change();
function change(){
x.style.background='white';
x.style.padding='0px 20px';
x.style.borderRadius='15px';
x.style.color='black';

}
  </script>
  <style type="text/css">
  
    #welcome-panel 
    {
      list-style: none;
    }
    #welcome-panel li
    { width: 200px;
    height: 200px;
    border-radius: 20px;
    background: white;
    margin: 5px auto;
    text-align: center;

    }
    #welcome-panel input
    {
      background: white;
    padding: 40px;
    border:none;
    margin: 40px 0;
    }
  </style>