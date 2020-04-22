<HTML>
<HEAD>
<TITLE>donate
</TITLE>
</HEAD>
<?php
$amt=$_POST["amt"];
$name=$_POST["name"];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='id9125715_root';
$dbpass='hrithik';


$con=mysqli_connect("localhost",$dbuser,$dbpass);
mysqli_select_db($con,'id9125715_sports');
$query_select="select * from net where name='$name'";
$result=mysqli_query($con,$query_select);
$rowh=mysqli_fetch_array($result);
$act=$rowh['bal'];

if($act>$amt)
{
$newbal=$act-$amt;
$delete="update net set bal = '$newbal' where name= '$name'";
if(mysqli_query($con,$delete))

echo " $amt debited successfully";

else
echo "not updated";
}

else
{
	echo "you doesn't have sufficient balance";
}


$conn=mysqli_connect("localhost",$dbuser,$dbpass);
mysqli_select_db($conn,'id9125715_sports');
$query_select="select * from sbibank";
$result=mysqli_query($conn,$query_select);
$row=mysqli_fetch_array($result);

$act=$row['balance'];
$tol=$act+$amt;
echo"<br>";

$delete="update sbibank set balance = '$tol' ";

if(mysqli_query($conn,$delete))

echo "the money has been credited into the sports development association account";

else

echo "not updated";

mysqli_close($conn);
?>
<center><a href="index.html"><button style="padding:10px 30px;">click to go back</button></a></center>

</html>
