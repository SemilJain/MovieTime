<?php include 'header.php';
include 'dbconn.php';
session_start();
$user=$_SESSION['email'];
$sql="SELECT * FROM Review where Email='$user' ";
$query=mysqli_query($conn,$sql);  
$numrows=mysqli_num_rows($query);  
?>
<h1>My reviews</h1>        
<div id="maindetails_center_bottom" class="maindetails_center" style="margin-top: 10px; width: 646px; float: left; margin-left: 20px;">

<div id="titleStoryLine" class="article" style="border-top-left-radius: 12px; border-top-right-radius: 12px; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px; border: 1px solid rgb(232, 232, 232); margin-bottom: 7px; padding: 10px 12px; width: auto; background-color: rgb(255, 255, 255);">
                    
<div class="inline canwrap" itemprop="description" style="display: inline;">
<p style="margin: 0.5em 0px 0.75em; line-height: 18.200000762939453px; padding: 0px;">
                  
<?php
if(mysqli_num_rows($query)>0)
{
	while($row=mysqli_fetch_assoc($query))
	{
?>
<h2 style="color: rgb(165, 133, 0); font-size: 17.5px; margin: 0px 0px 0.5em; padding: 0px;">

<?php echo "Movie: ".$row["Movie"]; ?>
</h2><font color="black">
<?php
	echo " Date:".$row["Date"]."<br><br> Rating:".$row["Rating"]." / 5<br><br> Review: ".$row["Review"]."<br><br>";
	}
}
else
echo "no values";
  
mysqli_close($conn);

?>
