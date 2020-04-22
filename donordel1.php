<html>
<head><title>DELETE</title>
</head>
<body>
<?php
$dbuser='id9125715_root';
$dbpass='hrithik';
$connect=mysqli_connect("localhost",$dbuser,$dbpass); 

mysqli_select_db($connect,'id9125715_sports');

$query_select="select firstname from donordetails";
$result=mysqli_query($connect,$query_select);
?>
DELETING THE RECORDS BY ROLL NUMBER
<form name="delete" method="POST" action="donordel2.php">
<select name="firstname">
<?php
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{?>
	<option><?php echo $row['firstname'];?></option>
<?php
}
?>
</select>
<input type="submit"  name="delete" value="DELETE">
</form>
</body>
</html>
