<html>

    <title>My Applications</title>
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
    <!-- Navbar -->
        
        <header class="topnav" role="banner">
            
            <nav class="topnav container" role="navigation">
    
                
                <div id="main">
            	    <!--<span style="font-size:30px;cursor:pointer;" align=left onclick="openNav()">&#9776;</span>-->
            	    <img src="../../assets/ACMElogo.png" alt="ACMElogo" style="width:100px;height:83px"></img>
                </div>
                
                
                <div id="myTopnav" class="topnav-list">
                    <a href="Search.php">Home
                        <span class="fa fa-address-card"></span>
                    </a>
                    <a href="profile.php">Profile
                        <span class="fa fa-question-circle"></span>
                    </a>
                    <a href="Apps.php">Apps
                        <span class="fa fa-tasks"></span>
                    </a>
                    <form class="topnav-list-search">
                        <input type="text" id="search" name="search" placeholder="&#128269; Search...">
                    </form>                
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
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
        
        <!-- Search form -->    
        <div id="main" class="main" align="center" style="margin-top:10%; font-family: 'Montserrat', sans-serif;">
            
            <h1 style="float:left; margin-left:10%;">Employees</h1><br>
           
           
        </div>
        <div>
            <?php
                if(isset($_POST['submit'])){
                    if(isset($_GET['go'])){
                        if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){
                            $name=$_POST['name'];
                            //connect  to the database
                            $db=mysqli_connect("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error());
                            //-select  the database to use
                            $mydb=mysqli_select_db($db,"corporate_directory");
                            //-query  the database table
                            $sql="SELECT firstname, lastname FROM employee WHERE firstname LIKE '%" . $name .  "%' OR lastname LIKE '%" . $name ."%'";
                            //-run  the query against the mysql query function
                            $result=mysqli_query($db,$sql);
                            //-create  while loop and loop through result set
                            while($row=mysqli_fetch_array($result)) {
                                  echo $row['firstname'] . '<br>';
                                  echo $row['lastname'] . '<br>';
                            }
                        }
                        else{
                            echo  "<p>Please enter a search query</p>";
                        }
                    }
                }
            ?>
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
    @import url('https://fonts.googleapis.com/css?family=Montserrat');
    .search {
        padding: 20px;
    }
    
    .short {
        padding: 20px;
        width: 140px;
        cursor: pointer;
    }
    
    .main {
        margin-bottom: 13%;
    }
</style>
