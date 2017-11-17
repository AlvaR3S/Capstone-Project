<?php
   include('session.php');
   include('nav_check.php');


   $user = $_GET['user'];

   $sqlFirst = "select firstname from employee where username = '" . $user . "'";
   $first_name = mysqli_query($db,$sqlFirst);
   $rowFirst = mysqli_fetch_assoc($first_name);
   $login_first = $rowFirst['firstname'];
   
   $sqlLast = "select lastname from employee where username = '" . $user . "'";   
   $last_name = mysqli_query($db,$sqlLast);   
   $rowLast = mysqli_fetch_assoc($last_name);
   $login_last = $rowLast['lastname'];

   $sqlPosition = "select tid from employee where username = '" . $user . "'";
   $position = mysqli_query($db, $sqlPosition);
   $rowPos = mysqli_fetch_assoc($position);
   $login_pos = $rowPos['tid'];

   $sqlTitle = "select posname from title where tid = '" . $login_pos . "'";
   $title = mysqli_query($db, $sqlTitle);
   $rowTitle = mysqli_fetch_assoc($title);
   $login_title = $rowTitle['posname'];   
   
   $sqlEmail = "select email from employee where username = '" . $user . "'";
   $email = mysqli_query($db,$sqlEmail);
   $rowEmail = mysqli_fetch_assoc($email);
   $login_email = $rowEmail['email'];
   
   $sqlPhone = "select homePhone from employee where username = '" . $user . "'";
   $phone = mysqli_query($db,$sqlPhone);
   $rowPhone = mysqli_fetch_assoc($phone);
   $login_phone = $rowPhone['homePhone'];
   
   $sqlAddress = "select streetAddress from employee where username = '" . $user . "'";
   $address = mysqli_query($db,$sqlAddress);
   $rowAddress = mysqli_fetch_assoc($address);
   $login_address = $rowAddress['streetAddress'];

   $sqlCity = "select city_town from employee where username = '" . $user . "'";
   $city = mysqli_query($db,$sqlCity);
   $rowCity = mysqli_fetch_assoc($city);
   $login_city = $rowCity['city_town']; 

   $sqlState = "select state from employee where username = '" . $user . "'";
   $state = mysqli_query($db,$sqlState);
   $rowState = mysqli_fetch_assoc($state);
   $login_state = $rowState['state'];
   if ($login_state == NULL) {
      $login_state == "";
   }

   $sqlCountry = "select country from employee where username = '" . $user . "'";
   $country = mysqli_query($db,$sqlCountry);
   $rowCountry = mysqli_fetch_assoc($country);
   $login_country = $rowCountry['country'];
   
?>
<html>

    <title><?php echo ucwords($login_first) . '&nbsp' . ucwords($login_last)?>'s Profile Page</title>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../CSS/StyleSheet.css">
        <link rel="stylesheet" type="text/css" href="../CSS/ProfilePage.css">
        <script type="text/javascript" src="../js/ProfilePage.js"></script> 
        <script type="text/javascript" src="../js/Script.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Makes Page Responsive -->
    </head>
    
    
    <body>
   
                <button class="return" onclick="window.location.href='Search.php'">
                    <span class="fa fa-chevron-left"></span> &nbsp Return to Search
                </button>       
        <div class="container-profile">
             
            <div class="TopInfo">

                <img class="picInfo" src="../../assets/snoopy.jpg" alt="Snoopy">    
                <h1 id="name"><?php echo '' . ucwords($login_first) . ' ' . ucwords($login_last);?></h1>
                <span class="status">Traveller</span>             
            </div>      
        </div>

        <div class="bottom-container-profile">
            <div class="BottomInfo">
              <h3>Email Address:</h3> <br>
              <h5 id="response"><?php echo '' . $login_email;?></h5>
              <h3>Phone Number</h3> <br>
              <h5 id="response"><?php 
                  echo '('.substr($login_phone, 0, 3).') '.substr($login_phone, 3, 3). '-' . substr($login_phone,6);//echo '' . $login_phone;?></h5>
              <h3>Address:</h3> <br>
              <h5 id="response"><?php echo '' . $login_address . "<br>" . $login_city . ', ' .$login_state . '&nbsp' . $login_country;?></h5>
            </div>      
        </div>      
        
         <!-- Footer -->
        <div class="footer">
            <div class="footer-contact">
                <h4>Contact</h4>
                <a href="">contact@acme.com</a>
            </div>
            <div class="footer-apps">
                <h4>Applications</h4>
                <a href="AccessDenied.php">Salesforce.com</a><br>
                <a href="AccessDenied.php">Artifactory</a><br>
                <a href="AccessDenied.php">Teamcity</a><br>
                <a href="AccessDenied.php">Outlook</a><br>
                <a href="AccessDenied.php">Skype for Business</a><br>
                <a href="AccessDenied.php">Assest Management</a>
            </div>
        </div>
        
    
    </body>

<style>


  .container-profile {
    margin-top: 15%;
    padding-bottom: 5%;
  }

  .return {
    width: 20%;
    margin-top: 10%;
    margin-bottom: -10%;
    margin-left: 40%;
    display:block;
  }

  .return:hover {
    cursor: pointer;
  }
</html>
