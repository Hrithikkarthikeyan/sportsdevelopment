<html>
<head><title>DELETE</title>
</head>
<body>
<?php
$DEL=$_POST["firstname"];
$dbuser='id9125715_root';
$dbpass='hrithik';
$connect=mysqli_connect("localhost",$dbuser,$dbpass); 

mysqli_select_db($connect,'id9125715_sports');

$query_select="select * from donordetails where firstname = '$DEL'";
$result=mysqli_query($connect,$query_select);
?>
<font color="purple" size="5"><b><p align="center">DONOR DETAILS</p></b></font>

<form name="display" action="home.php">
<input type="submit" name="display" value="HOME">
</form>

<table border="5" align="center">
<tr>
	<th>S.NO.</th>
	<th>FIRST NAME</th>
	<th>LAST NAME</th>
	<th>GENDER</th>
	<th>AGE</th>
	<th>EMAIL</th>
	<th>INCOME</th>
	<th>ADDRESS</th>
	<th>CITY</th>
	<th>SPORTS</th>
	<th>DESCRIPTION</th>
</tr>

<?php
while($row=mysqli_fetch_array($result))
{
?>

<tr>	
	<td><?php echo $row['firstname'];?></td>
	<td><?php echo $row['lastname'];?></td>
	<td><?php echo $row['gender'];?></td>
	<td><?php echo $row['age'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['income'];?></td>
	<td><?php echo $row['address'];?></td>
	<td><?php echo $row['city'];?></td>
	<td><?php echo $row['sports'];?></td>
	<td><?php echo $row['description'];?></td>
</tr>
<?php 
} 
?>
</table>

<form name="del2" method="POST" action="donorup3.php">
<input type="text" name="firstname" value="<?php echo $DEL;?>" hidden><br>
Enter altered name:<br>
<input type="text" name="lastname" ><br>
<br><br><br><br><input type="submit" name="confirm" value="CONFIRM">
</form>
<form name="del2_home" action="home.php">
<br><br><br><br><input type="submit" name="cancel" value="CANCEL">
</form>
</body>
</html>