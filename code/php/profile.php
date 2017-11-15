<?php
   include('session.php');
   include('nav_check.php');

   $sqlFirst = "select firstname from employee where username = '" . $login_session . "'";
   $first_name = mysqli_query($db,$sqlFirst);
   $rowFirst = mysqli_fetch_assoc($first_name);
   $login_first = $rowFirst['firstname'];
   
   $sqlLast = "select lastname from employee where username = '" . $login_session . "'";   
   $last_name = mysqli_query($db,$sqlLast);   
   $rowLast = mysqli_fetch_assoc($last_name);
   $login_last = $rowLast['lastname'];
   
   $sqlPosition = "select tid from employee where username = '" . $login_session . "'";
   $position = mysqli_query($db, $sqlPosition);
   $rowPos = mysqli_fetch_assoc($position);
   $login_pos = $rowPos['tid'];

   $sqlTitle = "select posname from title where tid = '" . $login_pos . "'";
   $title = mysqli_query($db, $sqlTitle);
   $rowTitle = mysqli_fetch_assoc($title);
   $login_title = $rowTitle['posname'];

   $sqlEmail = "select email from employee where username = '" . $login_session . "'";
   $email = mysqli_query($db,$sqlEmail);
   $rowEmail = mysqli_fetch_assoc($email);
   $login_email = $rowEmail['email'];
   
   $sqlPhone = "select homePhone from employee where username = '" . $login_session . "'";
   $phone = mysqli_query($db,$sqlPhone);
   $rowPhone = mysqli_fetch_assoc($phone);
   $login_phone = $rowPhone['homePhone'];
   
   $sqlAddress = "select streetAddress from employee where username = '" . $login_session . "'";
   $address = mysqli_query($db,$sqlAddress);
   $rowAddress = mysqli_fetch_assoc($address);
   $login_address = $rowAddress['streetAddress'];
   
?>
<html>

    <title>My ACME Profile Page</title>
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
    <!-- Navbar -->
        
        <header class="topnav" role="banner">
            
            <nav class="topnav container" role="navigation">
    
                
                <div id="main">
            	    <!--<span style="font-size:30px;cursor:pointer;" align=left onclick="openNav()">&#9776;</span>-->
            	    <img src="../../assets/ACMElogo.png" alt="ACMElogo" style="width:100px;height:83px"></img>
                </div>
                
                
                <div id="myTopnav" class="topnav-list">
                    <a href="Search.php">Home
                        <span class="fa fa-home"></span>
                    </a>
                    <a href="profile.php">Profile
                        <span class="fa fa-address-card"></span>
                    </a>
                    <a href="Apps.php">Apps
                        <span class="fa fa-tasks"></span>
                    </a>        
                    <a href="HR.php" id="HR">Human Resources
                        <span id="HR" class="fa fa-address-card"></span>
                    </a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
                    <a href="logout.php">Log Out
                        <span class="fa fa-space-shuttle"></span>
                    </a>
                
                </div>
                <hr id="topHR" noshade>
                <hr id="topHR" noshade>
                
                
            </nav>
    
        </header>
        
        <div class="container-profile">
            
            <div class="TopInfo">
                <img class="picInfo" src="../../assets/snoopy.jpg" alt="Snoopy">    
                <h1 id="name"><?php echo '' . ucwords($login_first) . ' ' . ucwords($login_last);?></h1>
                <span class="status"><?php echo '' . $login_title;?></span>
                <button id="edit">Edit</button>                
            </div>      
        </div>

        <div class="bottom-container-profile">
            <hr id="split">
            <div class="BottomInfo">
              <h3>Email Address:</h3> <br>
              <h5 id="response"><?php echo '' . $login_email;?></h5>
              <h3>Phone Number
              <h5 id="response"><?php echo '' . $login_phone;?></h5>
              <h3>Address:</h3> <br>
              <h5 id="response"><?php echo '' . $login_address;?></h5>
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
<script>
function hideHR() {
	document.getElementById("HR").style.display = "none";
}
</script>
    
</html>
