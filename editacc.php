<html>
<head>
	<title>Edit Account</title>

<font color="white">
<script>
type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } 

function validateForm() {
    var x = document.forms["myForm"]["name"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
        
    }
    var letters= /^[A-Za-z]+$/;
    var x = document.forms["myForm"]["name"].value;
    
    if(!x.match(letters)){
    
        alert("Letters Only!!");
        return false;
    }
    
      var x = document.forms["myForm"]["Email"].value;
    if (x == null || x == "") {
        alert("Email must be filled out");
        return false;
        
    }
    var x = document.forms["myForm"]["Email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
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
	<h2 class="sub-head">Edit Account Details</h2>
		<div class="sub-main">	
<FORM name="myForm" onsubmit="return validateForm()" method="POST" >


	<input type = "text" name = "name" placeholder="Update UserName"><br><br>
		
	  <input type = "text" name = "Email" id="Email" placeholder="Update EmailID"><br><br>
	
	Update DOB:      <select name="date" id="date" value="select">
		  <option value="1">1</option>
		  <option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
		  </select>
		  <select name="month">
		  <option value="jan">jan</option>
		   <option value="feb">feb</option>
		    <option value="mar">mar</option>
		     <option value="apr">apr</option>
		      <option value="may">may</option>
		       <option value="jun">jun</option>
		        <option value="jul">jul</option>
		         <option value="aug">aug</option>
		          <option value="sept">sept</option>
		           <option value="oct">oct</option>
		            <option value="nov">nov</option>
		             <option value="dec">dec</option>
		    </select>
		  <select name="year">
		  	<option value="2007">2017</option>
		  	<option value="2006">2016</option>
	<option value="2005">2015</option>
	<option value="2004">2014</option>
	<option value="2003">2013</option>
	<option value="2002">2012</option>
	<option value="2001">2011</option>
	<option value="2000">2010</option>
	<option value="1999">2009</option>
	<option value="1998">2008</option>
	<option value="1997">2007</option>
	<option value="1996">2006</option>
	
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	</select>
		  <br></br>
	          <input type="submit" name="submit" value="submit" >
	          	
	
	
	
	
</FORM>
<h1>
<?php
 if(isset($_POST["submit"]))
 {
session_start();
$user=$_SESSION['email'];
$name=$_POST["name"];
$email=$_POST["Email"];
$date=$_POST["date"];
$month=$_POST["month"];
$year=$_POST["year"];
include 'dbconn.php';
$sql="UPDATE login set Name='$name',Email_ID='$email',Date='$date',Month='$month',Year='$year' where Email_ID='$user'";
if(mysqli_query($conn,$sql))
{
	$sql1="UPDATE Review set Email='$email' where Email='$user'";
	if(mysqli_query($conn,$sql1))
{
	$sql2="UPDATE Mylist set Email='$email' where Email='$user'";
	if(mysqli_query($conn,$sql2))
{
	
$mess1="Account updated Succesfully! Login Again to see changes";
echo "<br><script type='text/javascript'>alert('$mess1');</script>";
?> <a href="logout.php"><font color="yellow"><h1>Logout</h1></font></a><?php  
}}}
else
echo "error".$conn->error;   	
mysqli_close($conn);
}
?>
</h1>
</div>
		<div class="clear"></div>
</div>
</font>
</body>
</html>

