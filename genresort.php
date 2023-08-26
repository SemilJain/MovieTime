<?php include "header.php";
session_start();  
    if(!isset($_SESSION["sess_user"])){  
        header("location:login.php");  
    }
?>
<html>
<style>
.filterDiv {
  float: left;
  color: #ffffff;
  display: none;
}


.show {
  display: block;
}

.container {
  margin-top: 20px;
  overflow: hidden;
}
</style>
<body>
<h1>
 <p><a href="searchmovie.php">Search by Name</a>&nbsp;&nbsp; | &nbsp;&nbsp;<a href="genresort.php">Search by Genre</a></p>  
<br>
<input type="radio" onclick="filterSelection('all')" name="category" checked> Show all &nbsp;&nbsp;
<input type="radio" onclick="filterSelection('action')" name="category"> Action &nbsp;&nbsp;
<input type="radio" onclick="filterSelection('comedy')" name="category"> Comedy&nbsp;&nbsp;
<input type="radio" onclick="filterSelection('mystery')" name="category"> Mystery&nbsp;&nbsp;
<input type="radio" onclick="filterSelection('thriller')" name="category"> Thriller<br>
<input type="radio" onclick="filterSelection('drama')" name="category"> Drama&nbsp;&nbsp;
<input type="radio" onclick="filterSelection('romance')" name="category"> Romance&nbsp;&nbsp;
<input type="radio" onclick="filterSelection('crime')" name="category"> Crime&nbsp;&nbsp;
<input type="radio" onclick="filterSelection('biography')" name="category"> Biography&nbsp;&nbsp;
<input type="radio" onclick="filterSelection('history')" name="category"> History&nbsp;&nbsp;
</h1>
<div id="main">
    <div id="content">
    <div class="box">
<div class="container">
  <div class="filterDiv action comedy">
  <div class="movie">
          <div class="movie-image"> <a href="golmaal.php"><span class="play"><span class="name">GOLMAAL AGAIN</span></span> <img src="css/images/golmaal.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        </div>
        
  <div class="filterDiv drama comedy"><div class="movie">
          <div class="movie-image"><a href="chef.php"> <span class="play"><span class="name">CHEF</span></span> <img src="css/images/chef.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div></div>
   <div class="filterDiv mystery thriller"><div class="movie">
          <div class="movie-image"><a href="ittefaq.php"> <span class="play"><span class="name">ITTEFAQ</span></span> <img src="css/images/ittefaq.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div></div>
   <div class="filterDiv drama comedy"><div class="movie">
          <div class="movie-image"> <a href="newton.php"><span class="play"><span class="name">NEWTON</span></span> <img src="css/images/newton.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div></div>
   <div class="filterDiv action drama comedy"> <div class="movie">
          <div class="movie-image"><a href="judwaa2.php"> <span class="play"><span class="name">JUDWAA 2</span></span> <img src="css/images/judwaa2.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div></div>
   <div class="filterDiv action thriller"><div class="movie last">
          <div class="movie-image"><a href="baadshaho.php"> <span class="play"><span class="name">BAADSHAHO</span></span> <img src="css/images/baadshaho.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div></div>
   <div class="filterDiv crime thriller"><div class="movie">
          <div class="movie-image"> <a href="haseena.php"> <span class="play"><span class="name">HASEENA PARKAR</span></span><img src="css/images/haseena.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div></div>
   <div class="filterDiv drama action"><div class="movie">
          <div class="movie-image">  <a href="bhoomi.php"><span class="play"><span class="name">BHOOMI</span></span> <img src="css/images/bhoomi.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div></div>
   <div class="filterDiv action crime"><div class="movie">
          <div class="movie-image">  <a href="lucknow.php"><span class="play"><span class="name">LUCKNOW CENTRAL</span></span><img src="css/images/lucknow.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div></div>
   <div class="filterDiv biography crime action"><div class="movie">
          <div class="movie-image">  <a href="daddy.php"><span class="play"><span class="name">DADDY</span></span> <img src="css/images/daddy.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div></div>
   <div class="filterDiv romance comedy"><div class="movie">
          <div class="movie-image"> <a href="shubh.php"> <span class="play"><span class="name">SHUBH MANGAL SAVDHAN</span></span> <img src="css/images/shubh.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div></div>
   <div class="filterDiv drama comedy"><div class="movie last">
          <div class="movie-image"> <a href="poster.php"> <span class="play"><span class="name">POSTER BOYS</span></span> <img src="css/images/poster.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div></div>
   <div class="filterDiv drama history"><div class="movie">
          <div class="movie-image">  <a href="padmavati.php"><span class="play"><span class="name">PADMAVATI</span></span> <img src="css/images/padmavati.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div></div>
  
</div></div></div></div>
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}
</script>

</body>
</html>

