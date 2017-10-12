<html>

<title>My Applications</title>
<header>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="StyleSheet.css">
    <script type="text/javascript" src="Script.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</header>


<body>
<!-- Navbar -->
    <!-- Open Hamburger Menu -->
    <div id="main">
    	<span style="font-size:30px;cursor:pointer" align=left onclick="openNav()">&#9776;</span>
    	<img src="ACMElogo.png" alt="ACMElogo" style="width:100px;height:83px"></img>
    </div>
    
    <!-- Close Hamburger Menu-->
    <div id="hamburger" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="https://capping2017-erinacafe.c9users.io/profile.php">Profile
            <span class="fa fa-address-card"></span>
        </a>
        <a href="https://capping2017-erinacafe.c9users.io/Apps.php">Applications
            <span class="fa fa-tasks"></span>
        </a>
        <a href="#">About
        <span class="fa fa-question-circle"></span>
        </a>
        <a href="https://capping2017-erinacafe.c9users.io/Search.php">Search
            <span class="fa fa-search"></span>
        </a>
        <a href="https://capping2017-erinacafe.c9users.io/SSO.php">Sign Out
            <span class="fa fa-space-shuttle"></span>
        </a>
    </div> 

    <div align=center>
        
    <button class="app" onclick="/Search.php">
        <img padding=10px src="salesforce-icon.png"><br>Salesforce</img>
    </button>
    
    <button class="app" onclick="window.location.href='https://capping2017-erinacafe.c9users.io/Search.php'">
        <img padding=10px src="artifactory-icon.png"><br>Artifactory</img>
    </button>
    
    <button class="app" onclick="window.location.href='https://capping2017-erinacafe.c9users.io/Search.php'">
        <img padding=10px src="assetmanage-icon.png"><br>Asset Management</img>
    </button>
    
    <br><br>
    
    <button class="app" onclick="window.location.href='https://capping2017-erinacafe.c9users.io/Search.php'">
        <img padding=10px src="outlook-icon.png"><br>Outlook</img>
    </button>
    
    <button class="app" onclick="window.location.href='https://capping2017-erinacafe.c9users.io/Search.php'">
        <img padding=10px src="skype-icon.png"><br>Skype for Business</img>
    </button>
    
    <button class="app" onclick="window.location.href='https://capping2017-erinacafe.c9users.io/Search.php'">
        <img padding=10px src="teamcity-icon.png"><br>Teamcity</img>
    </button>
    
	</div>
</body>
<div style="position: absolute; bottom: 0; right: 0; width: 100px; text-align:right;">
    <a href="https://icons8.com"><font color=grey size="1">All Applications Icons credited to icons8.com.</font></a>
</div>
</html>

<style>
    .app {
    background-color: #f44336;
    color: white;
    border: 2px solid #f44336;
    border-radius: 8px;
    padding: 12px 28px;
    width: 20%;
    height: 30%;
    transition-duration: 0.4s;
    text-align: center;
}
</style>