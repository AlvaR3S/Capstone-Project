<?php
session_start();
?>
<html>

    <title>Administrative Duties</title>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../CSS/StyleSheet.css">
        <link rel="stylesheet" type="text/css" href="../CSS/ProfilePage.css">
        <link rel="stylesheet" type="text/css" href="../CSS/Admin.css"> 
        <link rel="stylesheet" href="../js/jquery.custom/jquery-ui.min.css">
        <script src="../js/jquery.custom/external/jquery/jquery.js"></script>
        <script src="../js/jquery.custom/jquery-ui.min.js"></script>       
        <script type="text/javascript" src="../js/ProfilePage.js"></script> 
        <script type="text/javascript" src="../js/Script.js"></script>
        <script type="text/javascript" src="../js/SearchResults.js"></script>        
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Makes Page Responsive -->
        <script type="text/javascript">

        </script>
    </head>
    
    
    <body>
    <!-- Navbar -->
        
        <header class="topnav" role="banner">
            
            <nav class="topnav container" role="navigation">
                <div id="dialog" style="display:none" align="center">I am testing the dialogue box.</div>
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
                    <a href="SSO.php">Log Out
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
            
            <h1>Administrative Duties</h1>
            <h3>You have the following requests awaiting approval:</h3>
            
        </div>
        <div class="table">
            <?php
            $db=mysqli_connect("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error());
            //-select  the database to use
            $mydb=mysqli_select_db($db,"corporate_directory");
            $sql = "SELECT * FROM application_request";
            $result = mysqli_query($db,$sql);
            if (mysqli_num_rows($result) > 0) {
            ?>
            <table class="requests" id="myTable">
                <tr>
                    <th onclick="sortTable(0)">Name</th>
                    <th onclick="sortTable(1)">Application Requested</th>
                    <th onclick="sortTable(2)" style="width: 30%">Reason for Request</th>
                    <th onclick="sortTable(3)">Requested</th>
                    <th style="width:20%; text-align: center;">Actions</th>
                </tr>
            <?php
                $i=1;
                while ($row=mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td>                                    
                        <?php 
                            $sql="SELECT firstname, lastname FROM employee WHERE employee.eid = ". $row['e_id'];
                            $res=mysqli_query($db,$sql);
                            $r=mysqli_fetch_array($res);
                            echo $r['firstname'] . '&nbsp' . $r['lastname'];
                        ?>
                    </td>
                    <td>                                    
                        <?php 
                            $sql="SELECT description FROM application WHERE application.appid = ". $row['app_id'];
                            $res=mysqli_query($db,$sql);
                            $r=mysqli_fetch_array($res);
                            echo $r['description'];
                        ?>
                    </td>
                    <td style="text-transform: none;"><?php echo $row['description'];?></td>
                    <td><?php 
                            $time = strtotime($row['rd']);
                            echo date("M j Y  g:m:s",$time);
                        ?>
                    </td> 
                    <td><button id="Accept">Accept</button><button id="Decline">Decline</button></td> 
                </tr>
            <?php
                    $i++;            
                }    
            }else {
                echo "You have no outstanding requests to process.";
            }
            ?>
            </table>
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

<style>
    #pendingRequests {
        margin-top: 3%;
        text-align: center;
    }

    button {
        padding:5px;
        margin:4px;
        width:45%;
    }

    .request th {
        text-align: center;
    }

</style>
