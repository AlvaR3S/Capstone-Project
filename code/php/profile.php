<html>

<title>ACME Profile Page</title>


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
    
    <div class="container-profile page_info">
        
        <div class="picAndName">
            <img src="snoopy.jpg" alt="Snoopy">
            <h1 style="color: black;">John Does Know</h1>
            <span class="status">Traveller</span>
            <button id="edit">Edit</button>
	    </div>
	        <br>
	    <div class="profile-info">
	        <fieldset>
	            <h3>Frist Name:</h3> <br>
	            <h5 id="response">John</h5>
	            <h3>Middle Name:</h3> <br>
	            <h5 id="response">Does</h5>
	            <h3>Last Name:</h3> <br>
	            <h5 id="response">Know</h5>
	            <h3>Email Address:</h3> <br>
	            <h5 id="response">johndoesknow@peanuts.com</h5>
	            <h3>Office Phone Number:</h3> <br>
	            <h5 id="response">+1(717)-845-3000</h5>
	            <h3>Office Physical Address</h3> <br>
	            <h5 id="response">75 Clinton Street, New York, NY, 12601</h5>
	        </fieldset>
	    </div>
	 
	    

</body>

    
</html>