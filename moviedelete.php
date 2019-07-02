<html>
<body>
<?php
include('config.php');
if(isset($_GET['movie_id']))
{
$movie_id=$_GET['movie_id'];
$query1=mysql_query("delete from movie where movie_id='$movie_id'");
if($query1)
{
header('location:movielist.php');
}
}
?>
</body>
</html>