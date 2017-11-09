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
                   <!--  <form class="topnav-list-search">
                        <input type="text" id="search" name="search" placeholder="&#128269; Search...">
                    </form>                
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a> -->
                    <a href="SSO.php">Log Out
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
        
        <div class="container-profile">
            
            <div class="TopInfo">
                <img class="picInfo" src="../../assets/snoopy.jpg" alt="Snoopy">
                
                
                    
                <h1 id="name">John Does Know</h1>
                <span class="status">Traveller</span>
                <button id="edit">Edit</button>
                <hr id="belowProfilePic" noshade>
                
            </div>
            <br>
            <div class="BottomInfo">
                <h3>Email Address:</h3> <br>
                    <h5 id="response">johndoesknow@peanuts.com</h5>
                    <h3>Office Phone Number:</h3> <br>
                    <h5 id="response">+1(717)-845-3000</h5>
                    <h3>Office Physical Address</h3> <br>
                    <h5 id="response">75 Clinton Street, New York, NY, 12601</h5>
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

    
</html>
