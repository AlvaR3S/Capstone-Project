<?php
include("sessions.php");




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
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">        
    </head>
    <body>

        
        <div id="mainContent" align="center" style="margin-top:10%;">
            
            <h1>Employee successfully modified.</h1>
            <h3>You will be redirected back to the Modify Employee page.</h3>
            <p><span id="counter">5</span></p>
            <script type="text/javascript">
            	function countdown () {
            		var i = document.getElementById("counter");
            		if (parseInt(i.innerHTML)<=1) {
            			location.href = 'HR_Modify.php';
					}
					i.innerHTML = parseInt(i.innerHTML)-1;
            	}
            	setInterval(function() {countdown(); }, 1000);
            </script>          
        </div>
    </body>
</html>

<style>

	#counter {
		font-size: 50px;
	}

	h1 {
		font-weight: bold;
		color: #00c000;
	}
</style>