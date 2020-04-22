<?php


$n1=$_POST['tournament'];
$n2=$_POST['venue'];
$n=$_POST['date'];
$n3=$_POST['timing'];
$n4=$_POST['awards'];
$n5=$_POST['levels'];
$n6=$_POST['fee'];
$n7=$_POST['contact'];
$n8=$_POST['time'];

$a= mysqli_connect('localhost','id9125715_root','hrithik','id9125715_sports');
mysqli_select_db($a,"id9125715_sports");
$b="INSERT INTO info(tor,venue,date,time,awards,levels,fee,contact,session) VALUES ('$n1','$n2','$n','$n3','$n4','$n5','$n6','$n7','$n8')";
if($a->query($b) === TRUE)
	echo "new record created successfully";
else
	echo "record not created";
?>



