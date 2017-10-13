<html>

<title>ACME Profile Page</title>


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
             
             
             <!-- Open Hamburger Menu -->
            <div id="main">
        	    <span style="font-size:30px;cursor:pointer;" align=left onclick="openNav()">&#9776;</span>
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
                <a href="https://capping2017-erinacafe.c9users.io/AboutPage.php">About
                    <span class="fa fa-question-circle"></span>
                </a>
                <a href="https://capping2017-erinacafe.c9users.io/Search.php">Search
                    <span class="fa fa-search"></span>
                </a>
                <a href="https://capping2017-erinacafe.c9users.io/SSO.php">Sign Out
                    <span class="fa fa-space-shuttle"></span>
                </a>
            </div>
            
            <div id="myTopnav" class="topnav-list">
                <a href="#home">Home</a>
                <a href="#news">News</a>
                <a href="#contact">Contact</a>
                <a href="https://capping2017-erinacafe.c9users.io/AboutPage.php">About</a>
                <!--<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>-->
            
                <form class="topnav-list-search">
                    <input type="text" id="search" name="search" placeholder="Search...">
                </form>
            
            </div>
            <hr id="topHR" noshade>
            
            
        </nav>

    </header>
    
    <div class="container page_info">
        
		<div class="col_md_12">
		    <img src="ACMElogo.png" alt="Test Image">
		    <h1>Matvey Ananew</h1>
		    <span class="status">Traveller</span>
	    </div>
    </div>
       
    
</body>

    
</html>