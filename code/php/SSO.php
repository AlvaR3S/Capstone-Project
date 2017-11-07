<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM login WHERE username = '$myusername' and pwd = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: profile.php");
      }else {
         $error = "Your Login Name or Password is invalid";
		 echo 'Your username or password is invalid. Try again.';
      }
   }

?>

<html>

    <title>ACME</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../CSS/StyleSheet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Makes Page Responsive -->
    <!-- Navbar -->
    <div class="loginnav">
    	<a href="SSO.php">
    	     <img src="../../assets/ACMElogo.png" alt="ACMElogo" style="width:167;height:138">
    	</a>
    </div>
    
    <body>
        <!-- login form -->
        <div class="login" style=center>
            <h2>Sign In</h2>
        	<form action="" method="post">
                <label><b>Username</b></label><br>
                <input class="fmt" type="text" placeholder="Enter Username" name="username" required><br>
                <br>
                <label><b>Password</b></label><br>
                <input class="fmt" type="password" placeholder="Enter Password" name="password" required><br>
                <br>
                <input type="checkbox" checked="checked"><font size=2>Remember me</font>
                <br>
                <br>
                <a href=""><font size=2>Forgot your password?</font></a> <br> <br>
                <button type="submit">Sign In</button>
                <br>
                <br>
                <hr noshade>
                <br>
                <font size=2>Not an employee? <a href="guestSearch.php">Sign in as guest.</a></font>
            </form>
        </div>	
    </body>
</html>

<style>
    a:link {
        color: #0080ff;
        text-decoration: none;
    }
    
    a:hover {
        color: #f44336;
        transition: 0.4s;
    }
</style>