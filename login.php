
<?php
 if(isset($_POST['log_bt']))
 {  
      
       $username = ($_POST['username']);
       $password = ($_POST['password']);
       
       
$db = mysqli_connect("localhost", "id9125715_root", "hrithik", "id9125715_sports");
       
       
       $sql="SELECT * FROM user WHERE USERNAME = '$username' AND PASSWORD = '".md5($password)."'";
      $res= mysqli_query ($db, $sql);
      $num= mysqli_num_rows($res);
       if($num == 1)
       {    echo '<script>window.location="qwerty.php"</script>';
         }
         
       
       else
       {
           
    echo '<script> alert(" INVALID CREDENTIALS !")</script>' ;				
       }
  }     
?>
<html>
<head>
  <meta charset="utf-8">
	<title>LOGIN</title>
<link rel="stylesheet" type="" href="newsty.css">
</head>
<body>


<div class="login-box">
<br>
<h2 class="h">LOGIN</h2>
 <form action="login.php" method="POST">
  <div class="textbox">
    	<br><input  type="text" name="username" placeholder="username" required>   

  </div>   
  <div class="textbox"> 
        <br><input type="password" name="password" placeholder="password" required>
   </div>     
   
        <br><button class="btn" type="submit" name="log_bt" value="SUBMIT">SUBMIT</button>
        <br><u>NEED AN ACCOUNT</u>
 
 </form>
 <a href="karthi.php"><button style="padding:7px 12px">SIGN UP</button></a><br><br>
 <a href="index.html"><button style="padding:7px 12px">HOME</button></a>
 
</div>       
</body>
</html>