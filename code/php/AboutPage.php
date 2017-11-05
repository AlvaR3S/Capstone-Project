<html>
    <title>ACME About</title>
 
    
    <header>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../CSS/ProfilePage.css">
        <link rel="stylesheet" type="text/css" href="../CSS/StyleSheet.css">
        <link rel="stylesheet" type="text/css" href="../CSS/AboutPage.css">
        <script type="text/javascript" src="../js/ProfilePage.js"></script> 
        <script type="text/javascript" src="../js/Script.js"></script> <!--Links Script.js to this page-->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Makes Page Responsive -->
    </header>
    
    <body>
        
        <header class="topnav" role="banner">
            
            <nav class="topnav container" role="navigation">
                
                <div id="main">
                    <!--<span style="font-size:30px;cursor:pointer;" align=left onclick="openNav()">&#9776;</span>-->
                    <img src="../../assets/ACMElogo.png" alt="ACMElogo" style="width:100px;height:83px"></img>
                </div>
                
                
                <div id="myTopnav" class="topnav-list">
                    <a href="Search.php">Home
                        <span class="fa fa-address-card"></span>
                    </a>
                    <a href="AboutPage.php">About
                        <span class="fa fa-question-circle"></span>
                    </a>
                    <form class="topnav-list-search">
                        <input type="text" id="search" name="search" placeholder="&#128269; Search...">
                    </form>                
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
                    <a href="SSO.php">Login
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
            <div class="aboutInfo">
                <div class="body1">
                    <h2>About ACME</h2><br>
                    ACME is a company that makes stuff. We are the best, don't ya know. Blah blah blah. Nice.
                    <br><br>
                    <h4>Contact Us:</h4>
                    contact@acme.com
                    <br><br>
                    <button class="media" id="mail">&#9993;</font></button>
                    <button class="media" id="fb"><b>f</b></font></button>
                    <button class="media" id="tweet"><b>t</b></font></button>
                </div>
                <div class ="body2">
                    <img src="../../assets/ACMElogo.png"></img>
                </div>
            </div>
        
        <!-- Footer -->
        <div class="footer">
            <div class="footer-contact">
                <h4>Contact</h4>
                <a href="">contact@acme.com</a>
            </div>
        </div>
        
    </body>
    
        
</html>
