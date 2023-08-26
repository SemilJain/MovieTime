<html>
<body>
<?php include 'header.php';
session_start();  
    if(!isset($_SESSION["sess_user"])){  
        header("location:login.php");  
    }?>
  <div id="main">
    <div id="content">
      <div class="box">
        <div class="head">
          <h2>MOVIES</h2>
          <p class="text-right">All Movies</p>
        </div>
        <div class="movie">
          <div class="movie-image"> <a href="golmaal.php"><span class="play"><span class="name">GOLMAAL AGAIN</span></span> <img src="css/images/golmaal.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"><a href="chef.php"> <span class="play"><span class="name">CHEF</span></span> <img src="css/images/chef.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"><a href="ittefaq.php"> <span class="play"><span class="name">ITTEFAQ</span></span> <img src="css/images/ittefaq.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"> <a href="newton.php"><span class="play"><span class="name">NEWTON</span></span> <img src="css/images/newton.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"><a href="judwaa2.php"> <span class="play"><span class="name">JUDWAA 2</span></span> <img src="css/images/judwaa2.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie last">
          <div class="movie-image"><a href="baadshaho.php"> <span class="play"><span class="name">BAADSHAHO</span></span> <img src="css/images/baadshaho.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"> <a href="haseena.php"><span class="play"><span class="name">HASEENA PARKAR</span></span> <img src="css/images/haseena.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"><a href="bhoomi.php"> <span class="play"><span class="name">BHOOMI</span></span> <img src="css/images/bhoomi.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"><a href="lucknow.php"> <span class="play"><span class="name">LUCKNOW CENTRAL</span></span> <img src="css/images/lucknow.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"> <a href="daddy.php"><span class="play"><span class="name">DADDY</span></span> <img src="css/images/daddy.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"><a href="shubh.php"> <span class="play"><span class="name">SHUBH MANGAL SAAVDHAN</span></span> <img src="css/images/shubh.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie last">
          <div class="movie-image"><a href="poster.php"> <span class="play"><span class="name">POSTER BOYS</span></span> <img src="css/images/poster.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"><a href="padmavati.php"> <span class="play"><span class="name">PADMAVATI</span></span> <img src="css/images/padmavati.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>

</div>
</div>
</body>
</html>
