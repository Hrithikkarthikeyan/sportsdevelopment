<html>
<body background="bluepat.gif">
<center>

<h1><u  style="color:pink"><span style="color:white">Information About New Tournament</span></u></h1>

<form name="information" method="post" action="tour.php">
<table name="form " >
<tr>
<th><span style="color:white">Name Of The Tournments:</span></th>
<td><input type="text" name="tournament" required></td>
</tr>
<tr>
<th><span style="color:white">Venue:</span></th>
<td><textarea name="venue" placeholder="venue" ></textarea></td>
</tr>
<tr>
<th><span style="color:white">Date</span></th>
<td><input type="date" name="date" value="date"><td>
</tr>

<tr>
<th><spans style="color:white">Timing</span></th>
<td><input type="text" name="timing" required></td>
<td><input type="radio" name="time" value="a.m" ><span style="color:white">a.m</span><br />
<td><input type="radio" name="time" value="p.m" ><span style="color:white">p.m</span><br />
</tr>

<tr>
<th><span style="color:white">Awards/Prizes:</span></th>
<td><input type="text" name="awards" required></td>
</tr>
<tr>
<th><span style="color:white">Levels:</span></th>
<td><input type="text" name="levels" required></td>
</tr>
<tr>
<th><span style="color:white">Entry Fee:</span></th>
<td><input type="text" name="fee" required></td>
</tr>
<tr>
<th><span style="color:white">Contact Number</span></th>
<td><input type="text" name="contact" required></td>
</tr>

</table>

</center>
<center>
<input style="background:pink" type="submit"name="submit" value="submit">
<input style="color:orange" type="reset" name="reset" value="reset">
</center><br>
<a href="inup.php"><font color="yellow">UPDATE</font></a><br>

<p style="color:blue" align="center" >
</body>
</html>
