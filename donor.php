<html>
<head>
	<title>PERSONAL DETAILS</title>
</head>
<body>
<?php
$A=$_POST['firstname'];
$B=$_POST['lastname'];
$C=$_POST['gender'];
$D=$_POST['age'];
$E=$_POST['mail'];
$F=$_POST['income'];
$G=$_POST['address'];
$H=$_POST['city'];
$check_msg = implode(", ", $_POST['check']);
$J=$_POST['address'];
$dbuser='id9125715_root';
$dbpass='hrithik';

$connect=mysqli_connect("localhost",$dbuser,$dbpass); 

mysqli_select_db($connect,'id9125715_sports');


$query_insert="INSERT INTO donordetails(firstname,lastname,gender,age,email,income,address,city,sports,description) VALUES('$A','$B','$C','$D','$E','$F','$G','$H','$check_msg','$J')";

if(($A==NULL)||($B==NULL)||($C==NULL)||($D==NULL)||($E==NULL)||($F==NULL)||($G==NULL)||($H==NULL)||($check_msg==NULL)||($J==NULL))
{
echo("Enter all fields");
}
else
{
if(mysqli_query($connect,$query_insert))
{
echo("Records Inserted");
}
else
{
echo("insertion failed");
}
}
?>
<form name="donor.php" action="home.php" method="POST">
<input type="submit" name="donor" value="HOME">
</body>
</form>
</html>
