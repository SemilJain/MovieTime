<html>
<head>
	<title>Change Password</title>

<font color="white">
<script>
type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } 

function validateForm() {

if(myForm.password.value != "" && myForm.password.value == myForm.confirmp.value) 
{ 
if(myForm.password.value.length < 6 ) 
{ 
alert("Error: Password must contain at least six characters!");
 myForm.password.focus();
  return false;
   } 
   
        re = /[0-9]/;
         if(!re.test(myForm.password.value) ) 
         { alert("Error: password must contain at least one number (0-9)!");
          myForm.password.focus();
           return false;
            } 
            re = /[a-z]/;
             if(!re.test(myForm.password.value) ) 
             { 
             alert("Error: password must contain at least one lowercase letter (a-z)!"); 
             myForm.password.focus();
              return false;
               } 
               re = /[A-Z]/;
                if(!re.test(myForm.password.value) ) 
                { 
                alert("Error: password must contain at least one uppercase letter (A-Z)!");
                myForm.password.focus();
                  return false;
                   } 
                   }
                    else 
                    { 
                    alert("Error: Please check that you've entered and confirmed your password!"); 
                   myForm.password.focus();
                     return false;
                      }
                      
}

</script>

<link href="css/style1.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
</head>

<body background="bg.gif">
<div class="header-w3l">
		
	</div>
<div class="main-agileits">
	<h2 class="sub-head">Change Password</h2>
		<div class="sub-main">	
<FORM name="myForm" onsubmit="return validateForm()" method="POST" >

	 <input type = "password" name = "currpassword" placeholder="CurrentPassword"><br><br>
	
	 <input type = "password" name = "password" placeholder="NewPassword"><br><br>
	
	  <input type = "password" name = "confirmp" placeholder="Confirm"><br><br>
	

		  <br></br>
	          <input type="submit" name="submit" value="submit" > 		
	
	
	
	
</FORM>
<?php
 if(isset($_POST["submit"]))
 {
 session_start();
$user=$_SESSION['email'];
$pass=$_POST["password"];
$pass=md5($pass);
$pass=substr($pass,0,15);
$cpass=$_POST["currpassword"];
$cpass=md5($cpass);
$cpass=substr($cpass,0,15);
include 'dbconn.php';
$sql="SELECT * FROM login WHERE Email_ID='".$user."'";
        $query=mysqli_query($conn,$sql);  
        $numrows=mysqli_num_rows($query); 
        if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($query))  
        {  
        $dbusername=$row["Email_ID"];  
        $dbpassword=$row["Password"];
        $name=$row["Name"];  
        }  
        
      
        if($cpass == $dbpassword)  
        {  
$sql1="UPDATE login set Password='$pass' where Email_ID='$user'";
if(mysqli_query($conn,$sql1))
{
$mess1="Password Changed Succesfully! Login Again to see changes";
echo "<br><script type='text/javascript'>alert('$mess1');</script>";
?> <a href="logout.php"><font color="yellow"><h1>Logout</h1></font></a><?php  
}
else
echo "error".$conn->error;
}  	
mysqli_close($conn);
}
}
?>
</h1>
</div>
		<div class="clear"></div>
</div>
</font>
</body>
</html>

