<?php
include("session.php");
include("nav_check.php");

            $db=mysqli_connect("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysqli_error());
            //-select  the database to use
            $mydb=mysqli_select_db($db,"corporate_directory");

if(isset($_POST['inputAcc'])) {
    if(isset($_POST['desiredApp'])) {
        if(preg_match("/^[  a-zA-Z]+/", $_POST['inputAcc'])) {
            $user = mysqli_real_escape_string($db, $_POST['inputAcc']);
            $app = mysqli_real_escape_string($db, $_POST['desiredApp']);
            $desc = mysqli_real_escape_string($db, $_POST['descAcc']);

            $queryUser = "SELECT eid from employee WHERE username = '" . $user . "'";
                
            $result = mysqli_query($db,$queryUser);
            if (!mysqli_query($db,$queryUser)) {
                echo "User query error: " . mysqli_error($db) . "<br>";
            }
            $row = mysqli_fetch_row($result);
 
            $queryApp = "SELECT appid from application WHERE description = '" . $app . "'";

            $res = mysqli_query($db,$queryApp);
            if (!mysqli_query($db,$queryApp)) {
                echo "App query error: " . mysqli_error($db) . "<br>";
            }            
            $r = mysqli_fetch_row($res);

            $sql = "INSERT INTO application_request (reqid, app_id, e_id, rd, description) VALUES (NULL, '" . $r[0] . "', '" . $row[0] . "', NULL, '" . $desc . "')";

            if (!mysqli_query($db, $sql)) {
                echo "something is wrong..." . mysqli_error($db);

            }
        }
    }
}
?>
<html>

    <title>ACME Access Request</title>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../CSS/StyleSheet.css">
        <link rel="stylesheet" type="text/css" href="../CSS/ProfilePage.css">
        <script type="text/javascript" src="../js/ProfilePage.js"></script> 
        <script type="text/javascript" src="../js/Script.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Makes Page Responsive -->
    </head>
    
    
    <body>
   
        
        <div id="mainContent" align="center" style="margin-top:10%;">
            
            <h1>Request sent!</h1>
            <h3>We will notify you when access has been granted.</h3>
            
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
