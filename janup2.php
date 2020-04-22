
<HTML>
<HEAD>
<TITLE>Delete
</TITLE>
</HEAD>
<?php
$name = $_POST["name"];
$n=$_POST["ag"];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='id9125715_root';
$dbpass='hrithik';
$conn=mysqli_connect("localhost",$dbuser,$dbpass);

mysqli_select_db($conn,'id9125715_sports');
$delete="update bmijan set age = '$n' where name='$name'";

if(mysqli_query($conn,$delete))

echo " record updated successfully";

else

echo "not updated";

mysqli_close($conn);
?>
<form name="del" method="POST" action="qwerty.php">
<input type="submit" value="go back" name="value">
</form>
</html>
