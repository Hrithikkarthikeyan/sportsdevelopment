<html>

<head>
<title>DETAILS</title>
</head>
<body bgcolor="pink">
<?php
$connect=mysqli_connect("localhost","id9125715_root","hrithik","id9125715_sport"); 



$query_select="select * from bmijan";

$result=mysqli_query($connect,$query_select);
?>
<b><marquee><p align="center">PHYSICAL CONDITION</p></b></font>

</marquee>

<table border="5">
<tr>
<th>NAME</th>
	
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
$i=1;

while($row=mysqli_fetch_array($result))

{

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
      
<?php }
mysqli_close($connect); ?>
</table>
</body>
</html>

<form name="display1" action="d1.php">

<input type="submit" name="home" value="BACK">
</form>