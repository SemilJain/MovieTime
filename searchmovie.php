<?php include "header.php";
session_start();  
   if(!isset($_SESSION["sess_user"])){  
        header("location:login.php");  
    }
?>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
</style>
</head>
<body>

<h1>
 <p><a href="searchmovie.php">Search by Name</a>&nbsp;&nbsp; | &nbsp;&nbsp;<a href="genresort.php">Search by Genre</a></p>  
<br>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Movies.." title="Type in a name">

<ul id="myUL">
  <li><a href="baadshaho.php">Baadshaho</a></li>
  <li><a href="bhoomi.php">Bhoomi</a></li>

  <li><a href="chef.php">Chef</a></li>
  <li><a href="daddy.php">Daddy</a></li>

  <li><a href="golmaal.php">Golmaal Again</a></li>
  <li><a href="haseena.php">Haseena Parkar</a></li>

  <li><a href="ittefaq.php">Ittefaq</a></li>
  <li><a href="judwaa2.php">Judwaa 2</a></li> 
  
  <li><a href="lucknow.php">Lucknow Central</a></li>
  <li><a href="newton.php">Newton</a></li>
  
  <li><a href="padmavati.php">Padmavati</a></li>
  <li><a href="poster.php">Poster Boys</a></li>
  
  <li><a href="shubh.php">Shubh Mangal Saavdhan</a></li>
  
</ul>

<script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}
</script>

</body>
</html>

