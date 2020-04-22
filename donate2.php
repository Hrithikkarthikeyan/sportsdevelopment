<html>
<head><title>DONATION</title></head>
<body bgcolor="skyblue">

<?php
$mysqlport=getenv('S2G_MYSQL_PORT');
echo $mysqlport;
$dbhost="localhost:".$mysqlport;
$dbuser='id9125715_root';
$dbpass='hrithik';
$connect=mysqli_connect("localhost",$dbuser,$dbpass); 
$name=$_POST['name'];

mysqli_select_db($connect,'id9125715_sports');

$query_select="select * from net where name= '$name'";
$result=mysqli_query($connect,$query_select);
?>
<font color="purple" size="5"><b><p align="center">DONATION</p></b></font>

<table border="5" align="center">
<tr>
	<th>S.NO</th>
	<th>NAME</th>
	<th>ACCOUNT NO:</th>
	<th>BANK</th>
	<th>BALANCE</th>
	<th>ACCOUNT TYPE</th>
	
</tr>

<?php
$i=1;
$row=mysqli_fetch_array($result);


echo "<tr>";
      echo "<td>";  echo $i; $i++; echo "</td>";
	echo "<td>";echo $row['name']; echo "</td>";
	echo "<td>"; echo $row['accno']; echo "</td>";
	echo "<td>"; echo $row['bank']; echo "</td>";
	echo "<td>"; echo $row['bal']; echo "</td>";
	echo "<td>"; echo $row['type']; echo "</td>";
	
	echo "</tr>";
	
?>
<form name="don" action="donate3.php" method="POST">
NAME:<input type="text" name="name" value="<?php echo"$name"; ?>">
	<br>ENTER THE AMOUNT TO DO NATE:<input type="text" name="amt" placeholder="enter the amount"><br>
	<input type="submit" name="sub_bt" value="submit">
</form>



</table>
</body>
</html>

