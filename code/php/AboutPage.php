<html>

<title>ACME About</title>


<header>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="ProfilePage.css">
    <link rel="stylesheet" type="text/css" href="StyleSheet.css">
    <script type="text/javascript" src="ProfilePage.js"></script> 
    <script type="text/javascript" src="Script.js"></script> <!--Links Script.js to this page-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</header>

<body>
    
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
    <div>
        <div class="body1">
            <h2>About ACME</h2><br>
            ACME is a company that makes stuff. We are the best, don't ya know. Blah blah blah. Nice.
            <br><br>
            <h4>Contact Us:</h4>
            contact@acme.com
            <br><br>
            <button class="media"><font color=grey>&#9993;</font></button>
            <button class="media"><font color=grey><b>f</b></font></button>
            <button class="media"><font color=grey><b>t</b></font></button>
        </div>
        <div class ="body2">
            <img src="ACMElogo.png"></img>
        </div>
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
    .body1 {
        width: 50%;
        margin-left: 10%;
        margin-top: 5%;
        margin-bottom: 5%;
        background-color: white;
        padding: 5%;
        display: inline-block;
        border-radius: 8px;
    }
    
    .body2 {
        display: inline-block;
        padding: 5%;
    }
    
    .media {
        width: 40px;
        height: 40px;
        padding: 5px;
        background-color: white;
        border-color: grey;
    }
</style>