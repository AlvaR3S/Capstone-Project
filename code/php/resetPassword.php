<?php
 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_DATABASE', 'corporate_directory');
 session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") { 
     $link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    if (!$link) {
        dir('There was a problem when trying to connect to the host. Please contact Tech Support. Error: ' . mysql_error());    
    }

    $db_selected = mysqli_select_db($link, "corporate_directory");

    if (!$link) {
        dir('There was a problem when trying to connect to the database. Please contact Tech Support. Error: ' . mysql_error());    
    }
   
   
   

    $password = mysqli_real_escape_string($link, $_POST['newPW']);
    $options = [
        'cost' => 11,
        'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
    ];

    $hashedpassword = password_hash($password, PASSWORD_BCRYPT);
    $verify = mysqli_real_escape_string($link, $_POST['verifyPW']);  

    if ($password == $verify)  {
        $sql = "UPDATE login SET pwd = '$hashedpassword' WHERE username = '" . $_SESSION['userPWchange'] . "'";
        //echo $sql;
        $res = mysqli_query($link, $sql);
        if ($res) {
            header("location:passwordChanged.php");
        }
        else {
            echo "u dun goofed";
        }

    }
    else {
        ?>
        <div class="pwd_match_err" style=center>
        <span class="fa fa-warning">
          <?php  
             //$error = "Your Login Name or Password is invalid";

             echo 'Passwords do not match. Please try again.
            </span>
            <span class="fa fa-warning"></span>';
    }
}
?>
        </div>
<html>
    <title>ACME Password Reset</title>
 
    
    <header>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../CSS/ProfilePage.css">
        <link rel="stylesheet" type="text/css" href="../CSS/StyleSheet.css">
        <link rel="stylesheet" type="text/css" href="../CSS/AboutPage.css">
        <script type="text/javascript" src="../js/ProfilePage.js"></script> 
        <script type="text/javascript" src="../js/Script.js"></script> <!--Links Script.js to this page-->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Makes Page Responsive -->
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">        
    </header>

    <body>
        
        <header class="topnav" role="banner">
            
            <nav class="topnav container" role="navigation">
                
                <div id="main">
                    <!--<span style="font-size:30px;cursor:pointer;" align=left onclick="openNav()">&#9776;</span>-->
                    <img src="../../assets/ACMElogo.png" alt="ACMElogo" style="width:100px;height:83px"></img>
                </div>
                
                
                <div id="myTopnav" class="topnav-list">
                    <a href="guestSearch.php">Home
                        <span class="fa fa-home"></span>
                    </a>
                    <a href="AboutPage.php">About
                        <span class="fa fa-question-circle"></span>
                    </a>                    
                    <a href="SSO.php">Login
                        <span class="fa fa-unlock-alt"></span>
                    </a>
                </div>
                <hr id="topHR" noshade>
                <hr id="topHR" noshade>
                
                
            </nav>
    
        </header>

            <div class="resetPW" style=center>
            <form name="frmReset" id="frmReset" method="post" action="resetPassword.php">
                <h1 style="text-align: center;">Enter your new password:</h1>
                    <div class="field-group">                        
                        <div style="margin-left: 24%">Password</div>
                        <div style="margin-left: 24%; width: 80%"><input type="password" name="newPW" id="newPW" pattern=".{6,}" class="input-field" required></div>
                        <div style="margin-left: 24%">Re-type Password</div>
                        <div style="margin-left: 24%; width: 80%"><input type="password" name="verifyPW" id="verifyPW" pattern=".{6,}" class="input-field" required></div>
                    </div>                                                
                    
                    <div class="field-group">
                        <div><button type="submit" name="change-password" id="change-password" value="Submit" class="form-submit-button">Submit</div>
                    </div>  
                </form>
            </div>
    </body>
</html>
<style>

    .resetPW {
        margin-top: 15%;
        background-color: white;
        padding: 2%;
        border-radius: 8px;
        margin-left: 33%;
        width: 33%;
        position: relative;
        top: 30%;
        border: 1px solid #f44336;
    }


    #change-password {
        width: fit-content;
        margin-top: 5%;
        margin-bottom: -5%;
        padding: 3px;
        margin-left: 41%;
    }

    .pwd_match_err {
        position: relative;
        color: white;
        background-color: #f44336;
        width: 33%;
        text-align: center;
        margin-top: 80px;
        margin-bottom: -200px;
        font-size: 20px;
        border: 2px solid white;
        border-radius: 8px;
        margin-left: 560px
    }
</style>