<html>
<head><title>DELETE</title>
</head>

<body>



<?php
$connect=mysqli_connect("localhost","id9125715_root","hrithik","id9125715_sports"); 


$query_select="select name from bmijan";

$result=mysqli_query($connect,$query_select);

?>

DELETING THE RECORDS BY name 

<form name="delete" method="POST" action="d2.php">

<select name="name">

<?php

while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))

{?>
	<option><?php echo $row['name'];?></option>
<?php
}
?>

</select>
<input type="submit"  name="delete" value="DELETE">

</form>
</body>
</html>
