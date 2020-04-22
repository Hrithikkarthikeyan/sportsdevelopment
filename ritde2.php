<html>
<head><title>DELETE</title>
</head>
<body>

<?php

$DEL=$_POST["name"];


$connect=mysqli_connect("localhost","id9125715_root","hrithik","id9125715_sports");




$query_select="select * from game where sport='$DEL'";

$result=mysqli_query($connect,$query_select);
?>

<table border="5">

<th>sport</th>
	<th>age</th>
	<th>achievements</th>
	<th>income</th>
	<th>gender</th>
	


</tr>

<?php

$row=mysqli_fetch_array($result,MYSQLI_ASSOC) 

?>
<tr>
	    
	<td><?php echo $row['sport'];?></td>
	<td><?php echo $row['age'];?></td>
	<td><?php echo $row['achievements'];?></td>
	<td><?php echo $row['income'];?></td>
	<td><?php echo $row['gender'];?></td>
        	

</tr>
</table>
<form name="ritde2" method="POST" action="ritde3.php">

<input type="text" name="name" value="<?php echo $DEL;?>" hidden>

<br><br><br><br><input type="submit" name="confirm" value="CONFIRM">
</form>

<form name="del2_home" action="index.html">
<br><br><br><br>
<input type="submit" name="cancel" value="CANCEL">
</form>
</body>
</html>
