<html>
<body background="member.jpg">
<div align='left'>
<form action="adminpage.php">
<input type="submit" value="Back">
</form>
</div>
<div align='center'>
<h1> Registration Form </h1>
</div>
<br>

<?php
include('config.php');
if(isset($_POST['submit']))
{
$member_1stname=mysql_real_escape_string($_POST['member_1stname']);
$member_lstname=mysql_real_escape_string($_POST['member_lstname']);
$username=mysql_real_escape_string($_POST['username']);
$member_pass=mysql_real_escape_string($_POST['member_pass']);
$email=mysql_real_escape_string($_POST['email']);
$month=mysql_real_escape_string($_POST['month']);
$day=mysql_real_escape_string($_POST['day']);
$year=mysql_real_escape_string($_POST['year']);
$gender=mysql_real_escape_string($_POST['gender']);
$phone=mysql_real_escape_string($_POST['phone']);
$address=mysql_real_escape_string($_POST['address']);
$city=mysql_real_escape_string($_POST['city']);
$post_code=mysql_real_escape_string($_POST['post_code']);
$country=mysql_real_escape_string($_POST['country']);

$query1=mysql_query("insert into member values('','$member_1stname','$member_lstname', '$username', '$member_pass','$email','$month','$day', '$year', '$gender', '$phone','$address','$city','$post_code','$country')");

if($query1)
{
header("location:memberlist.php");
}
}
?>
<div align='center'>
<fieldset style="width:800px;">
<form method="post" action="">
First Name: <br> <input type="text" name="member_1stname"><br>
Last Name: <br> <input type="text" name="member_lstname"><br>
Enter your username: <br> <input type="text" name="username"><br>
Create a password: <br> <input type="password" name="member_pass"><br>
Enter your email address: <br> <input type="text" name="email"><br>
Birthday: <br> 
<select name="month">
  <option value="January">January</option>
  <option value="February">February</option>
  <option value="March">March</option>
  <option value="April">April</option>
  <option value="May">May</option>
  <option value="June">June</option>
  <option value="July">July</option>
  <option value="August">August</option>
  <option value="September">September</option>
  <option value="October">October</option>
  <option value="November">November</option>
  <option value="December">December</option> 
  </select>   Day: <input type="text" name="day"> Year: <br> <input type="text" name="year"><br>
Gender: <br> <input type="radio" name="gender" value="male">Male<br>
<input type="radio" name="gender" value="female">Female<br><br>
Phone No.:<br> <input type="text" name="phone"> <br>
Address: <br> <input type="text" name="address"><br>
City:   <br> <input type="text" name="city"> <br>
Postal Code: <br> <input type="text" name="post_code"><br>
Country: <br> <select name="country">
  <option value="Bangladesh">Bangladesh</option> </select><br>
<br>
<input type="submit" name="submit" value="Sign Up">
</form>
</fieldset>

</body>
</html>