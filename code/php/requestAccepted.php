
<?php
$id = $_GET['id'];

$db=mysqli_connect("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error());
//-select  the database to use
$mydb=mysqli_select_db($db,"corporate_directory");

$sql = "SELECT * FROM application_request WHERE reqid = '" . $id . "'";

$result = mysqli_query($db,$sql);

while ($row = mysqli_fetch_array($result)) {
	$eid = $row['e_id'];
	$appid = $row['app_id'];
	$query = "INSERT INTO application_access_log (appid, eid) VALUES ('" . $appid . "', '" . $eid . "')";
	if(!mysqli_query($db,$query)) {
		echo "Oh no!: " . mysqli_error($db);
	} else {
		//echo "Access granted. <br>";
	}

	$clean = "DELETE FROM application_request WHERE reqid = '" . $id . "'";
	if(!mysqli_query($db, $clean)) {
		echo "Oh no!: " . mysqli_error($db);
	} else {
		//echo "Request processed.";
	}
}
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
        
        <br>
        
        <div id="mainContent" align="center" style="margin-top:10%;">
            
            <h1>Request Accepted.</h1>
            <h3>You have accepted the employee's access request.</h3>
            <p id="counter-container">Redirecting in: <span id="counter">3</span></p>
            <script type="text/javascript">
            	function countdown () {
            		var i = document.getElementById("counter");
            		if (parseInt(i.innerHTML)<=1) {
            			location.href = 'Manager.php';
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
	#counter-container {
		font-size:50px;
		color: #000000;
	}
	#counter {
		font-size: 50px;
		color: #000000;
	}

	h1 {
		font-weight: bold;
		color: #00c000;
	}
	h3 {
		color: #000000;
	}
</style>