<html>
<head><title>DATABASE FOR BANK</title></head>
<body>
	<form name="insert1" action="netlogin.php">
<?php
$A=$_POST['name'];
$acc=$_POST['accno'];
$B=$_POST['fn'];
$C=$_POST['dob'];
$D=$_POST['g'];
$E=$_POST['bank'];
$F=$_POST['pwd'];
$G=$_POST['pwd2'];
$H=$_POST['type'];
$I = implode(", ", $_POST['proof']);
$J=$_POST['ms'];
$K=$_POST['address'];
$L=$_POST['eq'];
$M=$_POST['c'];
$N=$_POST['bal'];


$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='id9125715_root';
$dbpass='hrithik';
$connect=mysqli_connect("localhost",$dbuser,$dbpass); 

mysqli_select_db($connect,'id9125715_sports');


$query_insert="insert into net(name,accno,fn,dob,g,bank,pwd,type,proof,ms,address,eq,c,bal) values('$A','$acc','$B','$C','$D','$E','$F','$H','$I','$J','$K','$L','$M','$N')";

if(($A==NULL)||($acc==NULL)||($B==NULL)||($C==NULL)||($D==NULL)||($E==NULL)||($F==NULL)||($H==NULL)||($I==NULL)||($J==NULL)||($K==NULL)||($L==NULL)||($M==NULL)||($N==NULL))
{
echo("Enter all fields");
}
else
{
if(mysqli_query($connect,$query_insert))
{
echo("Your account has been successfully created");
}
else
{
echo("insertion failed");
}
}
mysqli_close($connect);
?>
 </form>
 <a href="donate1.php"><button style="padding:9px 15px">CLICK HERE TO DONATE</button></a></body><br>
  <a href="dk1.php"><button style="padding:9px 15px">CLICK HERE TO DELETE</button></a></body>

</html>
