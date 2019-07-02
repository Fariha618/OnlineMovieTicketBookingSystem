<html>
<body background="admin.jpg">
<div align='left'>
<form action="adminpage.php">
<input type="submit" value="Back">
</form>
</div>
<div align='center'>
<h1> MEMBER LIST </h1>
</div>
<br> 

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
<div align="center">
<br>
<br>
<table id="t01">
    <tr>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Username</td>
    <td>Password</td>
    <td>Email</td>
    <td>Month</td>
    <td>Day</td>
    <td>Year</td>
    <td>Gender</td>
    <td>Phone No.</td>
    <td>Address</td>
    <td>City</td>
    <td>Postal Code</td>
    <td>Country</td>
    <td></td><td></td>
    </tr>

<?php
include('config.php');
$query1=mysql_query("select member_id, member_1stname, member_lstname, username, member_pass, email, month, day, year, gender, phone, address, city, post_code, country from member");

while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['member_1stname']."</td>";
echo "<td>".$query2['member_lstname']."</td>";
echo "<td>".$query2['username']."</td>";
echo "<td>".$query2['member_pass']."</td>";
echo "<td>".$query2['email']."</td>";
echo "<td>".$query2['month']."</td>";
echo "<td>".$query2['day']."</td>";
echo "<td>".$query2['year']."</td>";
echo "<td>".$query2['gender']."</td>";
echo "<td>".$query2['phone']."</td>";
echo "<td>".$query2['address']."</td>";
echo "<td>".$query2['city']."</td>";
echo "<td>".$query2['post_code']."</td>";
echo "<td>".$query2['country']."</td>";
echo "<td><a href='memberedit.php?member_id=".$query2['member_id']."'>Edit</a></td>";
echo "<td><a href='memberdelete.php?member_id=".$query2['member_id']."'>Delete</a></td><tr>";
}
?>
</ol>
</table>
</body>
</html>