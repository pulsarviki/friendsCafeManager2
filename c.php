
<!DOCTYPE html>
<html>
<head>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.nivo.slider.pack.js"></script>

<script>
imageArray=new Array;

imageArray[0]=new Image;
imageArray[0].src="image7.jpg";

imageArray[1]=new Image;
imageArray[1].src="image2.jpg";

imageArray[2]=new Image;
imageArray[2].src="image3.jpg";

imageArray[3]=new Image;
imageArray[3].src="image4.jpg";

imageArray[4]=new Image;
imageArray[4].src="image5.jpg";

imageArray[5]=new Image;
imageArray[5].src="image6.jpg";

imageArray[6]=new Image;
imageArray[6].src="image1.jpg";


function change()
{
    setTimeout("document.images['b1'].src=imageArray[0].src",1000);

	setTimeout("document.images['b1'].src=imageArray[1].src",2500);

	setTimeout("document.images['b1'].src=imageArray[2].src",4000);

	setTimeout("document.images['b1'].src=imageArray[3].src",5500);

	setTimeout("document.images['b1'].src=imageArray[4].src",7000);

	setTimeout("document.images['b1'].src=imageArray[5].src",8500);

	setTimeout("document.images['b1'].src=imageArray[6].src",10000);

	setTimeout("document.images['b1'].src=imageArray[7].src",11500);


	}
function c()
{
    window.open("f.php");
}
</script>
</head>
<body onload="change()" style=" background-image: url(wood.jpg);background-attachment: scroll;background-size: cover">

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
                     <!-- <li><a href="index.html"><div style="position: absolute;left:250px;top:20px"><img src="imagesa.jpg" alt="" height="100" width="120" /></a></div></li>-->


                      <li><a href="1.php" class="home">Home</a></li>
                    <li><a href="2.php" class="home">Gallery</a></li>
                    <li><a href="3.php" class="home">Menu</a></li>
                    <li><a href="alertt1.php" class="home">Booking</a></li>
                     <li><a href="alertt.php" class="home">Feedback</a></li>
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
    <?php
    $con=mysql_connect("localhost","root","root") or die(mysql_errno());
                                $db=  mysql_select_db("test") or die(mysql_errno());
                                $sql1="select * from Booklist";
                                $res1=mysql_query($sql1);

                                  ?>
 <div style="position: absolute;left:350px;top:250px">
     <table style="background-image: url('Woodme.jpg');border-style: solid;border-color: #000;border-width: 5px;width: 250px">



    <?php
    $value=1;
      while($row = mysql_fetch_array($res1))
                                    {
                                echo '<tr><td style=" color:#fff">';
                                echo $value;
                                echo ')';
                                $value++;
                                echo $row['dt'];
                                echo '</td>';
                                echo '</tr>';
                                    }

    ?>
     </table>
 </div>
     <div style="position: absolute;left:350px;top:300px">
         <input type="button" value="Confirmation" onclick="c()">
     </div>
    </body>
</html>


