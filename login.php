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
	<h2 class="sub-head">Log In</h2>
		<div class="sub-main">	
<FORM method="POST" action="">

	
	<input type = "text" name = "Email" placeholder="Email Id"><br>
	
	<input type = "password" name = "password" placeholder="Password"><br>
	
	
	
	
	          <input type="submit" name="submit" value="submit">
	          
	          <a href="register.php" color="yellow" ><font color="yellow">new here?</font></a>	 		
</FORM>
</div>
		<div class="clear"></div>
</div>
</font>
 <?php  
    if(isset($_POST["submit"])){  
    if(!empty($_POST['Email']) && !empty($_POST['password'])) {  
        $user=$_POST["Email"];  
        $pass=$_POST["password"];
        $pass=md5($pass); 
        $pass=substr($pass,0,15); 
      
        include 'dbconn.php';
        $sql="SELECT * FROM login WHERE Email_ID='".$user."' AND Password='".$pass."' ";
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
      
        if($user == $dbusername && $pass == $dbpassword)  
        {  
        session_start();  
        $_SESSION['sess_user']=$name;
        $_SESSION['email']=$user;  
      
          
        header("Location: index.php");  
        }  
        } else {  
        echo "Invalid username or password!";  
        }  
      
    } else {  
        echo "All fields are required!";  
    }  
    }  
    ?>  
</body>
</html>

