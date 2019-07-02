<html>
<body>
<?php
include('config.php');
if(isset($_GET['member_id']))
{
$member_id=$_GET['member_id'];
$query1=mysql_query("delete from member where member_id='$member_id'");
if($query1)
{
header('location:memberlist.php');
}
}
?>
</body>
</html>