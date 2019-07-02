<html>
<body background= "admin.jpg">
<?php
include('config.php');
if(isset($_POST['submit']))
{
$movie_name=mysql_real_escape_string($_POST['movie_name']);
$showtime=mysql_real_escape_string($_POST['showtime']);
$description=mysql_real_escape_string($_POST['description']);
$query1=mysql_query("insert into movie values('','$movie_name','$showtime', '$description')");

if($query1)
{
header("location:movielist.php");
}
}
?>
<div align='center'>
<fieldset style="width:600px;">
<form method="post" action="">
Movie Name: <input type="text" name="movie_name" style="width:200px; height:25px"><br><br>
Showtime:   <input type="text" name="showtime" style="width:200px; height:25px"> <br><br>
Description:<input type="text" name="description" style="width:250px; height:150px"> <br><br>
<br>
<input type="submit" name="submit">
</form>
</fieldset>
</div>
</body>
</html>