<div id="code">
 
<div id="code-st">

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
