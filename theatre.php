<?php include 'header.php';
session_start();  
    if(!isset($_SESSION["sess_user"])){  
        header("location:login.php");  
    }?>
<html>
<body>
<div id="main">
    <div id="content">
      <div class="box">
        <div class="head">
          <h2>MOVIES</h2>
          <p class="text-right">In Theatre</p>
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
</div>
</div>
</div>

<form action="" method="post">
Select Movie:      <select name="movie" id="movie" value="select">
		  <option value="Golmaal Again">Golmaal Again</option>
		  <option value="Chef">Chef</option>
		  <option value="Newton">Newton</option>
		  <option value="Judwaa 2">Judwaa 2</option>
		  </select><br><br>
		 Select City:&nbsp;&nbsp;&nbsp;&nbsp; <select name="city">
		  <option value="Mumbai">Mumbai</option>
		   <option value="Delhi">Delhi</option>
		    <option value="Bengaluru">Bengaluru</option>
		     <option value="Kolkata">Kolkata</option>
		      <option value="other">Other</option>
		   </select>
		  	  <br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  	  &nbsp;&nbsp;
	          <input type="submit" name="submit" value="submit" ><br><br><br>
</form>
        

<?php 
if(isset($_POST["submit"])){

	$movie=$_POST['movie'];
	$city=$_POST['city'];
	if($city=="Mumbai")
	{
	
		if($movie=="Golmaal Again")
		{
		?>	
			<a href="https://in.bookmyshow.com/buytickets/golmaal-again-mumbai/movie-mumbai-ET00044074-MT/20171020" target="_blank"> Book Ticket for <?php echo $movie;?></a>	
		<?php
		}
		else if($movie=="Chef")
		{
		?>	
			<a href="https://in.bookmyshow.com/buytickets/chef-hindi-mumbai/movie-mumbai-ET00053797-MT/20171015" target="_blank"> Book Ticket for <?php echo $movie;?></a>	
		<?php
		}
		else if($movie=="Newton")
		{
		?>	
			<a href="https://in.bookmyshow.com/buytickets/newton-mumbai/movie-mumbai-ET00052452-MT/20171015" target="_blank"> Book Ticket for <?php echo $movie;?></a>	
		<?php
		}
		else if($movie=="Judwaa 2")
		{
		?>	
			<a href="https://in.bookmyshow.com/buytickets/judwaa-2-mumbai/movie-mumbai-ET00038655-MT/20171015" target="_blank"> Book Ticket for <?php echo $movie;?></a>	
		<?php
		}
	}
	else if($city=="Delhi")
	{
	
		if($movie=="Golmaal Again")
		{
		?>	
			<a href="https://in.bookmyshow.com/buytickets/golmaal-again-delhi/movie-delhi-ET00044074-MT/20171020" target="_blank"> Book Ticket for <?php echo $movie;?></a>	
		<?php
		}
		else if($movie=="Chef")
		{
		?>	
			<a href="https://in.bookmyshow.com/buytickets/chef-hindi-delhi/movie-delhi-ET00053797-MT/20171015" target="_blank"> Book Ticket for <?php echo $movie;?></a>	
		<?php
		}
		else if($movie=="Newton")
		{
		?>	
			<a href="https://in.bookmyshow.com/buytickets/newton-delhi/movie-delhi-ET00052452-MT/20171015" target="_blank"> Book Ticket for <?php echo $movie;?></a>	
		<?php
		}
		else if($movie=="Judwaa 2")
		{
		?>	
			<a href="https://in.bookmyshow.com/buytickets/judwaa-2-delhi/movie-delhi-ET00038655-MT/20171015" target="_blank"> Book Ticket for <?php echo $movie;?></a>	
		<?php
		}
	}
	else if($city=="Bengaluru")
	{
	
		if($movie=="Golmaal Again")
		{
		?>	
			<a href="https://in.bookmyshow.com/buytickets/golmaal-again-bengaluru/movie-bang-ET00044074-MT/20171020" target="_blank"> Book Ticket for <?php echo $movie;?></a>	
		<?php
		}
		else if($movie=="Chef")
		{
		?>	
			<a href="https://in.bookmyshow.com/buytickets/chef-hindi-bengaluru/movie-bang-ET00053797-MT/20171016" target="_blank"> Book Ticket for <?php echo $movie;?></a>	
		<?php
		}
		else if($movie=="Newton")
		{
		?>	
			<a href="https://in.bookmyshow.com/buytickets/newton-bengaluru/movie-bang-ET00052452-MT/20171015" target="_blank"> Book Ticket for <?php echo $movie;?></a>	
		<?php
		}
		else if($movie=="Judwaa 2")
		{
		?>	
			<a href="https://in.bookmyshow.com/buytickets/judwaa-2-bengaluru/movie-bang-ET00038655-MT/20171015" target="_blank"> Book Ticket for <?php echo $movie;?></a>	
		<?php
		}
	}
	else if($city=="Kolkata")
	{
	
		if($movie=="Golmaal Again")
		{
		?>	
			<a href="https://in.bookmyshow.com/movies/golmaal-again/ET00044074" target="_blank"> Book Ticket for <?php echo $movie;?></a>	
		<?php
		}
		else if($movie=="Chef")
		{
		?>	
			<a href="https://in.bookmyshow.com/buytickets/chef-hindi-kolkata/movie-kolk-ET00053797-MT/20171015" target="_blank"> Book Ticket for <?php echo $movie;?></a>	
		<?php
		}
		else if($movie=="Newton")
		{
		?>	
			<a href="https://in.bookmyshow.com/buytickets/newton-kolkata/movie-kolk-ET00052452-MT/20171015" target="_blank"> Book Ticket for <?php echo $movie;?></a>	
		<?php
		}
		else if($movie=="Judwaa 2")
		{
		?>	
			<a href="https://in.bookmyshow.com/buytickets/judwaa-2-kolkata/movie-kolk-ET00038655-MT/20171015" target="_blank"> Book Ticket for <?php echo $movie;?></a>	
		<?php
		}
	}
	else if($city=="other")
	{
	?>	
			<a href="https://in.bookmyshow.com/mumbai/movies" target="_blank"> Book Ticket for <?php echo $movie;?></a>	
		<?php
	}
} 
?>
</body>
</html>
