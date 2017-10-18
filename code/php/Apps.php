<html>

<title>My Applications</title>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="StyleSheet.css">
    <link rel="stylesheet" type="text/css" href="ProfilePage.css">
    <script type="text/javascript" src="ProfilePage.js"></script> 
    <script type="text/javascript" src="Script.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
<!-- Navbar -->
    
    <header class="topnav" role="banner">
        
        <nav class="topnav container" role="navigation">

            
            <div id="main">
        	    <!--<span style="font-size:30px;cursor:pointer;" align=left onclick="openNav()">&#9776;</span>-->
        	    <img src="ACMElogo.png" alt="ACMElogo" style="width:100px;height:83px"></img>
            </div>
            
            
            <div id="myTopnav" class="topnav-list">
                <a href="https://capping2017-erinacafe.c9users.io/profile.php">Home
                    <span class="fa fa-address-card"></span>
                </a>
                <a href="https://capping2017-erinacafe.c9users.io/AboutPage.php">About
                    <span class="fa fa-question-circle"></span>
                </a>
                <a href="https://capping2017-erinacafe.c9users.io/Apps.php">Apps
                    <span class="fa fa-tasks"></span>
                </a>
                <form class="topnav-list-search">
                    <input type="text" id="search" name="search" placeholder="Search...">
                </form>                
                <!--<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>-->
                <a href="https://capping2017-erinacafe.c9users.io/SSO.php">Log Out
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


    <div class="appcontainer" align=center>
        <!--<div class="topApps">-->
        <button class="app" action="Search.php">
            <img padding="10px" src="salesforce-icon.png"><br><br>Salesforce</img>
        </button>
        
        <button class="app" onclick="window.location.href='https://capping2017-erinacafe.c9users.io/Search.php'">
            <img padding="10px" src="artifactory-icon.png"><br><br>Artifactory</img>
        </button>
        
        <button class="app" onclick="window.location.href='https://capping2017-erinacafe.c9users.io/Search.php'">
            <img padding="10px" src="assetmanage-icon.png"><br><br>Assets</img>
        </button>
       <!-- </div>-->
    
        <!--<div class="bottomApps">-->
        <button class="app" onclick="window.location.href='https://capping2017-erinacafe.c9users.io/Search.php'">
            <img padding=10px src="outlook-icon.png"><br><br>Outlook</img>
        </button>
        
        <button class="app" onclick="window.location.href='https://capping2017-erinacafe.c9users.io/Search.php'">
            <img padding=10px src="skype-icon.png"><br><br>Skype</img>
        </button>
        
        <button class="app" onclick="window.location.href='https://capping2017-erinacafe.c9users.io/Search.php'">
            <img padding=10px src="teamcity-icon.png"><br><br>Teamcity</img>
        </button>
	</div>
    <div style="position:fixed; bottom:0; right: 0; width: 100px; float:right;">
        <a href="https://icons8.com"><font color=grey size="1">All Applications Icons credited to icons8.com.</font></a>
    </div>
    
    <!-- Footer -->
    <div class="footer">
        <div class="footer-info">
            <h4>Contact</h4><br>
            <a href="">contact@acme.com</a>
        </div>
        <div class="footer-info">
            <h4>Applications</h4><br>
                <a href="">Salesforce.com</a><br>
                <a href="">Artifactory</a><br>
                <a href="">Teamcity</a><br>
                <a href="">Outlook</a><br>
                <a href="">Skype for Business</a><br>
                <a href="">Assest Management</a>
        </div>
        
    </div>
</body>

</html>

<style>
    .app {
        width: 185px;
        height: 185px;
        background-color: #f44336;
        color: white;
        border: 2px solid #f44336;
        border-radius: 8px;
        padding: 50px;
        transition-duration: 0.4s;
        margin: 5px;
        cursor: pointer;
    }
    
    .appcontainer {
        max-width: 50%;
        margin-left: 25%;
        margin-bottom: 5%;
    }

</style>