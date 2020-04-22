<?php
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='id9125715_root';
$dbpass='hrithik';
$connect=mysqli_connect("localhost",$dbuser,$dbpass); 

mysqli_select_db($connect,'id9125715_sports');

$query_select="select name from bmijan ";
$result=mysqli_query($connect,$query_select);
?>
<html>
UPDATING AGE
<form name="update" method="POST" action="janup2.php">
<select name="name">
<?php
while($row=mysqli_fetch_array($result))
{?>
	<option><?php echo $row['name'];?></option>
<?php
}
?>
enter age to update:<form><input type="text" name="ag">
<input type="submit" name="submit"></form>

</html>







