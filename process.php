<?php
 
$name=$_POST["name"];
$email=$_POST["Email"];
$pass=$_POST["password"];
$gender=$_POST['Gender'];
$date=$_POST["date"];
$month=$_POST["month"];
$year=$_POST["year"];
include 'dbconn.php';

$sql="SELECT * FROM login WHERE Email_ID='".$email."'";
$query=mysqli_query($conn,$sql);  
$numrows=mysqli_num_rows($query); 
if($numrows==0)
{
	
$sql2="INSERT INTO login VALUES('$name','$email','$pass','$gender','$date','$month','$year')";
if($conn->query($sql2) === TRUE)
{
	echo "<br>Registered Succesfully.<br> ";
}
else
{
	echo "Error Inserting Values: " . $conn->error;
	
}

}
else
{
$mess="Email already Registered!";
echo "<br><script type='text/javascript'>alert('$mess');</script>";
}
mysqli_close($conn);

?>
