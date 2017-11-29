<?php
include('session.php');
include('nav_check.php');
include('HR_check.php');
?>

<html>

    <title>ACME Human Resources</title>
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
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Makes Page Responsive -->
    </head>
    
    
    <body>

        
        <div class="title">
            
            <h1 style="-webkit-text-stroke-color: black; -webkit-text-stroke-width: .75px; text-shadow: 2px 2px black; color: white; font-size: 40px;">Add or Remove an Employee</h1>
            
            
        </div>
        
        <div class="employeeForms">
            <div id="employeeFormAdd">
                <h1 style="text-align: center; font-size: 25px; margin-top: 15px">Enter information to add a new Employee to add to ACME</h1>
                <hr style="border-top:1px solid darkred;">
                <form method="post" action="HR-Processing.php" id="addEmployee" enctype="multipart/form-data">
                    <div class="inputAlign">
                        <h4 style="margin-top: 30px;">Employee Information*</h4>
                        <input type="text" pattern="[A-Za-z]{1,15}" name="firstname" placeholder="Enter First Name" required>
                        <input type="text" pattern="[A-Za-z]{1,15}" name="lastname" placeholder="Enter Last Name" required>
                        <input style="margin-top: 10px; width: 20%" type="date" name="dob" required>
                        <input style="margin-top: 10px; width: 35%;" type="text" pattern="\d*" maxlength="12" name="phone" placeholder="e.g. 7173457575" required>
                        <input style="width: 7%;" type="text" pattern="\d*" maxlength="3" name="ext" placeholder="Ext" required>   
                        <select style="height: 40px; width: 26.5%">
                            <option value="" disabled selected>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                            <option value="Private">Prefer Not To Say</option>
                        </select>
                        <h6 style="margin:0;">Date of Birth</h6> 
						<h6 style="margin-left: 21%;margin-top: -24px;">Phone Number</h6> 
						<h6 style="margin-left: 57%;margin-top: -34px;">Ext</h6>
						
                        <select style="height:40px; width: 30%" name="location">
                            <option value = "" disabled selected>Location</option>
                            <option value = "1">New York</option>
                            <option value = "2">Chicago</option>
                            <option value = "3">Los Angeles</option>
                            <option value = "4">Tokyo</option>
                            <option value = "5">Paris</option>
                            <option value = "6">London</option>
                        </select>
                        <select style="height:40px; width: 30%" name="title">
                            <option value = "" disabled selected>Position</option>
                            <option value = "1">CEO/Board</option>
                            <option value = "2">Administrator</option>
                            <option value = "3">HR</option>
                            <option value = "4">Manager</option>
                            <option value = "5">Employee</option>
                        </select>
                        <select style="height:40px; width: 30%"" name="department">
                            <option value = "" disabled selected>Department</option>
                            <option value = "1">Marketing</option>
                            <option value = "2">Sales</option>
                            <option value = "3">Plant and Infrastructure</option>
                            <option value = "4">Information Technology</option>
                            <option value = "5">Product Development</option>
                            <option value = "6">Human Resources</option>
                        </select>
                        <h4 style="margin-top: 22px;">Home Address*</h4>
                        <input style="width: 90.9%;" type="text" name="address" placeholder="Enter Home Address" required>
                        <input style="margin-top: 10px; width: 25%;" type="text" pattern="[A-Za-z ]{1,15}" name="country" placeholder="Enter Country" required>
						<input style="margin-top: 10px; width: 25%;" type="text" pattern="[A-Za-z ]{1,15}" name="state" placeholder="Enter State (if applicable)">
                        <input style="margin-top: 10px; width: 20%;" type="text" pattern="[A-Za-z ]{1,15}" name="city" placeholder="Enter City" required>
                        <input style="margin-top: 10px; width: 19.3%;"" type="text" pattern="\d*" name="zip" placeholder="Enter Zip Code" required>
                        <h6 style="margin:0;">Country</h6> 
						<h6 style="margin-left: 25.5%;margin-top: -24px;">State</h6> 
						<h6 style="margin-left: 51%;margin-top: -34px;">City</h6> 
						<h6 style="margin-left: 72%;margin-top: -34px;">Zip</h6>
						
                        <h4 style="margin-top: 22px;">Login Information*</h4>
                        <input type="text" name="username" pattern="[A-Za-z0-9]{6,}" placeholder="Enter New Username" required>
                        <input type="password" name="password" pattern=".{6,}" placeholder="Enter New Password" required>
                        <input type="password" name="verifypw" pattern=".{6,}" style="margin-left: 0px; margin-top: 5px" placeholder="Re-enter Password" required>
                        <!-- profile pic code -->
						<input type="file" name="photo" style="margin-left: 50px; margin-top: 5px" placeholder="Select image to upload:"> 
						<input style="width: 70%; margin-top: 10px;" type="text" name="email" placeholder="Enter Email Address" required>
                        <input style="width: 20%;" type="date" name="hiredate" required>
                        <h6 style="margin:0;">Email Address</h6> <h6 style="margin-top: -24px;margin-left: 71%;">Hire Date</h6> 
                        
                        <br><br> <button class="employeeAdd" type="submit" name="submit">Create</button>
                    </div>
                </form>
            </div>  
            <div id="employeeFormRemove">   
                <h1 style="text-align: center; font-size: 25px;">Enter the Employee you would like to remove from ACME</h1> 
                <hr style="border-top:1px solid darkred;">        
                <form style="margin-left: 130px;" method="post" action="HR-remove.php" id="removeEmployee">
                    <h4 style="margin-top: 30px;">Employee Information*</h3>
                    <input type="text" name="delUsername" placeholder="Enter Employee Username">
                    <input style="width: 120px;" type="text" name="todaysdate" placeholder="(MM/DD/YY)">
                    <h6 style="margin:0;">Username</h6> <h6 style="margin-top: -24px;margin-left: 46%;">Today's Date</h6>
                    <br> <br> <button class="employeeRemove" type="submit" name="remove">Remove</button>
                </form>
            </div>
              
        </div>
             
 
      
        <!-- Footer -->
        <div class="footer">
            <div class="footer-contact">
                <h4>Contact</h4>
                <a href="">contact@acme.com</a>
            </div>
            <div class="footer-apps">
                <h4>Applications</h4>
                <a href="app_check.php?id=1">Skype for Business</a><br>
                <a href="app_check.php?id=2">Salesforce.com</a><br>
                <a href="app_check.php?id=3">Assets Management</a><br>
                <a href="app_check.php?id=4">Outlook</a><br>
                <a href="app_check.php?id=5">Teamcity</a><br>
                <a href="app_check.php?id=6">Artifactory</a>
            </div>
        </div>
        
    </body>

</html>
<style>

    input[type=date]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        display: none;
    }
</style>




