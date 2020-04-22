<?php
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='id9125715_root';
$dbpass='hrithik';
$connect=mysqli_connect("localhost",$dbuser,$dbpass); 

mysqli_select_db($connect,'id9125715_sports');

$query_select="select sport from game ";
$result=mysqli_query($connect,$query_select);
?>
<html>
UPDATING NAME
<form name="update" method="POST" action="ritup1.php">
<select name="name">
<?php
while($row=mysqli_fetch_array($result))
{?>
	<option><?php echo $row['sport'];?></option>
<?php
}
?>
enter name to update:<form><input type="text" name="n">
<input type="submit" name="submit"></form>

</html>







