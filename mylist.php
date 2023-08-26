<?php 
include 'dbconn.php';
include 'header.php';
session_start();
$user=$_SESSION['email'];
$c=0;
?>
<h1>MY MOVIE LIST</H1>
<h3>
<br><br><br>
<?php
$sql="SELECT distinct * FROM Mylist where Email='$user'";
$query=mysqli_query($conn,$sql);  
$numrows=mysqli_num_rows($query);

if(mysqli_num_rows($query)>0)
{
	while($row=mysqli_fetch_assoc($query))
	{
	$c=$c+1;
	$link=$row["link"];
	?>
	
	<a href="<?php echo $link ?>"><?php echo strtoupper($c.". ".$row["Movie"]."<br><br>");?></a><?php
	}
}
else
echo "NO MOVIES";
  
mysqli_close($conn);

?>
</h3>
