<html>
<body background="showtime.png">

<img src="showtimeheader.jpg" alt="showtime" style="width:1400px;height:150px;">
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
    background-color: #7A005C;
    text-align: center;
    padding: 6px;
    text-decoration: none;
    text-transform: uppercase;
}

a:hover, a:active {
    background-color: #D7B2CE;
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
<div align="center">
<br>
<br>
<table id="t01">
    <tr>
    <td>MOVIE NAME</td>
    <td>SHOW TIME</td>
    <td>GENRE</td>
    </tr>
<?php
include('config.php');
$query1=mysql_query("select movie_id, movie_name, showtime, description from movie");
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['movie_name']."</td>";
echo "<td>".$query2['showtime']."</td>";
echo "<td>".$query2['description']."</td>";
}
?>
</ol>
</table>
</div>

</body>
</html>