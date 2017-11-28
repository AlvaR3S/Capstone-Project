<?php
include("session.php");
include("nav_check.php");
?>
<html>

    <title>ACME Access Denied</title>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../CSS/StyleSheet.css">
        <link rel="stylesheet" type="text/css" href="../CSS/ProfilePage.css">
        <link rel="stylesheet" type="text/css" href="../CSS/AccessDenied.css">
        <script type="text/javascript" src="../js/ProfilePage.js"></script> 
        <script type="text/javascript" src="../js/Script.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Makes Page Responsive -->
    </head>
    
    
    <body>

        <div id="main" class="main" align="center" style="margin-top:7%;">
            <h1>ACCESS DENIED</h1>
            <h2>It appears you do not have access to this application...</h2>
            <hr noshade>
        </div>
        <div id="message" align="center">
            <h2 id="applyAccess">Apply for access down below.</h2>
            <!-- ** QUESTION ** => Input username or email address for access thats sent to admin inbox?
                            ALSO => user should already be logged in, to access apps page,
                                    when a guest clicks on apps it takes them to log in page-->
            <form method="post" action="AccessRequest.php?go" id="accessForm">
                
                <div class="styled-select blue semi-square">
                <!-- THESE SHOULD BE TAKEN OFF THE DATABASE-->
                    <select name="desiredApp" id="desiredApp" required="">
                        <option value="" color="white;" disabled selected>Pick an application</option>
                        <option value='Skype'>Skype</option>
                        <option value='Salesforce'>Salesforce</option>
                        <option value='Assets'>Assets Management</option>
                        <option value='Outlook'>Outlook</option>
                        <option value='Teamcity'>Teamcity</option>
                        <option value='Artifactory'>Artifactory</option>
                        
                        <!-- PSUEDO SQL CODE 
                        INSERT INTO application_request (appid, eid, description) 
                            values ((SELECT application.appid FROM application WHERE application.description = HTML ARTIFICACT), 
                            (SELECT employee.eid FROM employee where employee.username = HTML ARTIFACT), 
                            HTML DESCRIPTION); 
                        -->
                        
                    </select>
                </div>
                
                <div class="inputAndButton">
                    <input class="inputAccess" type="text" placeholder="Enter email or username..." name="inputAcc" required> 
                    <button class="buttonAccess" type="submit" name="submitAcc">Submit</button> <br> <br>
                    <textarea class="inputDescription" type="text" placeholder="Enter what you would like to access..." name="descAcc"></textarea>
                </div>
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
    .inputAccess {
        padding: 2%;
        margin-right: 2%;
        width: 67%;
        
    }
    
    .buttonAccess {
        padding: 2%;
        width: 17%;
        cursor: pointer;
    }
</style>
