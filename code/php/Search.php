<html>
    
<title>ACME Search</title>

<?php
//    $db_connection = pg_connect("host=10.10.7.169 dbname='Corporate_Directory' user=postgres password=password");
//    
//if (!$db_connection) {
//    die("Connection failed: ");
//
?>

<header>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="StyleSheet.css">
    <script type="text/javascript" src="Script.js"></script> <!--Links Script.js to this page-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</header>

<body>
    
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
        <a href="https://capping2017-erinacafe.c9users.io/AboutPage.php">About
            <span class="fa fa-question-circle"></span>
        </a>
        <a href="https://capping2017-erinacafe.c9users.io/Search.php">Search
            <span class="fa fa-search"></span>
        </a>
        <a href="https://capping2017-erinacafe.c9users.io/SSO.php">Sign In
            <span class="fa fa-space-shuttle"></span>
        </a>
    </div> 
    
    <!-- Search form -->
    <div id="main" class="main" align="center">
        
        <h1>Welcome to the ACME DB!</h1><br>
        <hr noshade>
        <br>Search the ACME Directory<br>
        <form method="post" action="SearchResults.php" id="searchform">
                <input class="search" type="text" placeholder="Search employees by name or location" name="search">
                <button class="short" type="submit">
                    <span class="fa fa-search"></span> Search
                </button> 
        </form>
       
    </div>
    
</body>

</html>