<?php
include('session.php');
include('nav_check.php');
include('admin_check.php');
?>

<html>

    <title>ACME Admin</title>
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
    </head>
    
    
    <body>

    
        <div class="adminHead" align=center style="font-size: 45px; margin-top:150px; color:white;">Admin Control Panel</div>
        <div class="containerApps" align=center>
            <h1> Choose an Action to Perform </h1>
            <hr style="border-top:1px solid darkred;">
                <!--button class="leftButton" onclick="window.location.href='Manager.php'">
                    Handle Access Requests
                </button>

                <button class="rightButton" onclick="window.location.href='HR.php'">
                    Add/Remove Employee
                </button-->
                <div class="leftBtn">
                    <img class="leftBG" src="../../assets/Background/accesspic.jpg" style="border-radius: 20px">
                    <div class="overlayLeft">
                        <div class="contentLeft">
                            <br>Handle Access Requests<br><br><a onclick="window.location.href='Manager.php'"">Go</a>
                        </div>
                    </div>
                </div>

                <div class="rightBtn">
                    <img class="rightBG" src="../../assets/Background/handshake.jpg" style="border-radius: 20px">
                    <div class="overlay">
                        <div class="content">
                            <br>Add/Remove Employee<br><br><a onclick="window.location.href='HR.php'"">Go</a>
                        </div>
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
        width:300px;
        margin-top: 15px;
        margin-bottom: 15px;
        margin-right: 75px;
        position: relative;
        border-radius: 12px;
        float: right;
    }

    .rightBG {
        width: 285px;
        height: 300px;
        opacity: 1;
        transition: .5s ease;
        border: 1.5px solid #f44336;
    }

    .content {
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 24px;
        color: black;
        overflow: hidden;
    }

    .content a {
        font-size: 18px;
        color: white;
        width: 75px;
        display: block;
        background-color: #f44336;
        text-align: center;
        padding: 10px;
        cursor: pointer;
        border-radius: 12px;

    }

    .overlay {
        opacity: 0;
    }

    .rightBtn:hover .rightBG{
        opacity: .2;
    }

    .rightBtn:hover .overlay {
        opacity: 1;
    }

    .leftBtn {
        width:300px;
        margin-top: 15px;
        margin-bottom: 15px;
        margin-left: 75px;
        position: relative;
        border-radius: 12px;
        float: left;
    }

    .leftBG {
        width: 285px;
        height: 300px;
        opacity: 1;
        transition: .5s ease;
        border: 1.5px solid #f44336;
    }

    .contentLeft {
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 24px;
        color: black;
        overflow: hidden;
    }

    .contentLeft a {
        font-size: 18px;
        color: white;
        width: 75px;
        display: block;
        background-color: #f44336;
        text-align: center;
        padding: 10px;
        cursor: pointer;
        border-radius: 12px;

    }

    .overlayLeft {
        opacity: 0;
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
        margin-left: 25%;
        margin-bottom: 5%;
    }

</style>
