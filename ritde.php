<html>
<head><title>DELETE</title>
</head>
<body>
<?php
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='id9125715_root';
$dbpass='hrithik';
$connect=mysqli_connect("localhost",$dbuser,$dbpass); 

mysqli_select_db($connect,'id9125715_sports');

$query_select="select sport from game";
$result=mysqli_query($connect,$query_select);
?>
DELETING THE RECORDS BY ROLL NUMBER
<form name="delete" method="POST" action="ritde2.php">
<select name="name">
<?php
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{?>
	<option><?php echo $row['sport'];?></option>
<?php
}
?>
</select>
<input type="submit"  name="delete" value="DELETE">
</form>
</body>
</html>
