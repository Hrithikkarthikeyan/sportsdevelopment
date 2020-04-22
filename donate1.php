<html>
<head><title>DONATION</title>
</head>
<body>
<?php
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='id9125715_root';
$dbpass='hrithik';
$connect=mysqli_connect("localhost",$dbuser,$dbpass); 

mysqli_select_db($connect,"id9125715_sports");

$query_select="select * from net";
$result=mysqli_query($connect,$query_select);
?>
 SELECT YOUR  NAME
<form name="delete" method="POST" action="donate2.php">
<select name="name">
<?php
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{ 
?>
	<option><?php echo $row['name'];?> </option>"
<?php
}
?>
</select>
<input type="submit"  name="delete" value="SUBMIT">
</form>
</body>
</html>
