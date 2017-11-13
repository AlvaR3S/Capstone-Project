<?php
$sqlHR = "select tid from employee where username = '" . $login_session . "'";
$hr = mysqli_query($db,$sqlHR);
$rowHR = mysqli_fetch_assoc($hr);
$login_HR = $rowHR['tid'];
if ($login_HR != 3){ 
   echo '<BODY onLoad="isNotHR()">';
}

$sqlAdmin = "select tid from employee where username = '" . $login_session . "'";
$admin = mysqli_query($db,$sqlAdmin);
$rowAdmin = mysqli_fetch_assoc($admin);
$login_admin = $rowAdmin['tid'];
if ($login_admin != 3){ 
   echo '<BODY onLoad="isNotAdmin()">';
}
?>