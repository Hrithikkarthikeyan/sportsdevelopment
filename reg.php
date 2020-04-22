<?php
 
 
  $db = mysqli_connect("localhost", "root", "hrithik", "REGISTER");
 
 if(isset($_POST['reg_bt']))
 {
      
       $username = ($_POST['username']);
       $email = ($_POST['email']);
       $password = ($_POST['password']);
       $password2 = ($_POST['password2']);
       $a=$_POST['addr'];
       $b=$_POST['g'];
 
    if($password == $password2)
    {
      $password= md5($password);
      $sql = "INSERT INTO user(USERNAME, EMAIL, PASSWORD,addr,gen) VALUES('$username', '$email', '$password','$a','$b')";
    mysqli_query($db, $sql);
    echo "Hi $username";
    echo "<br>";
    echo "YOUR SUCCESSFULLY LOGINED";
    }
    
    else
    {
 echo "The two password donot match";
    }
    
 }
 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
</head>
<body background="3.jpg">
	<h1><center><u>REGISTRATION FORM</u></center></h1>
    <form action="reg.php" method="POST">
     <center> <table border="1" cellpadding="20">
    	<tr>
        <td bgcolor="lightskyblue">USERNAME:</td>
        <td bgcolor="lightcoral"><input type="text" name="username"></td>
      </tr>
         
        <tr>
          <td bgcolor="lightskyblue">EMAIL:</td>
          <td bgcolor="lightcoral"><input type="text" name="email"> </td>
          </tr>

         <tr>
          <td bgcolor="lightskyblue">PASSWORD:</td>
            <td bgcolor="lightcoral"><input type="password" name="password"></td>

         </tr>
      
         <tr>
          <td bgcolor="lightskyblue">CONFIRM PASSWORD:</td>
          <td bgcolor="lightcoral"><input type="password" name="password2"></td>
        </tr>

         
             <tr>
              <td bgcolor="lightskyblue">
                ADDRESS:</td>
                <td bgcolor="lightcoral"><textarea placeholder="enter" rows="6" cols="40" name="addr"></textarea></td>
              </tr>
              <tr>
                <td bgcolor="lightskyblue">GENDER:</td>
                <td bgcolor="lightcoral" ><input type="radio" name="g" value="MALE">MALE
                  <input type="radio" name="g" value="FEMALE">FEMALE</td>


              </tr>
              <tr>
          <td colspan="2">
            <center><button type="submit" name="reg_bt" value="SUBMIT">SUBMIT</button></center>
             </td>
             </tr>

         </table><br>
         <pre><h3><input type="checkbox" name="acceptation">&nbsp;&nbsp;i hereby accept all the terms and conditions to join the development association</h3></pre>
        </center>
</form>
        
</body>
</html>