<?php
include('session.php');
include('nav_check.php');
include('admin_check.php');
?>

<html>

    <title>ACME Administrative Duties</title>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../CSS/StyleSheet.css">
        <link rel="stylesheet" type="text/css" href="../CSS/ProfilePage.css">
        <link rel="stylesheet" type="text/css" href="../CSS/Admin.css">
        <script type="text/javascript" src="../js/ProfilePage.js"></script> 
        <script type="text/javascript" src="../js/Script.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Makes Page Responsive -->
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">        
    </head>
    
    
    <body>

    
        <div class="adminHead" align=center style="font-size: 45px; margin-top:150px; color:white;">Admin Control Panel</div>
        <div class="containerApps" align=center>
            <h1> Choose an Action to Perform </h1>
            <hr style="border-top:1px solid darkred;">
                <div class="leftBtn">
                    <img class="leftBG" src="../../assets/Background/accesspic.jpg" style="width: 100%; height:100%; border-radius: 20px">
                    <div class="overlayLeft"><a onclick="window.location.href='Manager.php'">Manage Access Requests</a>
                    </div>
                </div>

                <div class="rightBtn">
                    <img class="rightBG" src="../../assets/Background/handshake.jpg" style="width: 100%; height: 100%; border-radius: 20px">
                    <div class="overlay"><a onclick="window.location.href='HR.php'">Add/Remove Employees</a>
                    </div>
                </div>

                <div class="clear"></div>

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
        font-size: 30px;
    }

    .clear {
        clear: both;
    }

    .rightBtn {
        width: 30%;
        height: 50%;
        margin-top: 5%;
        margin-bottom: 5%;
        margin-left: 5%;
        position: relative;
        border-radius: 12px;
        float: left;
    }

    .rightBG {
        width: 100%;
        height: 100%;
        opacity: 1;
        transition: .5s ease;
        border: 1.5px solid #f44336;
    }

    .content {
        position: absolute;
        top: 20%;
        left: 8%;
        right: 8%;
        bottom: 20%;
        height: auto;
        width: auto;
        font-size: 20px;
        color: black;
        overflow: hidden;
    }

    .content a {
        font-size: 14px;
        color: white;
        width: 30%;
        display: block;
        background-color: #f44336;
        text-align: center;
        padding: 2%;
        cursor: pointer;
        border-radius: 12px;

    }

    .rightBtn a {
        background: transparent;
        position: absolute;
        top: 40%;
        left: 0;
        height: 100%;
        width: 100%;
        cursor: pointer;
    }

    .overlay {
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        font-weight: bold;
    }

    .rightBtn:hover .rightBG{
        opacity: .2;
    }

    .rightBtn:hover .overlay {
        opacity: 1;
    }

    .leftBtn {
        width: 30%;
        height: 50%;
        margin-top: 5%;
        margin-bottom: 5%;
        margin-left: 17%;
        position: relative;
        border-radius: 12px;
        float: left;
    }

    .leftBG {
        width: 100%;
        height: 100%;
        opacity: 1;
        transition: .5s ease;
        border: 1.5px solid #f44336;
    }

    .contentLeft {
        position: relative;
        font-size: 22px;
        color: black;
        overflow: hidden;
    }

    .leftBtn a {
        background: transparent;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        cursor: pointer;
    }

    .overlayLeft {
        opacity: 0;
        position: absolute;
        top: 40%;
        left: 0;
        height: 100%;
        width: 100%;
        font-weight: bold;
    }

    .leftBtn:hover .leftBG{
        opacity: .2;
    }

    .leftBtn:hover .overlayLeft {
        opacity: 1;
    }

    button.rightButton {
        background-image: url("../../assets/Background/handshake.jpg");
        background-size: 600px 400px;
        background-position: 70% 50%;
    }

    .leftButton:hover {
        cursor: pointer;
    }  
    
    .rightButton:hover {
        cursor: pointer;
    }  

    .app {
        width: 185px;
        height: 185px;
        background-color: #f44336;
        color: white;
        border: 2px solid #f44336;
        border-radius: 8px;
        padding: 50px;
        transition-duration: 0.4s;
        margin: 5px;
        cursor: pointer;
    }
    
    .appcontainer {
        max-width: 50%;
        margin-left: 20%;
        margin-bottom: 5%;
    }

</style>
