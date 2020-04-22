<HTML>
<HEAD>
<TITLE>Delete
</TITLE>
</HEAD>

<?php

$C=$_POST["ro"];

$conn=mysqli_connect("localhost","id9125715_root","hrithik","id9125715_sports");



$delete="delete from bmijan where name='$C'";


if(mysqli_query($conn,$delete))


echo" record deleted successfully";


else 

echo "not deleted";


?>

<form name="del" method="POST" action="qwerty.php">

<input type="submit" value="Go to home" name="value">
</form>
</html>
