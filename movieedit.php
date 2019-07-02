<html>
<body background="admin.jpg">
<?php
include('config.php');
if(isset($_GET['movie_id']))
{
$movie_id=$_GET['movie_id'];
if(isset($_POST['submit']))
{
$movie_name=$_POST['movie_name'];
$showtime=$_POST['showtime'];
$description=$_POST['description'];
$query3=mysql_query("update movie set movie_name='$movie_name', showtime='$showtime', description='$description' where movie_id='$movie_id'");
if($query3)
{
header('location:movielist.php');
}
}
$query1=mysql_query("select * from movie where movie_id='$movie_id'");
$query2=mysql_fetch_array($query1);
?>
<div align='center'>
<form method="post" action="">
Movie Name:<input type="text" name="movie_name" value="<?php echo $query2['movie_name']; ?>" style="width:200px; height:25px" /><br /><br>
Showtime:<input type="text" name="showtime" value="<?php echo $query2['showtime']; ?>" style="width:200px; height:25px" /><br /><br /><br>
Genre:<input type="text" name="description" value="<?php echo $query2['description']; ?>" style="width:250px; height:150px"/><br /><br /><br>
<br />
<input type="submit" name="submit" value="Update" >
</form>
</div>
<?php
}
?>
</body>
</html>