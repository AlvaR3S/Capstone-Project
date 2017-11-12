<?php
session_start();
?>

<html>

    <title>Human Resources</title>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../CSS/StyleSheet.css">
        <link rel="stylesheet" type="text/css" href="../CSS/ProfilePage.css">
        <link rel="stylesheet" type="text/css" href="../CSS/HR.css">
        <script type="text/javascript" src="../js/ProfilePage.js"></script> 
        <script type="text/javascript" src="../js/Script.js"></script>
        <script type="text/javascript" src="../js/HR.js"></script>
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
                    <a href="HR.php">Human Resources
                        <span class="fa fa-address-card"></span>
                    </a>
                    <a href="logout.php">Log Out
                        <span class="fa fa-space-shuttle"></span>
                    </a>
                    <!--<form class="topnav-list-search">
                        <input type="text" id="search" name="search" placeholder="Search...">
                    </form>-->
                
                </div>
                <hr id="topHR" noshade>
                <hr id="topHR" noshade>
                
                
            </nav>
    
        </header>
        <br>
        
        <div class="title">
            
            <h1>Human Resources</h1>
            
            
        </div>
        
        <div class="employeeForms">
            <div id="employeeFormAdd">
                <h1 style="text-align: center; font-size: 25px; margin-top: 15px">Enter information to add a new Employee to add to ACME</h1>
                <hr style="border-top:1px solid darkred;">
                <form method="post" action="HR.php" id="addEmployee">
                    <div class="inputAlign">
                        <h4 style="margin-top: 30px;">Employee Information*</h3>
                        <input type="text" name="firstname" placeholder="Enter First Name">
                        <input type="text" name="lastname" placeholder="Enter Last Name">
                        <input style="margin-top: 10px; width: 20%" type="text" name="dob" placeholder="(MM/DD/YY)">
                        <input style="margin-top: 10px; width: 35%;" type="text" name="phone" placeholder="e.g. 7173457575">
                        <input style="width: 7%;" type="text" name="ext" placeholder="Ext">   
                        <select style="height: 40px; width: 26.5%">
                            <option value="" disabled selected>Gender</option>
                            <option value="Male">Male</option>
                            <option value="saab">Female</option>
                            <option value="opel">Other</option>
                            <option value="audi">Prefer Not To Say</option>
                        </select>
                        <h6 style="margin:0;">Date of Birth</h6> <h6 style="margin-left: 21%;margin-top: -24px;">Phone Number</h6> <h6 style="margin-left: 57%;margin-top: -34px;">Ext</h6>
                        <h4 style="margin-top: 22px;">Home Address*</h4>
                        <input style="width: 90.9%;" type="text" name="address" placeholder="Enter Home Address">
                        <input style="margin-top: 10px; width: 35%;" type="text" name="country" placeholder="Enter Country">
                        <input style="margin-top: 10px; width: 35%;" type="text" name="city" placeholder="Enter City">
                        <input style="margin-top: 10px; width: 19.3%;"type="text" name="zip" placeholder="Enter Zip Code">
                        <h6 style="margin:0;">Country</h6> <h6 style="margin-left: 36%;margin-top: -24px;">City</h6> <h6 style="margin-left: 72%;margin-top: -34px;">Zip</h6>
                        <h4 style="margin-top: 22px;">Login Information*</h4>
                        <input type="text" name="username" placeholder="Enter New Username">
                        <input type="text" name="Password" placeholder="Enter New Password">
                        <input style="width: 70%; margin-top: 10px;" type="text" name="email" placeholder="Enter Email Address">
                        <input style="width: 20%;" type="text" name="todaysdate" placeholder="(MM/DD/YY)">
                        <h6 style="margin:0;">Email Address</h6> <h6 style="margin-top: -24px;margin-left: 71%;">Today's Date</h6> 
                        
                        <br><br> <button class="employeeAdd" type="submit" name="submit">Create</button>
                    </div>
                </form>
            </div>  
            <div id="employeeFormRemove">   
                <h1 style="text-align: center; font-size: 25px;">Enter the Employee you would like to remove from ACME</h1>         
                <form method="post" action="HR.php" id="removeEmployee">
                    <input type="text" name="name">
                    <br> <button class="employeeAdd" type="submit" name="submit">Submit </button>
                </form>
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
                <a href="/Code/php/AccessDenied.php">Salesforce.com</a><br>
                <a href="/Code/php/AccessDenied.php">Artifactory</a><br>
                <a href="/Code/php/AccessDenied.php">Teamcity</a><br>
                <a href="/Code/php/AccessDenied.php">Outlook</a><br>
                <a href="/Code/php/AccessDenied.php">Skype for Business</a><br>
                <a href="/Code/php/AccessDenied.php">Assest Management</a>
            </div>
        </div>
        
    </body>

</html>


