<DOCTYPE!>
<html>
<head>
<title>PHYSICAL CONDITION </title>
</head>
<body class="ram">
<style>
.ram
{
  background-image: url("b4.jpeg");
  background-size: 2000px 1500px;
  background-repeat:no-repeat;
  background-size:cover;
}
</style>
<center>
<h1 style="font-size: 50px;color: blue;"><i>PHYSICAL CONDITION</i></h1>&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
<form action="bmi3.php" method="POST">
<h1 style="font-size: 25px;color:pink;">Name:</h1><input type="text" name="name" value="">
<br/>
<h1 style="font-size: 25px;color: pink;">Age:</h1><input type="text" name="age" value=" ">
<br/>&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
<tr><td><h1 style="font-size: 25px;color: pink;">Gender</h1>
<input type="radio" name="gen" value="male">male</td></tr>
<input type="radio" name="gen" value="female">female
<input type="radio" name="gen" value="others">others
<br/>&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
<h1 style="font-size: 25px;color: pink;">Height in meters</h1><input type="text" name="ht" value=" ">
<br/>&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
<h1 style="font-size: 25px;color: pink;">Weight in kilograms</h1><input type="text" name="wt" value=" "><br/>
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
<h1 style="font-size: 25px;color: pink;">Blood group</h1><input type="text" name="bg" value=" "><br/>
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
<h1 style="font-size: 25px;color: pink;">Hobbies</h1><input type="text" name="hob" value=" "><br/>
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
<h1 style="font-size: 25px;color: pink;">Interested sports</h1><select name="sports">
<option value="cricket">cricket</option>
<option value="kabaddi">kabaddi</option>
<option value="kho kho">kho kho</option>
<option value="volley ball">volley ball</option>
<option value="badmiton">badmiton</option>
<option value="handball">handball</option>
<option value="other">other</option>
</select><br>
<br>
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
<h1 style="font-size: 25px;color: pink;">Identification marks</h1><input type="textarea" name="mark" value=" ">
<br>
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
<br>
<h1 style="font-size: 25px;color: pink;">Vision power</h1><input type="text" name="vis" value=" "><br/>
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
<h1 style="font-size: 25px;color: pink;">audible frequency in hz</h1><input type="text" name="fre" value=" "><br/>
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
<h1 style="font-size: 25px;color: pink;">benifits of exercise</h1><textarea rows="3" cols="50" name="txt"> </textarea>
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp<br>
<font color="white">
<h1 style="font-size: 25px;color: pink;">Diseases</h1>
<input type="checkbox" name="disease[]" value="heart problem">heart problem
<input type="checkbox" name="disease[]" value="lung problem">lung problem
<input type="checkbox" name="disease[]" value="brain problem">brain problem
<input type="checkbox" name="disease[]" value="other problem">other problem
<input type="checkbox" name="disease[]" value="No disease">No disease


<br>

<input type="submit" value="Calculate"><input type="reset" value="Reset"><br>
<a href="janup.php"  ><h1 style="bgcolor=yellow;">UPDATE</a><br>
<a href="d1.php">DELETE</a><br>
</font>
</form>
</center>
</body>
</html> 
