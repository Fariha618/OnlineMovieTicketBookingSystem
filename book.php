<html>
<body background="bookticket.jpg">
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
$no_seats=mysql_real_escape_string($_POST['no_seats']);



$query1=mysql_query("insert into pay values('','no_seats')");

if($query1)
{
header('location:book_success.php');
}
}
?>
<br> <br> <br> <br> <br> <br>
<div align='center'>
<fieldset style="width:100px;">
<form method="post" action="">
Enter Number of Seats: <br> <input type="text" name="no_seats"><br>


<br>
</form>
<form action="book_success.php">
<input type="submit" name="submit" value="Book">
</form>
</fieldset>
</div>

</body>
</html>