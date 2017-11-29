<?php
include("session.php");
include("nav_check.php");
?>

<html>
    
<title>ACME Search</title>

<?php
//    $db_connection = pg_connect("host=10.10.7.168 dbname='Corporate_Directory' user=postgres password=password");
//    
//if (!$db_connection) {
//    die("Connection failed: ");
//
?>

<head>
     <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../CSS/ProfilePage.css">
    <link rel="stylesheet" type="text/css" href="../CSS/StyleSheet.css">
    <script type="text/javascript" src="../js/ProfilePage.js"></script> 
    <script type="text/javascript" src="../js/Script.js"></script> <!--Links Script.js to this page-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    

    
	
    <!-- Search form -->
	
    <div id="main" class="main" align="center" style="margin-top:130px;">
        
        <strong><h1 style="margin-top: 5%; color: white;">Welcome to the ACME employee database!</h1></strong><br>
        <h3 style="margin-top: -1%; color:white; font-size: 15px;">Search the directory to find ACME Employees!</h3><br>
        <form method="post" action="SearchResults.php?go" id="searchform" style="margin-top: 2%;">
                <input name="name" class="search" type="text" placeholder="&#128269; Search employees by name, position, or location">
                <select name="searchby" id="searchby">
                    <option value="by_name">Name</option>
                    <option value="by_position">Position</option>                    
                    <option value="by_dept">Department</option>
                    <option value="by_location">Location</option>
                </select>
                <button class="short" type="submit" name="submit">
                    <span class="fa fa-search"></span> Search
                </button>
        </form>

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

<style>

    h1 {
        -webkit-text-stroke-color:black;
        -webkit-text-stroke-width:0.5px;
    }
    .search {
        padding: 20px;
        width: 40%;
    }

    #searchby {
        width: 12%;
        /*padding: 17px;*/
        border-radius: 7px;
        font-size: 18px;
        border-width: 2px;
        border-color: #555555;
        cursor:pointer;
        height: 66px;
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
