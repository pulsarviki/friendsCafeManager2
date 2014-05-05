<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script>
        function a()
        {
                 //window.open("9.html");
                alert("You have to sign up before Giving Feedback");
    }
    function user()
        {
            window.open("10.php");
        }
        function admin()
        {
             window.open("11.php");
        }
  </script>
  </head>
  <body onload="a()"  style=" background-image: url(wood.jpg);background-attachment: scroll;background-size: cover">
        <div class="main_wrap">
  <div class="main">
    <div class="main_wrap">
      <div class="top_area">
        <div class="top_area_main">
          <div class="logo_area">
            <div class="main_wrap">

            </div>
          </div>
          <div class="nav_area">
            <div class="main_wrap">
              <div class="nav_pasition">
                  <div class="nav_wrap" style="border: 5px solid #000;position: absolute; left: 275px;top: 30px">

                  <ul>
                    <li><a href="1.php" class="home">Home</a></li>
                    <li><a href="2.php" class="home">Gallery</a></li>
                    <li><a href="3.php" class="home">Menu</a></li>
                    <li><a href="alertt1.php" class="home">Booking</a></li>
                     <li><a href="7.php" class="home">Feedback</a></li>
                      <li><a href="12.php" class="home">Contact us</a></li>
                       <li><a href="9.php" class="home">Sign up</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



    <div style="border: 5px solid #000;position: absolute;left:40px;top:20px">
        <img src="cornercup.jpg" height="200" width="200" alt="kdkdkd" >
    </div>

   <div style="position: absolute;left:25px;top:250px">
        <img src="ig.JPG" height="580" width="250" alt="kdkdkd" >
    </div>
    <div style="position: absolute;left:1100px;top:100px">
        <img src="b21.JPG" height="50" width="100" alt="kdkdkd" onclick="user()" >
        <div style="position: absolute;left:18px;top:12px; font-size:25px;font-family:Impact, Charcoal, sans-serif;color:#000">
            <p>User</p>
        </div>
    </div>
    <div style="position: absolute;left:1220px;top:100px">
        <img src="b21.JPG" height="50" width="100" alt="kdkdkd" onclick="admin()" >
        <div style="position: absolute;left:15px;top:12px; font-size:25px;font-family:Impact, Charcoal, sans-serif;color:#000">
            <p>Admin</p>
        </div>
    </div>


  </body>
</html>
