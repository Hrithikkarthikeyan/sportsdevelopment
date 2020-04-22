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
UPDATING NAME BY ROLL NUMBER
<form name="donorup1" method="POST" action="donorup2.php">
<select name="firstname">
<?php
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{?>
	<option><?php echo $row['firstname'];?></option>
<?php
}
?>
</select>
<input type="submit"  name="update" value="UPDATE">
</form>
</body>
</html>
