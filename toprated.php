<html>
<body>
<?php 
include 'header.php';
session_start();  
    if(!isset($_SESSION["sess_user"])){  
        header("location:login.php");  
    }
?>
<h1>

TOP RATED MOVIES
<div id="sortmain">
  <div id="<?php $_SESSION['mov']="newton"; include 'avg.php';?>">
  
  <div id="titleStoryLine" class="article" style="border-top-left-radius: 12px; border-top-right-radius: 12px; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px; border: 1px solid rgb(232, 232, 232); margin-top: 10px; padding: 10px 12px; width: auto; background-color: rgb(255, 255, 255);">
<td id="overview-top" style="font-family: Verdana, Arial, sans-serif; color: rgb(51, 51, 51); font-size: 13px; vertical-align: top; width: 415px;"><h1 class="header" style="color: rgb(51, 51, 51); font-size: 21px; line-height: 1px; margin: 0px; border-bottom-width: medium; border-bottom-style: none; padding: 0px;"> <span class="itemprop" itemprop="name" style="color: rgb(51, 51, 51); font-size: 21px; font-weight: bold;"><a href="newton.php"> Newton (2017)</a>  -  <?php $_SESSION['mov']="newton"; include 'avg.php'; if($arat==0)echo " (Not Rated)";?>/10 <img src="images/star.jpg" alt="stars" height="25" width="25"><br></span><span class="Apple-converted-space">&nbsp;</span><span class="nobr" style="white-space: nowrap; color: rgb(102, 102, 102); font-size: 15px; font-weight: normal;"></span></h1></div>
</div>
  
  <div id="<?php $_SESSION['mov']="ittefaq"; include 'avg.php';?>">
  <div id="titleStoryLine" class="article" style="border-top-left-radius: 12px; border-top-right-radius: 12px; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px; border: 1px solid rgb(232, 232, 232); margin-top: 10px; padding: 10px 12px; width: auto; background-color: rgb(255, 255, 255);">
<td id="overview-top" style="font-family: Verdana, Arial, sans-serif; color: rgb(51, 51, 51); font-size: 13px; vertical-align: top; width: 415px;"><h1 class="header" style="color: rgb(51, 51, 51); font-size: 21px; line-height: 1px; margin: 0px; border-bottom-width: medium; border-bottom-style: none; padding: 0px;"> <span class="itemprop" itemprop="name" style="color: rgb(51, 51, 51); font-size: 21px; font-weight: bold;"><a href="ittefaq.php"> Ittefaq (2017)</a>  -  <?php $_SESSION['mov']="ittefaq"; include 'avg.php'; if($arat==0)echo " (Not Rated)";?>/10 <img src="images/star.jpg" alt="stars" height="25" width="25"><br></span><span class="Apple-converted-space">&nbsp;</span><span class="nobr" style="white-space: nowrap; color: rgb(102, 102, 102); font-size: 15px; font-weight: normal;"></span></h1></div>
</div>
  
  <div id="<?php $_SESSION['mov']="bhoomi"; include 'avg.php';?>">
  <div id="titleStoryLine" class="article" style="border-top-left-radius: 12px; border-top-right-radius: 12px; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px; border: 1px solid rgb(232, 232, 232); margin-top: 10px; padding: 10px 12px; width: auto; background-color: rgb(255, 255, 255);">
<td id="overview-top" style="font-family: Verdana, Arial, sans-serif; color: rgb(51, 51, 51); font-size: 13px; vertical-align: top; width: 415px;"><h1 class="header" style="color: rgb(51, 51, 51); font-size: 21px; line-height: 1px; margin: 0px; border-bottom-width: medium; border-bottom-style: none; padding: 0px;"> <span class="itemprop" itemprop="name" style="color: rgb(51, 51, 51); font-size: 21px; font-weight: bold;"><a href="bhoomi.php"> Bhoomi (2017)</a>  -  <?php $_SESSION['mov']="bhoomi"; include 'avg.php'; if($arat==0)echo " (Not Rated)";?>/10 <img src="images/star.jpg" alt="stars" height="25" width="25"><br></span><span class="Apple-converted-space">&nbsp;</span><span class="nobr" style="white-space: nowrap; color: rgb(102, 102, 102); font-size: 15px; font-weight: normal;"></span></h1></div>
  </div>
  <div id="<?php $_SESSION['mov']="Shubh Mangal Saavdhan"; include 'avg.php';?>">
  <div id="titleStoryLine" class="article" style="border-top-left-radius: 12px; border-top-right-radius: 12px; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px; border: 1px solid rgb(232, 232, 232); margin-top: 10px; padding: 10px 12px; width: auto; background-color: rgb(255, 255, 255);">
<td id="overview-top" style="font-family: Verdana, Arial, sans-serif; color: rgb(51, 51, 51); font-size: 13px; vertical-align: top; width: 415px;"><h1 class="header" style="color: rgb(51, 51, 51); font-size: 21px; line-height: 1px; margin: 0px; border-bottom-width: medium; border-bottom-style: none; padding: 0px;"> <span class="itemprop" itemprop="name" style="color: rgb(51, 51, 51); font-size: 21px; font-weight: bold;"><a href="shubh.php"> Shubh Mangal Saavdhan (2017)</a>  -  <?php $_SESSION['mov']="Shubh Mangal Saavdhan"; include 'avg.php'; if($arat==0)echo " (Not Rated)";?>/10 <img src="images/star.jpg" alt="stars" height="25" width="25"><br></span><span class="Apple-converted-space">&nbsp;</span><span class="nobr" style="white-space: nowrap; color: rgb(102, 102, 102); font-size: 15px; font-weight: normal;"></span></h1></div>
  </div>
  <div id="<?php $_SESSION['mov']="golmaal again"; include 'avg.php';?>">
  <div id="titleStoryLine" class="article" style="border-top-left-radius: 12px; border-top-right-radius: 12px; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px; border: 1px solid rgb(232, 232, 232); margin-top: 10px; padding: 10px 12px; width: auto; background-color: rgb(255, 255, 255);">
<td id="overview-top" style="font-family: Verdana, Arial, sans-serif; color: rgb(51, 51, 51); font-size: 13px; vertical-align: top; width: 415px;"><h1 class="header" style="color: rgb(51, 51, 51); font-size: 21px; line-height: 1px; margin: 0px; border-bottom-width: medium; border-bottom-style: none; padding: 0px;"> <span class="itemprop" itemprop="name" style="color: rgb(51, 51, 51); font-size: 21px; font-weight: bold;"><a href="golmaal.php"> Golmaal Again (2017)</a>  -  <?php $_SESSION['mov']="golmaal again"; include 'avg.php'; if($arat==0)echo " (Not Rated)";?>/10 <img src="images/star.jpg" alt="stars" height="25" width="25"><br></span><span class="Apple-converted-space">&nbsp;</span><span class="nobr" style="white-space: nowrap; color: rgb(102, 102, 102); font-size: 15px; font-weight: normal;"></span></h1></div>
</div>
  
  <div id="<?php $_SESSION['mov']="haseena parkar"; include 'avg.php';?>">
  <div id="titleStoryLine" class="article" style="border-top-left-radius: 12px; border-top-right-radius: 12px; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px; border: 1px solid rgb(232, 232, 232); margin-top: 10px; padding: 10px 12px; width: auto; background-color: rgb(255, 255, 255);">
<td id="overview-top" style="font-family: Verdana, Arial, sans-serif; color: rgb(51, 51, 51); font-size: 13px; vertical-align: top; width: 415px;"><h1 class="header" style="color: rgb(51, 51, 51); font-size: 21px; line-height: 1px; margin: 0px; border-bottom-width: medium; border-bottom-style: none; padding: 0px;"> <span class="itemprop" itemprop="name" style="color: rgb(51, 51, 51); font-size: 21px; font-weight: bold;"><a href="haseena.php"> Haseena Parkar (2017)</a>  -  <?php $_SESSION['mov']="haseena parkar"; include 'avg.php';if($arat==0)echo " (Not Rated)";?>/10 <img src="images/star.jpg" alt="stars" height="25" width="25"><br></span><span class="Apple-converted-space">&nbsp;</span><span class="nobr" style="white-space: nowrap; color: rgb(102, 102, 102); font-size: 15px; font-weight: normal;"></span></h1></div>
  </div>
  
  <div id="<?php $_SESSION['mov']="padmavati"; include 'avg.php';?>">
  <div id="titleStoryLine" class="article" style="border-top-left-radius: 12px; border-top-right-radius: 12px; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px; border: 1px solid rgb(232, 232, 232); margin-top: 10px; padding: 10px 12px; width: auto; background-color: rgb(255, 255, 255);">
<td id="overview-top" style="font-family: Verdana, Arial, sans-serif; color: rgb(51, 51, 51); font-size: 13px; vertical-align: top; width: 415px;"><h1 class="header" style="color: rgb(51, 51, 51); font-size: 21px; line-height: 1px; margin: 0px; border-bottom-width: medium; border-bottom-style: none; padding: 0px;"> <span class="itemprop" itemprop="name" style="color: rgb(51, 51, 51); font-size: 21px; font-weight: bold;"><a href="padmavati.php"> Padmavati (2017)</a>  -  <?php $_SESSION['mov']="padmavati"; include 'avg.php'; if($arat==0)echo " (Not Rated)";?>/10 <img src="images/star.jpg" alt="stars" height="25" width="25"><br></span><span class="Apple-converted-space">&nbsp;</span><span class="nobr" style="white-space: nowrap; color: rgb(102, 102, 102); font-size: 15px; font-weight: normal;"></span></h1></div>
  </div>
 
  <div id="<?php $_SESSION['mov']="chef"; include 'avg.php';?>">
  <div id="titleStoryLine" class="article" style="border-top-left-radius: 12px; border-top-right-radius: 12px; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px; border: 1px solid rgb(232, 232, 232); margin-top: 10px; padding: 10px 12px; width: auto; background-color: rgb(255, 255, 255);">
<td id="overview-top" style="font-family: Verdana, Arial, sans-serif; color: rgb(51, 51, 51); font-size: 13px; vertical-align: top; width: 415px;"><h1 class="header" style="color: rgb(51, 51, 51); font-size: 21px; line-height: 1px; margin: 0px; border-bottom-width: medium; border-bottom-style: none; padding: 0px;"> <span class="itemprop" itemprop="name" style="color: rgb(51, 51, 51); font-size: 21px; font-weight: bold;"><a href="chef.php"> Chef (2017)</a>  -  <?php $_SESSION['mov']="chef"; include 'avg.php'; if($arat==0)echo " (Not Rated)";?>/10 <img src="images/star.jpg" alt="stars" height="25" width="25"><br></span><span class="Apple-converted-space">&nbsp;</span><span class="nobr" style="white-space: nowrap; color: rgb(102, 102, 102); font-size: 15px; font-weight: normal;"></span></h1></div>
  </div>
  
  <div id="<?php $_SESSION['mov']="baadshaho"; include 'avg.php';?>">
  <div id="titleStoryLine" class="article" style="border-top-left-radius: 12px; border-top-right-radius: 12px; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px; border: 1px solid rgb(232, 232, 232); margin-top: 10px; padding: 10px 12px; width: auto; background-color: rgb(255, 255, 255);">
<td id="overview-top" style="font-family: Verdana, Arial, sans-serif; color: rgb(51, 51, 51); font-size: 13px; vertical-align: top; width: 415px;"><h1 class="header" style="color: rgb(51, 51, 51); font-size: 21px; line-height: 1px; margin: 0px; border-bottom-width: medium; border-bottom-style: none; padding: 0px;"> <span class="itemprop" itemprop="name" style="color: rgb(51, 51, 51); font-size: 21px; font-weight: bold;"><a href="baadshaho.php"> Baadshaho (2017)</a>  -  <?php $_SESSION['mov']="baadshaho"; include 'avg.php'; if($arat==0)echo " (Not Rated)";?>/10 <img src="images/star.jpg" alt="stars" height="25" width="25"><br></span><span class="Apple-converted-space">&nbsp;</span><span class="nobr" style="white-space: nowrap; color: rgb(102, 102, 102); font-size: 15px; font-weight: normal;"></span></h1></div>
  </div>
  
  <div id="<?php $_SESSION['mov']="judwaa 2"; include 'avg.php';?>">
  <div id="titleStoryLine" class="article" style="border-top-left-radius: 12px; border-top-right-radius: 12px; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px; border: 1px solid rgb(232, 232, 232); margin-top: 10px; padding: 10px 12px; width: auto; background-color: rgb(255, 255, 255);">
<td id="overview-top" style="font-family: Verdana, Arial, sans-serif; color: rgb(51, 51, 51); font-size: 13px; vertical-align: top; width: 415px;"><h1 class="header" style="color: rgb(51, 51, 51); font-size: 21px; line-height: 1px; margin: 0px; border-bottom-width: medium; border-bottom-style: none; padding: 0px;"> <span class="itemprop" itemprop="name" style="color: rgb(51, 51, 51); font-size: 21px; font-weight: bold;"><a href="judwaa2.php"> Judwaa 2 (2017)</a>  -  <?php $_SESSION['mov']="judwaa 2"; include 'avg.php'; if($arat==0)echo " (Not Rated)";?>/10 <img src="images/star.jpg" alt="stars" height="25" width="25"><br></span><span class="Apple-converted-space">&nbsp;</span><span class="nobr" style="white-space: nowrap; color: rgb(102, 102, 102); font-size: 15px; font-weight: normal;"></span></h1></div>
  </div>
  
  <div id="<?php $_SESSION['mov']="daddy"; include 'avg.php';?>">
  <div id="titleStoryLine" class="article" style="border-top-left-radius: 12px; border-top-right-radius: 12px; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px; border: 1px solid rgb(232, 232, 232); margin-top: 10px; padding: 10px 12px; width: auto; background-color: rgb(255, 255, 255);">
<td id="overview-top" style="font-family: Verdana, Arial, sans-serif; color: rgb(51, 51, 51); font-size: 13px; vertical-align: top; width: 415px;"><h1 class="header" style="color: rgb(51, 51, 51); font-size: 21px; line-height: 1px; margin: 0px; border-bottom-width: medium; border-bottom-style: none; padding: 0px;"> <span class="itemprop" itemprop="name" style="color: rgb(51, 51, 51); font-size: 21px; font-weight: bold;"><a href="daddy.php"> Daddy (2017)</a>  -  <?php $_SESSION['mov']="daddy"; include 'avg.php'; if($arat==0)echo " (Not Rated)";?>/10 <img src="images/star.jpg" alt="stars" height="25" width="25"><br></span><span class="Apple-converted-space">&nbsp;</span><span class="nobr" style="white-space: nowrap; color: rgb(102, 102, 102); font-size: 15px; font-weight: normal;"></span></h1></div>
  </div>
  
  <div id="<?php $_SESSION['mov']="lucknow central"; include 'avg.php';?>">
  <div id="titleStoryLine" class="article" style="border-top-left-radius: 12px; border-top-right-radius: 12px; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px; border: 1px solid rgb(232, 232, 232); margin-top: 10px; padding: 10px 12px; width: auto; background-color: rgb(255, 255, 255);">
<td id="overview-top" style="font-family: Verdana, Arial, sans-serif; color: rgb(51, 51, 51); font-size: 13px; vertical-align: top; width: 415px;"><h1 class="header" style="color: rgb(51, 51, 51); font-size: 21px; line-height: 1px; margin: 0px; border-bottom-width: medium; border-bottom-style: none; padding: 0px;"> <span class="itemprop" itemprop="name" style="color: rgb(51, 51, 51); font-size: 21px; font-weight: bold;"><a href="lucknow.php"> Lucknow Central (2017)</a>  -  <?php $_SESSION['mov']="lucknow central"; include 'avg.php'; if($arat==0)echo " (Not Rated)";?>/10 <img src="images/star.jpg" alt="stars" height="25" width="25"><br></span><span class="Apple-converted-space">&nbsp;</span><span class="nobr" style="white-space: nowrap; color: rgb(102, 102, 102); font-size: 15px; font-weight: normal;"></span></h1></div>
  </div>

<div id="<?php $_SESSION['mov']="poster boys"; include 'avg.php';?>">
  <div id="titleStoryLine" class="article" style="border-top-left-radius: 12px; border-top-right-radius: 12px; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px; border: 1px solid rgb(232, 232, 232); margin-top: 10px; padding: 10px 12px; width: auto; background-color: rgb(255, 255, 255);">
<td id="overview-top" style="font-family: Verdana, Arial, sans-serif; color: rgb(51, 51, 51); font-size: 13px; vertical-align: top; width: 415px;"><h1 class="header" style="color: rgb(51, 51, 51); font-size: 21px; line-height: 1px; margin: 0px; border-bottom-width: medium; border-bottom-style: none; padding: 0px;"> <span class="itemprop" itemprop="name" style="color: rgb(51, 51, 51); font-size: 21px; font-weight: bold;"><a href="poster.php"> Poster Boys (2017)</a>  -  <?php $_SESSION['mov']="poster boys"; include 'avg.php'; if($arat==0)echo " (Not Rated)";?>/10 <img src="images/star.jpg" alt="stars" height="25" width="25"><br></span><span class="Apple-converted-space">&nbsp;</span><span class="nobr" style="white-space: nowrap; color: rgb(102, 102, 102); font-size: 15px; font-weight: normal;"></span></h1></div>
  </div>

</div>
</h1>
<script>
var main = document.getElementById( 'sortmain' );

[].map.call( main.children, Object ).sort( function ( a, b ) {
    return +b.id.match( /\d+/ ) - +a.id.match( /\d+/ );
}).forEach( function ( elem ) {
    main.appendChild( elem );
});
</script>
</body>
</html>
