<html>
<head><title>DELETE</title>
</head>
<body>

<?php

$DEL=$_POST["name"];


$connect=mysqli_connect("localhost","id9125715_root","hrithik","id9125715_sports");




$query_select="select * from net where name='$DEL'";

$result=mysqli_query($connect,$query_select);
?>

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
</table>
<form name="del2" method="POST" action="dk3.php">

<input type="text" name="ro" value="<?php echo $DEL;?>" hidden>

<br><br><br><br><input type="submit" name="confirm" value="CONFIRM">
</form>

<form name="del2_home" action="qwerty.php">
<br><br><br><br>
<input type="submit" name="cancel" value="CANCEL">
</form>
</body>
</html>
