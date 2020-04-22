<HTML>
<HEAD>
<TITLE>Delete
</TITLE>
</HEAD>
<?php
$C=$_POST["firstname"];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='id9125715_root';
$dbpass='hrithik';
$conn=mysqli_connect("localhost",$dbuser,$dbpass);
mysqli_select_db($conn,'id9125715_sports');
$delete="delete from donordetails where firstname='$C'";

if(mysqli_query($conn,$delete))

echo" record deleted successfully";

else

echo "not deleted";

mysqli_close($conn);
?>
<form name="del" method="POST" action="home.php">
<input type="submit" value="home" name="value">
</form>
</html>
