<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Successfull</title>
</head>
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

<div align='center'>
<h1> Movie has been successfully booked! </h1>

<form action="memberpage.php">
<input type= "submit" value="Back!">
</form>
</div>
</body>
</html>
