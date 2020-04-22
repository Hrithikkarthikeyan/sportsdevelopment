<html>
<head>
<title>Delete</title>
</head>
<?php
$C=$_POST["firstname"];
$name = $_POST["lastname"];
$dbuser='id9125715_root';
$dbpass='hrithik';
$conn=mysqli_connect("localhost",$dbuser,$dbpass);

mysqli_select_db($conn,'id9125715_sports');
$delete="update donordetails set lastname = '$name' where firstname='$C'";

if(mysqli_query($conn,$delete))

echo" record updated successfully";

else

echo "not updated";

mysqli_close($conn);
?>
<form name="del" method="POST" action="home.php">
<input type="submit" value="home" name="value">
</form>
</html>
