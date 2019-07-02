<html>
<body background="admin.jpg">
<div align='left'>
<form action="adminpage.php">
<input type="submit" value="Back">
</form>
</div>
<div align='center'>
<h1> MOVIE LIST </h1>
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
    <td>MOVIE NAME</td>
    <td>SHOW TIME</td>
    <td>GENRE</td>
    <td></td><td></td>
    </tr>

<?php
include('config.php');
$query1=mysql_query("select movie_id, movie_name, showtime, description from movie");
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['movie_name']."</td>";
echo "<td>".$query2['showtime']."</td>";
echo "<td>".$query2['description']."</td>";
echo "<td><a href='movieedit.php?movie_id=".$query2['movie_id']."'>Edit</a></td>";
echo "<td><a href='moviedelete.php?movie_id=".$query2['movie_id']."'>Delete</a></td><tr>";
}
?>
</ol>
</table>

<br><br>
<form action="movieadd.php">
<input type="submit" value="ADD More Movies Here!" style="font-family:Arial Black; width:200px;height:50px;color:#990000">
</div>
</body>
</html>