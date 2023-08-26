<?php
include 'dbconn.php';
session_start();
$mov=$_SESSION['mov'];
$sql=" select avg(Rating) as avg from Review where Movie='$mov'";
$query=mysqli_query($conn,$sql);  
        
        $numrows=mysqli_num_rows($query); 
        if($numrows!=0)  
        {  
        
        while($row=mysqli_fetch_assoc($query))  
        {  	
        	$arat=$row['avg'];
        	 echo $arat*2; 
        }
        
        }
        else
        {
        $arat=0;
        echo $arat;
        }  
	mysqli_close($conn); 	
?>
