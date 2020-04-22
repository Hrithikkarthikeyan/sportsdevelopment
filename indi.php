<html>
<head><title>tournaments</title></head>
<body bgcolor="lightblue">

<?php
$mysqlport=getenv('S2G_MYSQL_PORT');
echo $mysqlport;
$dbhost="localhost:".$mysqlport;
$dbuser='id9125715_root';
$dbpass='hrithik';
$connect=mysqli_connect("localhost",$dbuser,$dbpass); 

mysqli_select_db($connect,'id9125715_sports');

$query_select="select * from info";
$result=mysqli_query($connect,$query_select);
?>
<font color="purple" size="5"><b><p align="center">TOURNAMENT DETAILS</p></b></font>


<table border="5" align="center">
<tr>
	<th>tournament</th>
	<th>venue</th>
	<th>date</th>
	<th>time</th>
	<th>awards</th>
	<th>levels</th>
	<th>fee</th>
	<th>contact</th>
	<th>session</th>
</tr>

<?php
$i=1;
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
?>

<tr>
        <td><?php echo $i; $i++; ?></td>
	<td><?php echo $row['tor'];?></td>
	<td><?php echo $row['venue'];?></td>
	<td><?php echo $row['date'];?></td>
	<td><?php echo $row['awards'];?></td>
	<td><?php echo $row['levels'];?></td>
	<td><?php echo $row['fee'];?></td>
	<td><?php echo $row['contact'];?></td>
	<td><?php echo $row['session'];?></td>
</tr>
<?php }
mysqli_close($connect); ?>
</table>
<form name="display1" action="qwerty.php">
<input type="submit" name="submit" value="go back">
</form>

</body>
</html>

