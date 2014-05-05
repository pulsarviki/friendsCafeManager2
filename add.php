<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.nivo.slider.pack.js"></script>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
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
	
</script>
    </head>
<html>
    <head>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.nivo.slider.pack.js"></script>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
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

</script>
    </head>
    <body onload="change()"  style="background-image: url(wood.jpg);background-attachment: scroll;background-size: cover">
        <?php
       $Name1=$_GET["text1"];
        $password1=$_GET["text2"];
        $Address1=$_GET["text3"];
        $Phone1=$_GET["text4"];
        $emailid1=$_GET["text5"];
     
              $con=mysql_connect("localhost","root","root") or die(mysql_errno());
        $db=  mysql_select_db("test") or die(mysql_errno());


            $sql="insert into register(Name,password,Address,phone,email_id)  values('$Name1','$password1','$Address1','$phone1','$emailid1')";
            $res=mysql_query($sql);
        //if (mysql_numrows($res)>0)
           //  echo "Error in Inserting table: " . mysql_error();
        //else
      //echo "Inserted successfully";
      
?>
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

   <div style="position: absolute;left:280px;top:80px">
       <p style="font-family: Mistral; font-size: 72px; color: #eb1b1b">
           Lots can happen over a cup of coffee..</p>
    </div>

   <div style="position: absolute;left:680px;top:160px">
       <p style="font-family: Mistral; font-size: 72px; color: #eb1b1b">
           ..only at Friends Cafe!</p>
    </div>

   <div style="position: absolute;left:290px;top:190px;margin: 6em 30em">
       <p style="font-family: Tekton Pro; font-size: 22px;font: bold; color: #fff">
           Coffee production in India is dominated in the hill tracts of South Indian states,
           with the state of Karnataka accounting 53% followed by Kerala 28% and Tamil Nadu 11%
           of production of 8,200 tonnes.
           </p>
    </div>

   <div style="position: absolute;left:-25px;top:370px;margin: 6em 30em">
       <p style="font-family: Tekton Pro; font-size: 22px;font: bold; color: #fff">
           Coffee is grown in three regions of India with Karnataka, Kerala and Tamil Nadu forming the
           traditional coffee growing region of South India,
           followed by the new areas developed in the non-traditional areas of Andhra Pradesh and Orissa
           in the eastern coast of the country and with a third region comprising the states of Assam,
           Manipur, Meghalaya, Mizoram, Tripura, Nagaland and Arunachal Pradesh of Northeastern India,
           popularly known as “Seven Sister States of India".[4]
Indian coffee, grown mostly in southern India under monsoon rainfall conditions, is also termed as “Indian
monsooned coffee". Its flavour is defined as: "The best Indian coffee reaches the flavour
characteristics of Pacific coffees, but at its worst it is simply bland and uninspiring”.[5]
The four well known varieties of coffee grown are the Barista, Arabica, Robusta, the first
variety that was introduced in the Baba Budan Giri hill ranges of Karnataka in the 17th century[6]
marketed over the years under the brand names of Kent and S.795.
           </p>
    </div>

<div style="position: absolute;left:330px;top:250px;border: 5px solid #000;">
<img src="image1.jpg" height="175" width="300" id="b1" name="b1"></div>

   <div class="newsticker-jcarousellite"
        style="position: absolute; left: 1000px;top: 250px;color: #000;">

                                    <table style="background-image: url('Woodme.jpg');border-style: solid;border-color: #000;border-width: 5px;width: 250px">
                                    <tr>
                                        <th style="color:#ff0000;font-size: 24px;"><b>Events</b></th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <ul><li>
                            <div class="thumbnail" style="color:#ff0000;font-size: 20px; ">
				Restaurants:
                            </div>
                            <div class="info" style="color:#fff;font-size: 13px;" id="1">
			<?php   $con=mysql_connect("localhost","root","root") or die(mysql_errno());
                                $db=  mysql_select_db("test") or die(mysql_errno());
                                $sql1="(select * from Eventlist);";
                                $res1=mysql_query($sql1);
                                while($row = mysql_fetch_array($res1))
                                    {
                                echo $row['Restaurnt'];
                                    } ?>
                            </div></li>
                            <li>
                                <div class="thumbnail" style="color:#ff0000;font-size: 20px;" >
				Entertainment:
                                </div>
                                <div class="info" style="color:#fff;font-size: 13px;" id="2">
			<?php   $con=mysql_connect("localhost","root","root") or die(mysql_errno());
                                $db=  mysql_select_db("test") or die(mysql_errno());
                                $sql1="(select * from Eventlist);";
                                $res1=mysql_query($sql1);
                                while($row = mysql_fetch_array($res1))
                                    {
                                echo $row['Entertainment'];
                                    } ?>
                                </div>
                            </li>
                            <li>
                                <div class="thumbnail" style="color:#ff0000;font-size: 20px;">
				Wines:
                                </div>
                                <div class="info" style="color:#fff;font-size: 13px; "id="3">
				<?php   $con=mysql_connect("localhost","root","root") or die(mysql_errno());
                                $db=  mysql_select_db("test") or die(mysql_errno());
                                $sql1="(select * from Eventlist);";
                                $res1=mysql_query($sql1);
                                while($row = mysql_fetch_array($res1))
                                    {
                                echo $row['Wines'];
                                    } ?>
                                </div>
                            </li>
                        </ul>
                                        </td>
                                    </tr>
                                </table>

 </div>

</html>
