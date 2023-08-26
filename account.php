<?php   
    session_start();  
    if(!isset($_SESSION["sess_user"])){  
        header("location:login.php");  
    }
   ?>
<html>
<body>
<head>
<style>
.button {
  display: inline-block;
  border-radius: 50%;
  background-color: rgb(165, 133, 0);
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 50%;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.wrapper {
    text-align: center;
}
</style>
</head>
<?php include 'header.php';
      session_start();
?>

<div id="shell">
<div class="mainContent">
<br><br><br><font size="6" color="rgb(165, 133, 0)">
<div class="wrapper">
<h1>Welcome 
<?php $user=$_SESSION['sess_user'];
echo "$user";
?>
</h1>
</div>

</font>
<br><br><br><br>
<div class="wrapper">
<a href="editacc.php"><button class="button" style="vertical-align:middle"><span>Edit Account Details</span></button></a><br><br><br>
<a href="changepass.php"><button class="button" style="vertical-align:middle"><span>Change Password</span></button></a><br><br><br>
<a href="mylist.php"><button class="button" style="vertical-align:middle"><span>My List </span></button></a><br><br><br>
<a href="myreviews.php"><button class="button" style="vertical-align:middle"><span>My Reviews </span></button></a><br><br><br>
<a href="logout.php"><button class="button" style="vertical-align:middle"><span>Logout </span></button></a><br><br><br>
</div>
</div>
</div>
</body>
</html>
