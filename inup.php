<?php
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='id9125715_root';
$dbpass='hrithik';
$connect=mysqli_connect("localhost",$dbuser,$dbpass); 

mysqli_select_db($connect,'id9125715_sports');

$query_select="select tor from info ";
$result=mysqli_query($connect,$query_select);
?>
<html>
UPDATING FEE
<form name="update" method="POST" action="inup2.php">
<select name="name">
<?php
while($row=mysqli_fetch_array($result))
{?>
	<option><?php echo $row['tor'];?></option>
<?php
}
?>
<br>
enter fee to update:<form><input type="text" name="ag">
<input type="submit" name="submit"></form>

</html>







