<html>
<head>
<title>Delete
</title>
</head>

<?php

$C=$_POST["name"];

$conn=mysqli_connect("localhost","id9125715_root","hrithik","id9125715_sports");



$delete="delete from game where sport='$C'";


if(mysqli_query($conn,$delete))


echo" record deleted successfully";


else 

echo "not deleted";


?>

<form name="del" method="POST" action="index.html">

<input type="submit" value="submit" name="value">
</form>
</html>
