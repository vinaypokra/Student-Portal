  <section style="padding: 20vh 0;">
           <div class="container">
           <h4>Admin Area</h4>
            <?php echo "<h2>Home Page</h2><br><p>Welcome back<br>UserID=".$_SESSION['id']."<br>UserName=".$_SESSION['name']."!</p>";?>
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