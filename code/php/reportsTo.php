<?php
include('session.php');
include('nav_check.php');
include('manager_check.php');
?>
<html>

    <title>ACME Manager Duties</title>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../CSS/StyleSheet.css">
        <link rel="stylesheet" type="text/css" href="../CSS/ProfilePage.css">
        <link rel="stylesheet" type="text/css" href="../CSS/Manager.css">  
        <link rel="stylesheet" type="text/css" href="../CSS/SearchResult.css">            
        <script type="text/javascript" src="../js/ProfilePage.js"></script> 
        <script type="text/javascript" src="../js/Script.js"></script>
        <script type="text/javascript" src="../js/SearchResults.js"></script>        
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

        
        <div id="mainContent" align="center" style="margin-top:150px;">
            
            <h1 style="-webkit-text-stroke-color: black; -webkit-text-stroke-width: .75px; text-shadow: 2px 2px black; color: white; font-size: 40px;">Your Team</h1>
            <h3 style="-webkit-text-stroke-color: black; -webkit-text-stroke-width: .25px; color:white; font-size: 20px;">Below is a list of employees who report to you.</h3>
            
        </div>
        <!--div>
            <form method="post" action="reportsTo.php?go" id="managerForm" style="margin-top: 2%;">
                <select name="managerSelect" id="managerSelect" style="text-transform: capitalize;">
                    <option value = "" disabled selected>Manager</option>
                        <?php 
                            $result = mysqli_query($db, "SELECT eid, firstname, lastname FROM employee");
                            while ($row = $result->fetch_assoc()) {

                                unset($eid, $firstname, $lastname);
                                $eid = $row['eid'];
                                $firstname = $row['firstname']; 
                                $lastname = $row['lastname'];
                                echo '<option style ="text-transform:capitalize; value"="'.$eid.'">'.$firstname." ".$lastname.'</option>';
                            }
                        ?>
                </select>
                <button class="short" type="submit" name="submit">
                    <span class="fa fa-search"></span> Search
                </button>
            </form>
        </div-->
        <div class="table">
            <?php
            $db=mysqli_connect("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error());
            $mydb=mysqli_select_db($db,"corporate_directory");                        
            $query = "SELECT eid FROM employee WHERE username = '" . $login_session . "'";
            $res = mysqli_query($db, $query);
            $rows = mysqli_fetch_array($res);
            $managerID = $rows['eid'];
            //echo $managerID;
            //-select  the database to use
            $sql = "SELECT firstname, lastname, workExt, reportsTo FROM employee"; //WHERE reportsTo = '" . $managerID . "'";
            $result = mysqli_query($db,$sql);
            if (mysqli_num_rows($result) > 0) {
            ?>
            <table class="employee" id="myTable">
                <tr>
                    <th onclick="sortTable(0)" style="width: 10%;">Name</th>
                    <th onclick="sortTable(1)" style="width: 3%;">Ext.</th>                    
                    <th onclick="sortTable(2)" style="width: 5%">Reports To</th>
                </tr>
            <?php
                $i=1;
                while ($row=mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td style="text-align: center; text-transform:capitalize;"><?php echo $row['firstname'] . '&nbsp' . $row['lastname'];?></td>  
                    <td style="text-align: center;"><?php echo $row['workExt'];?></td>                                        
                    <td style = "text-align: center;">                                    
                        <?php 
                            $quest = "SELECT firstname, lastname FROM employee WHERE eid = '" . $row['reportsTo'] . "'";
                            $res = mysqli_query($db, $quest);
                            $r = mysqli_fetch_array($res);
                            echo $r['firstname'] . '&nbsp' . $r['lastname'];?>
                    </td>

                </tr>
            <?php
                    $i++;            
                }    
            }else {
                echo "<br>" . "<p style='text-align:center; font-size:22px; -webkit-text-stroke-color: black; -webkit-text-stroke-width: .25px; color: #f44336;'><br><br>You have no employees reporting to you.</p>";
            }
            ?>
            </table>
        </div> 
        <!-- Footer -->
        <div class="footer"">
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
    .table {
        margin-left: 35%;
        margin-right: 5%;
        margin-bottom: 10%;
        overflow-x: hidden;
        width: 30%;
    }

    #myTable {
        margin-top: 3%;
        text-align: center;
    }

    button {
        padding:5px;
        margin:4px;
        width:30%;
    }

    .employee th {
        text-align: center;
    }

</style>
