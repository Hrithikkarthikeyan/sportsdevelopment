<?php

$a=$_POST['fn'];
$b=$_POST['age'];
$c=$_POST['achievements'];
$d=$_POST['ha'];
$e=$_POST['an'];
$f=$_POST['gen'];
$g=$_POST['mail'];
$check_msg=implode(", ", $_POST['check']);


$servername="localhost";
$username="id9125715_root";
$password="hrithik";

$conn=new mysqli($servername,$username,$password);

if($conn->connect_error)
{
	die("connection failed".$conn->connect_error);
}
echo "<br>";
 mysqli_select_db($conn,"id9125715_sports");
 $sql="insert into game(sport,age,achievements,isport,health,income,mail,gender) values('$a','$b','$c','$check_msg','$d','$e','$g','$f')";

 if($conn->query($sql)===TRUE)
 {
 	echo "<br>"; 
 }
 else
 {
 	echo "error".$sql."<br>". $conn->error;
 }
 $conn->close();
 ?>
 
 <html>
<head>
<title>MEMBERSHIP</title>
</head>
<body class="ram">
<style>
.ram
{
  background-image: url("1.jpg");
  background-size: 1500px 700px;
  background-repeat:no-repeat;
}
</style>
<h1><marquee>NOW YOU ARE A MEMBER IN OUR ORGANISATION</marquee></h1>
</br></br>
<h1 align="center">This is for you</h1>
</br>
<ul>
<li><h2>You can use this membership card anywhere</h2></li>
</br>
<li><h2>For International level sports programs,you can get 50% discount from your registration fee.</h2></li>
</br>
<li><h2>For state level sports programs,you can get 30% discount from your registration fee.</h2></li>
</br>
<li><h2>For divisional level sports programs,you can get 20% discount from your registration fee.</h2></li>
</br> 
<li><h2>You can know your health condition monthly twice without any fee.</h2></li>
</ul>
</body>
</html>