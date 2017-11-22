<html>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
   include("config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM login WHERE username = '$myusername'";
      $result = mysqli_query($db,$sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
     if($count > 0) {
		 $row = mysqli_fetch_array($result);
		 //$password_hash = $row['pwd'];
			//if(password_verify($mypassword, $password_hash)){
				$_SESSION['login_user'] = $myusername;
				header("location: profile.php?login_user=$myusername");
			//}
      }else {
      ?>
      <div class="login_err">
        <span class="fa fa-warning">
          <?php  
         //$error = "Your Login Name or Password is invalid";

         echo 'Your username or password is invalid. Try again.
        </span>
        <span class="fa fa-warning"></span>';

      }
    
   }

?>

      </div>

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

          <form method="post" enctype="multipart/form-data" action="SSO.php">
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

    <div class="copyright" style="text-align: center;">
        Copyright &#9400
      <?php
        echo date("Y");
        ?>
         Acme Corporation
    </div>
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

    .login_err {
      background-color: rgb(255,255,182);
      width: 50%;
      color: red;
      text-align: center;
      padding: 7px;
      border-radius: 7px;
      margin-bottom: 15px;
      margin-left: 25%;
    }

    .copyright {
      margin-top: 15px;
      font-size: 12px;
    }
</style>