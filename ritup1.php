
<HTML>
<HEAD>
<TITLE>Delete
</TITLE>
</HEAD>
<?php
$name = $_POST["name"];
$n=$_POST["n"];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='id9125715_root';
$dbpass='hrithik';
$conn=mysqli_connect("localhost",$dbuser,$dbpass);

mysqli_select_db($conn,'id9125715_sports');
$delete="update game set sport = '$n' where sport='$name'";

if(mysqli_query($conn,$delete))

echo " record updated successfully";

else

echo "not updated";

mysqli_close($conn);
?>
<form name="del" method="POST" action="Home.php">
<input type="submit" value="home" name="value">
</form>
</html>
