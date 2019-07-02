<html>

<head>
<title>Admin</title>
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
<div align="right">
<form action="admin.php">
<input type= "submit" value="Log Out">
</form>
</div>
<br>
<div align='center'>
<form name="movie" method="post" action="movielist.php">
				
<input type= "Submit" value= "MOVIE">

</form>
 <form name="member" method="post" action="memberlist.php">
				
<input type= "Submit" value= "MEMBER">

</form>	
</div>


</body>
</html>