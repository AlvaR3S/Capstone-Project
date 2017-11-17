<?php

 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_DATABASE', 'corporate_directory');
 
 $link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if (!$link) {
    dir('There was a problem when trying to connect to the host. Please contact Tech Support. Error: ' . mysql_error());    
}

$db_selected = mysqli_select_db($link, "corporate_directory");

if (!$link) {
    dir('There was a problem when trying to connect to the database. Please contact Tech Support. Error: ' . mysql_error());    
}

$firstname = mysqli_real_escape_string($link, $_POST['firstname']);
$lastname = mysqli_real_escape_string($link, $_POST['lastname']);
$dob = mysqli_real_escape_string($link, $_POST['dob']);
$date = strtotime($dob);
$birthdate =  date("Y-m-d",$date);
$phone = mysqli_real_escape_string($link, $_POST['phone']);
$ext = mysqli_real_escape_string($link, $_POST['ext']);
// gender? 
//reportsTo
$location = mysqli_real_escape_string($link, $_POST['location']);
$title = mysqli_real_escape_string($link, $_POST['title']);
$dept = mysqli_real_escape_string($link, $_POST['department']);
$address = mysqli_real_escape_string($link, $_POST['address']);
$country = mysqli_real_escape_string($link, $_POST['country']);
$state = mysqli_real_escape_string($link, $_POST['state']);
$city = mysqli_real_escape_string($link, $_POST['city']);
$zip = mysqli_real_escape_string($link, $_POST['zip']);
$username = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$hashedpassword = hash('sha512', $_POST['password']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$hiredate = mysqli_real_escape_string($link, $_POST['hiredate']);
$hired = strtotime($hiredate);
$joined = date("Y-m-d", $hired);


$sql = "INSERT INTO employee (oid, tid, did, username, firstname, lastname, dob, hireDate, homePhone, workExt, email, streetAddress, city_town, state, country, zip) 
VALUES ('$location', '$title', '$dept', '$username', '$firstname', '$lastname', '$birthdate', '$joined', '$phone', '$ext', '$email', '$address', '$city', '$state', '$country', '$zip')";

if (!mysqli_query($link, $sql)) {
    die('Error: ' . mysqli_error($link)); 
} 

$query = "INSERT INTO login (username, pwd)
		  VALUES ('$username', '$hashedpassword')";


if (!mysqli_query($link, $query)) {
	die('Error: ' . mysqli_error($link));
}

mysqli_close($link);


?>
<html>
    <title>Human Resources</title>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../CSS/StyleSheet.css">
        <link rel="stylesheet" type="text/css" href="../CSS/ProfilePage.css">
        <link rel="stylesheet" type="text/css" href="../CSS/HR.css">
        <script type="text/javascript" src="../js/ProfilePage.js"></script> 
        <script type="text/javascript" src="../js/Script.js"></script>
        <script type="text/javascript" src="../js/HR.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Makes Page Responsive -->
    </head>
    <body>
    <!-- Navbar -->
        
        <header class="topnav" role="banner">
            
            <nav class="topnav container" role="navigation">
    
                
                <div id="main">
                    <!--<span style="font-size:30px;cursor:pointer;" align=left onclick="openNav()">&#9776;</span>-->
                    <img src="../../assets/ACMElogo.png" alt="ACMElogo" style="width:100px;height:83px"></img>
                </div>
                
                
                <div id="myTopnav" class="topnav-list">
                    <a href="Search.php">Home
                        <span class="fa fa-home"></span>
                    </a>
                    <a href="profile.php">Profile
                        <span class="fa fa-address-card"></span>
                    </a>
                    <a href="Apps.php">Apps
                        <span class="fa fa-tasks"></span>
                    </a>
                    <a href="HR.php" id="HR">Human Resources
                        <span id="HR" class="fa fa-address-card"></span>
                    </a>
                    <a href="logout.php">Log Out
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
        
        <div id="mainContent" align="center" style="margin-top:10%;">
            
            <h1>Employee successfully added!</h1>
            <h3>You will be redirected back to the Add/Remove Employee Form.</h3>
            <p><span id="counter">5</span></p>
            <script type="text/javascript">
            	function countdown () {
            		var i = document.getElementById("counter");
            		if (parseInt(i.innerHTML)<=1) {
            			location.href = 'HR.php';
					}
					i.innerHTML = parseInt(i.innerHTML)-1;
            	}
            	setInterval(function() {countdown(); }, 1000);
            </script>          
        </div>
    </body>
</html>

<style>
	#mainContent {
		color: white;
	}

	#counter {
		font-size: 50px;
	}

	h1 {
		font-weight: bold;
		color: #00c000;
	}
</style>