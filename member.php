<?php
//for database connect
include("config.php");

//when submit then take following action
if(count($_POST) > 0)
{
	$username    = $_POST['username'];
	$member_pass = $_POST['member_pass'];
	
	//validation check
	if($username == '')
	{
		die(header("Location: member.php?error=username"));
	}
	
	if($member_pass == '')
	{
		die(header("Location: member.php?error=password"));
	}
	
	//check email and password from users table
	$result= mysql_query("SELECT * FROM member WHERE username = '$username' AND member_pass = '".MD5($member_pass)."'") ;
	$row = mysql_fetch_array($result);
	
	if($row['status'] == 'active')
	{
		//success
		$_SESSION['username'] = $row['username'];
		$_SESSION['member_id']  = $row['member_id'];
		
		header("Location: memberpage.php");
	}
	else
	{
		//failed
		header("Location: member.php?msg=1");
	}
}
?>
<html>
<head>
<title>Member Login</title>
</head>
<body background="member.jpg">

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
<form name="login" method="post" action="memberpage.php">
				
Username: <input type= "text" name= "username"> <br><br>
Password: <input type= "password" name= "member_pass"> <br/><br>
<input type= "Submit" value= "Log In">

</form>	
</div>
<div align='center'>
<form name="create" method="post" action="memberadd1.php">
				
<input type= "Submit" value= "Create a new account">

</form>	
</div>

</body>
</html>