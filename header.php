<html>
<head>
<title>MovieTime</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<style>

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 100;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
    background-color:black;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
</head>
<body>

<div id="shell">
  <div id="header">
    <img src="css/logo.png" height="100px">
        <div id="navigation">
      <ul>
        <li><a class="active" href="index.php">HOME</a></li>
        <li><a href="searchmovie.php">MOVIES</a></li>
        <li><a href="theatre.php">IN THEATERS</a></li>
       <?php session_start();
       if(isset($_SESSION["sess_user"])){ ?> 
        <li><div class="dropdown">
  	<a>MY ACCOUNT</a>
  <div class="dropdown-content">
    <a>Hello <?php echo $_SESSION['sess_user'];?></a>
    <a href="editacc.php">Edit Account Details</a>
    <a href="changepass.php">Change Password</a>
    
    <a href="mylist.php">My List</a>
    <a href="myreviews.php">My Reviews</a>
    <a href="logout.php">Logout</a>
  </div>
</div></li>
        <?php }else{ ?>
        <li><a href="login.php">LOGIN</a></li>
        <?php }?>
        <li><a href="aboutus.php">ABOUT US</a></li>
      </ul>
    </div>
    <div id="sub-navigation">
      <ul>
        <li><a href="movies.php">SHOW ALL</a></li>
        <li><a href="trailer.php">LATEST TRAILERS</a></li>
        <li><a href="toprated.php">TOP RATED</a></li>
      </ul>
      
      Partnered with BookMyShow
  </div>
</body>
</html>
