<html>
    
<title>ACME Search</title>


<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="ProfilePage.css">
    <link rel="stylesheet" type="text/css" href="StyleSheet.css">
    <script type="text/javascript" src="ProfilePage.js"></script> 
    <script type="text/javascript" src="Script.js"></script> <!--Links Script.js to this page-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    
    <header class="topnav" role="banner">
        
        <nav class="topnav container" role="navigation">
             
             
             <!-- Open Hamburger Menu -->
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
            
            
        </nav>

    </header>
    
    <!-- Search form -->    
    <div id="main" class="main" align="center">
        
        <h1>Welcome to the ACME emplyee database!</h1><br>
        <form method="post" action="SearchResults.php" id="searchform">
                <input class="search" type="text" placeholder="Search employees by name or location" name="search">
                <button class="short" type="submit">
                    <span class="fa fa-search"></span> Search
                </button> 
        </form>
        <hr noshade>
        <br>
        <h2><font size=4>Search Results:</h2>
       
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
    .search {
        padding: 20px;
    }
    
    .short {
        padding: 20px;
        width: 140px;
        cursor: pointer;
    }
    
    .main {
        margin-bottom: 13%;
    }
</style>