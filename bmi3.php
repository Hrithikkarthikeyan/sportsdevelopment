	<?php
$A=$_POST['name'];
$acc=$_POST['age'];
$B=$_POST['gen'];
$C=$_POST['ht'];
$D=$_POST['wt'];
$E=$_POST['bg'];
$F=$_POST['hob'];
$G=$_POST['sports'];
$H=$_POST['mark'];
$J=$_POST['vis'];
$K=$_POST['fre'];
$L=$_POST['txt'];
$I = implode (", ", $_POST['disease']);

$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='id9125715_root';
$dbpass='hrithik';
$connect=mysqli_connect("localhost",$dbuser,$dbpass); 

mysqli_select_db($connect,'id9125715_sports');


$query_insert="insert into bmijan(name,age,gender,ht,wt,bg,hob,sprt,mark,vis,fre,txt,dis) values('$A','$acc','$B','$C','$D','$E','$F','$G','$H','$J','$K','$L','$I')";

if(($A==NULL)||($acc==NULL)||($B==NULL)||($C==NULL)||($D==NULL)||($E==NULL)||($F==NULL)||($H==NULL)||($J==NULL)||($K==NULL)||($L==NULL)||($G==NULL))
{
echo("Enter all fields");
}
else
{
if(mysqli_query($connect,$query_insert))
{
echo("<br>");
}
else
{
echo("insertion failed");
}
}
mysqli_close($connect);
?>
<html>
<body class="ram">
<style>
.ram
{
  background-image: url("s11.jpeg");
  background-size: 1400px 700px;
  background-repeat:no-repeat;
  background-size:cover;
}
</style>
<h2>BMI CALCULATION</h2><br>
<?php

echo "Hi $A welcome to BMI calculation page "."<br>";
$BMI=$D/($C*$C);
        echo"YOUR BMI RANGE IS $BMI"."<br>";
        if($BMI<19)
        {
    echo"TO OVERCOME UNDERWEIGHT"."<br>"."
	1.eat more frrequently.when you are underweight"."<br>"."
    2.choose nutrient rich food."."br".
    "3.try smoothies and shakes."."<br>"."
    4.watch when you drink."."br"."
   5.have a occasional treat.";
        }
        
        
        
        elseif($BMI>25)
         { echo"
          TO OVERCOME OBESITY"."br"."
    1.eat more fruits,vegetables and nuts"."<br>"."
   2.exercise,even moderately for atleast 30 minutes a day"."<br>"."
   3.cut down your consumption of fatty and sugary food";}
   
   else
   {
   echo"TO MAINTAIN A HEALTHY BODY"."<br>"."
  1.exercise,regular physical activity burns calories which help you to feel good and keep weight off"."<br>"."
  2.reduce screen time."."<br>"."
  3.watch out for portion distortion."."<br>"."
  4.don not skip the breakfast";
	
   }


?>
<a href="qwerty.php"><center><button style="padding:10px 30px; background-color:green;">click to go back</button></a></center>