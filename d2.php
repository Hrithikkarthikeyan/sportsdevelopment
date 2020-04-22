<html>
<head><title>DELETE</title>
</head>
<body>

<?php

$DEL=$_POST["name"];


$connect=mysqli_connect("localhost","id9125715_root","hrithik","id9125715_sports");




$query_select="select * from bmijan where name='$DEL'";

$result=mysqli_query($connect,$query_select);
?>

<table border="5">

<tr><th>NAME</th>
	
<th>AGE</th>
	
<th>GENDER</th>

<th>HEIGHT</th>
	
<th>WEIGHT</th>
	
<th>BLOOD GRP</th>
	
<th>HOBBIES</th>
<th>SPORTS</th>
	
<th>ID MARK</th>

<th>VISION</th>
	
<th>HEARING</th>
	
<th>TEXT</th>
	
<th>DISEASE</th>



</tr>

<?php

$row=mysqli_fetch_array($result,MYSQLI_ASSOC) 

?>
<tr>
	    
	<td><?php echo $row['name'];?></td>
<td><?php echo $row['age'];?></td>
	
<td><?php echo $row['gender'];?></td>
	
<td><?php echo $row['ht'];?></td>
	
<td><?php echo $row['wt'];?></td>
	
<td><?php echo $row['bg'];?></td>
        
<td><?php echo $row['hob'];?></td>

<td><?php echo $row['sprt'];?></td>
	
<td><?php echo $row['mark'];?></td>
	
<td><?php echo $row['vis'];?></td>
	
<td><?php echo $row['fre'];?></td>
	
<td><?php echo $row['txt'];?></td>
	
<td><?php echo $row['dis'];?></td>
        	

</tr>
</table>
<form name="del2" method="POST" action="d3.php">

<input type="text" name="ro" value="<?php echo $DEL;?>" hidden>

<br><br><br><br><input type="submit" name="confirm" value="CONFIRM">
</form>

<form name="del2_home" action="qwerty.php">
<br><br><br><br>
<input type="submit" name="cancel" value="CANCEL">
</form>
</body>
</html>
