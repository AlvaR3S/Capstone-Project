<?php

 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_DATABASE', 'corporate_directory');
 
 $link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if (!$link) {
    dir('There was a problem when trying to connect to the host. Please contact Tech Support. Error: ' . mysql_error());    
}

$db_selected = mysqli_select_db($link, "corporate_directory");

if (!$link) {
    dir('There was a problem when trying to connect to the database. Please contact Tech Support. Error: ' . mysql_error());    
}

$firstname = mysql_real_escape_string($_POST['firstname']);
$lastname = mysql_real_escape_string($_POST['lastname']);
$dob = mysql_real_escape_string($_POST['dob']);
$phone = mysql_real_escape_string($_POST['phone']);
$ext = mysql_real_escape_string($_POST['phone']);
// gender? 
$address = mysql_real_escape_string($_POST['address']);
$country = mysql_real_escape_string($_POST['country']);
$city = mysql_real_escape_string($_POST['city']);
$zip = mysql_real_escape_string($_POST['zip']);
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$email = mysql_real_escape_string($_POST['email']);
$hiredate = mysql_real_escape_string($_POST['hiredate']);



$sql = "INSERT INTO employee (username, firstname, lastname, dob, hireDate, homePhone, workExt, email, streetAddress, city_town, state, country, zip) 
VALUES ('$username', '$firstname', '$lastname', '$dob', '$hiredate', '$phone', '$ext', '$email', '$address', '$city', '$state', '$country', '$zip')";

if (!mysql_query($sql)) {
    die('Error: ' . mysql_error()); 
}

?>