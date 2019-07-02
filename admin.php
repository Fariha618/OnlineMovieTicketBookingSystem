<?php

include("config.php");


if(count($_POST) > 0)
{
	$admin_name = $_POST['admin_name'];
	$admin_pass = $_POST['admin_pass'];
	
	
	if($admin_name == '')
	{
		die(header("Location: admin.php?error=username"));
	}
	
	if($admin_pass == '')
	{
		die(header("Location: admin.php?error=password"));
	}
	
	//check email and password from users table
	$result= mysql_query("SELECT * FROM admin WHERE admin_name = '$admin_name' AND admin_pass = '".MD5($admin_pass)."'") ;
	$row = mysql_fetch_array($result);
	
	if($row['status'] == 'active')
	{
		
		$_SESSION['admin_name'] = $row['admin_name'];
		$_SESSION['admin_pass']  = $row['admin_pass'];
		
		header("Location: adminpage.php");
	}
	else
	{
		//failed
		header("Location: adminfail.php?msg=1");
	}
}
?>

<html>

<head>
<title>Admin Login</title>
</head>

<body background="admin.jpg">
<img src="admin-Header-Background design.jpg" alt="admin" style="width:1400px;height:228px;">
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    float: left;
}

a:link, a:visited {
    display: block;
    width: 154.55px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: #FF0066;
    text-align: center;
    padding: 6px;
    text-decoration: none;
    text-transform: uppercase;
}

a:hover, a:active {
    background-color: #FF80B2;
}
</style>
<style>
table, th, td {
    border: 4px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: center;
}
table#t01 {
    width: 80%;    
    background-color: #E4BAE4;
}
</style>

<ul>
  <li><a href="Homepage.php">HOME</a></li>
  <li><a href="Showtime.php">SHOWTIME</a></li>
  <li><a href="BookTickets.php">BOOK TICKETS</a></li>
  <li><a href="member.php">MEMBERS</a></li>
  <li><a href="Offers.php">OFFERS</a></li>
  <li><a href="About.php">ABOUT US</a></li>
  <li><a href="Contact.php">CONTACT</a></li>
  <li><a href="admin.php">ADMIN</a></li>
</ul>
<br> <br> <br>
<div align='center'>
<form name="login" method="post" action="adminpage.php">
				
Username: <input type= "text" name= "admin_name"> <br><br>
Password: <input type= "password" name= "admin_pass"> <br/><br>
<input type= "Submit" value= "Log In">

</form>	
</div>
<div align='center'>
<form name="create" method="post" action="adminadd.php">
				
<input type= "Submit" value= "Create a new account">

</form>	
</div>
	
</body>
</html>