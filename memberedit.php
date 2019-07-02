<html>
<body background="admin.jpg">
<div align='left'>
<form action="adminpage.php">
<input type="submit" value="Back">
</form>
</div>
<div align='center'>
<h1> Update Member </h1>
</div>
<br>
<?php
include('config.php');
if(isset($_GET['member_id']))
{
$member_id=$_GET['member_id'];
if(isset($_POST['submit']))
{
$member_1stname=$_POST['member_1stname'];
$member_lstname=$_POST['member_lstname'];
$username=$_POST['username'];
$member_pass=$_POST['member_pass'];
$email=$_POST['email'];
$birth_date=$_POST['birth_date'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$city=$_POST['city'];
$post_code=$_POST['post_code'];
$country=$_POST['country'];
$phone=$_POST['phone'];
$query3=mysql_query("update member set member_1stname='$member_1stname',member_lstname='$member_lstname',username='$username',member_pass='$member_pass',email='$email',month='$month', day='$day', year='$year', gender='$gender', phone='$phone', address='$address', city='$city',post_code='$post_code',country='$country'");
if($query3)
{
header('location:memberlist.php');
}
}
$query1=mysql_query("select * from member where member_id='$member_id'");
$query2=mysql_fetch_array($query1);
?>
<div align='center'>
<form method="post" action="">
First Name: <input type="text" name="member_1stname" value="<?php echo $query2['member_1stname']; ?>"><br/><br/>
Last Name:  <input type="text" name="member_lstname" value="<?php echo $query2['member_lstname']; ?>"><br/><br/>
Enter your username:  <input type="text" name="username" value="<?php echo $query2['username']; ?>"><br/><br/>
Create a password:  <input type="password" name="member_pass" value="<?php echo $query2['member_pass']; ?>"><br/><br/>
Enter your email address:  <input type="text" name="email" value="<?php echo $query2['email']; ?>"><br/><br/>
Birthday:  
<select name="month" value="<?php echo $query2['month']; ?>"><br/><br/>
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
  </select>   Day: <input type="text" name="day" value="<?php echo $query2['day']; ?>" style="width:50px">  Year:<input type="text" name="year" value="<?php echo $query2['year']; ?>"style="width:80px"><br/><br/>
Gender:  <input type="radio" name="gender" value="<?php echo $query2['gender']; ?>">Male
<input type="radio" name="gender" value="<?php echo $query2['gender']; ?>">Female<br><br>
Phone No.: <input type="text" name="phone" value="<?php echo $query2['phone']; ?>"><br/><br/>
Address:  <input type="text" name="address" value="<?php echo $query2['address']; ?>"><br><br>
City:   <input type="text" name="city"> <br><br>
Postal Code:  <input type="text" name="post_code" value="<?php echo $query2['post_code']; ?>"><br/><br/>
Country:  <select name="country" value="<?php echo $query2['country']; ?>"><br/><br/>
  <option value="Bangladesh">Bangladesh</option> </select><br>
<br>
<input type="submit" name="submit" value="Update" >
</form>
</div>
<?php
}
?>
</body>
</html>