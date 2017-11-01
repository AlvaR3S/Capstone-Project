<html>
    
    <title>ACME Search</title>
    
    
    <head>
        
        <!-- Meta styles -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Makes Page Responsive -->
        
        <!-- CSS Links -->
        <link rel="stylesheet" type="text/css" href="/Code/CSS/StyleSheet.css">
        <link rel="stylesheet" type="text/css" href="/Code/CSS/ProfilePage.css">
        <link rel="stylesheet" type="text/css" href="/Code/SearchResult.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        
        <!-- Javascript Links -->
        <script type="text/javascript" src="/Code/js/ProfilePage.js"></script> 
        <script type="text/javascript" src="/Code/js/Script.js"></script>
        
        
    </head>
    
    <body style="font-family: 'Montserrat', sans-serif;">
        
        <header class="topnav" role="banner">
            
            <nav class="topnav container" role="navigation">
                 
                 
                 <!-- Open Hamburger Menu -->
                <div id="main">
                    <!--<span style="font-size:30px;cursor:pointer;" align=left onclick="openNav()">&#9776;</span>-->
                    <img src="/Assets/ACMElogo.png" alt="ACMElogo" style="width:100px;height:83px"></img>
                </div>
                
                
                <div id="myTopnav" class="topnav-list">
                    <a href="/Code/php/Search.php">Home
                        <span class="fa fa-address-card"></span>
                    </a>
                    <a href="/Code/php/AboutPage.php">About
                        <span class="fa fa-question-circle"></span>
                    </a>
                    <a href="/Code/php/Apps.php">Apps
                        <span class="fa fa-tasks"></span>
                    </a>
                    <form class="topnav-list-search">
                        <input type="text" id="search" name="search" placeholder="&#128269; Search...">
                    </form>                
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
                    <a href="/Code/php/SSO.php">Log Out
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
        
        <!-- Search form -->    
        <div id="main" class="main" align="center" style="margin-top:10%; font-family: 'Montserrat', sans-serif;">
            
            <h1 style="float:left; margin-left:10%;">Employees</h1><br>
           
           
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
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat');
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