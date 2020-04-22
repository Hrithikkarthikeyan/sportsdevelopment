<html>
<head><title>CONTACT US</title></head>
<body>

<?php
$a=$_POST['name'];
$b=$_POST['mail'];
$c=$_POST['number'];
$d=$_POST['message'];
$e=$_POST['place'];

$servername="localhost";
$username='id9125715_root';
$password='hrithik';
$connect=new mysqli($servername,$username,$password); 

if($connect->connect_error)
{
    echo "nope";
}

mysqli_select_db($connect,"id9125715_sports");


$sql="INSERT INTO register (name, mail, contact_no, message,place) VALUES ('$a', '$b', '$c', '$d','$e')";


if(mysqli_query($connect,$sql))
echo "success";


mysqli_close($connect);
?>
 <a href="index.html"><button style="padding:10px 30px; background-color:green; margin-left:720px;">click to go back</button></a>
 </body>
</html>