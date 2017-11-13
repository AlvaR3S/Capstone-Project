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

$firstname = mysqli_real_escape_string($link, $_POST['firstname']);
$lastname = mysqli_real_escape_string($link, $_POST['lastname']);
$dob = mysqli_real_escape_string($link, $_POST['dob']);
$phone = mysqli_real_escape_string($link, $_POST['phone']);
$ext = mysqli_real_escape_string($link, $_POST['phone']);
// gender? 
$address = mysqli_real_escape_string($link, $_POST['address']);
$country = mysqli_real_escape_string($link, $_POST['country']);
//state 
$city = mysqli_real_escape_string($link, $_POST['city']);
$zip = mysqli_real_escape_string($link, $_POST['zip']);
$username = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$hiredate = mysqli_real_escape_string($link, $_POST['hiredate']);



$sql = "INSERT INTO employee (username, firstname, lastname, dob, hireDate, homePhone, workExt, email, streetAddress, city_town, state, country, zip) 
VALUES ('$username', '$firstname', '$lastname', '$dob', '$hiredate', '$phone', '$ext', '$email', '$address', '$city', null, '$country', '$zip')";

if (!mysqli_query($link, $sql)) {
    die('Error: ' . mysql_error()); 
}

echo "1 record added";

mysqli_close($link);

?>