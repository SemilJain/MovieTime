<html>
<head>
	<title>Movie-Time Login</title>

<font color="white">
<script>
type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">

</head>
<body>
<div class="header-w3l">
	</div>
<div class="main-agileits">
	<h2 class="sub-head">Add Review</h2>
		<div class="sub-main">	
<FORM method="POST" action="">

	
	<textarea name = "review" row="3" cols="50" placeholder="Add Review"></textarea><br><br>
	
	Rating:<select name="rating" id="rating" value="rating">
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="4">4</option>
		  <option value="5">5</option>
		  </select>
         <br><input type="submit" name="submit" value="submit">
	     <input action="action" onclick="window.history.go(-2); return false;" type="button" value="Back" />		
</FORM>
</div>	
		<div class="clear"></div>
</div>
</font>


<?php  
session_start();
    if(isset($_POST["submit"])){  
    if(!empty($_POST['rating']) && !empty($_POST['review'])) {  
        $rat=$_POST["rating"];  
        $rev=$_POST["review"];
        $movie=$_SESSION['movie']; 
        $date=date("Y-m-d"); 
        $user=$_SESSION['email'];
      
include 'dbconn.php';      	
     
$sql2="INSERT INTO Review VALUES('$user','$movie','$date','$rat','$rev')";

if($conn->query($sql2) === TRUE)
{
	echo "Review Submitted Succesfully.";
	 
}
else
{
	echo "Error Inserting Values: " . $conn->error;
	
}
   
} else {  
        echo "All fields are required!";  
    }  
    }  
?>  
</body>
<html/>
