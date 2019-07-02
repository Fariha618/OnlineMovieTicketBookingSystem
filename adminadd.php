<html>
<body background="admin.jpg">
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
    width: 156.76px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: #4D94FF;
    text-align: center;
    padding: 6px;
    text-decoration: none;
    text-transform: uppercase;
}

a:hover, a:active {
    background-color: #2E5999;
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
<?php
include('config.php');
if(isset($_POST['submit']))
{
$admin_name=mysql_real_escape_string($_POST['admin_name']);
$admin_pass=mysql_real_escape_string($_POST['admin_pass']);


$query1=mysql_query("insert into admin values('','admin_name','$admin_pass')");

if($query1)
{
header('location:admin_success.php');
}
}
?>
<br> <br> <br> <br> <br> <br>
<div align='center'>
<fieldset style="width:100px;">
<form method="post" action="">
Enter admin name: <br> <input type="text" name="admin_name"><br>
Create a password: <br> <input type="password" name="admin_pass"><br>

<br>
<input type="submit" name="submit" value="Sign Up">
</form>
</fieldset>
</div>

</body>
</html>