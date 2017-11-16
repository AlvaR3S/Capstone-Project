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
echo $firstname . "<br>";
$lastname = mysqli_real_escape_string($link, $_POST['lastname']);
echo $lastname . "<br>";
$dob = mysqli_real_escape_string($link, $_POST['dob']);
$date = strtotime($dob);
$birthdate =  date("Y-m-d",$date);
echo $birthdate . "<br>";
$phone = mysqli_real_escape_string($link, $_POST['phone']);
echo $phone . "<br>";
$ext = mysqli_real_escape_string($link, $_POST['ext']);
echo $ext . "<br>";
// gender? 
//reportsTo
//department
$location = mysqli_real_escape_string($link, $_POST['location']);
echo $location . "<br>";
$title = mysqli_real_escape_string($link, $_POST['title']);
echo $title . "<br>";
$dept = mysqli_real_escape_string($link, $_POST['department']);
echo $dept . "<br>";
$address = mysqli_real_escape_string($link, $_POST['address']);
echo $address . "<br>";
$country = mysqli_real_escape_string($link, $_POST['country']);
echo $country . "<br>";
$state = mysqli_real_escape_string($link, $_POST['state']);
echo $state . "<br>";
$city = mysqli_real_escape_string($link, $_POST['city']);
echo $city . "<br>";
$zip = mysqli_real_escape_string($link, $_POST['zip']);
echo $zip . "<br>";
$username = mysqli_real_escape_string($link, $_POST['username']);
echo $username . "<br>";
$password = mysqli_real_escape_string($link, $_POST['password']);
echo $password . "<br>";
$email = mysqli_real_escape_string($link, $_POST['email']);
echo $email . "<br>";
$hiredate = mysqli_real_escape_string($link, $_POST['hiredate']);
$hired = strtotime($hiredate);
$joined = date("Y-m-d", $hired);
echo $joined . "<br>";


$sql = "INSERT INTO employee (oid, tid, did, username, firstname, lastname, dob, hireDate, homePhone, workExt, email, streetAddress, city_town, state, country, zip) 
VALUES ('$location', '$title', '$dept', '$username', '$firstname', '$lastname', '$birthdate', '$joined', '$phone', '$ext', '$email', '$address', '$city', '$state', '$country', '$zip')";

if (!mysqli_query($link, $sql)) {
    die('Error: ' . mysqli_error($link)); 
} else {
	echo "1 record added to employee";
}

$query = "INSERT INTO login (username, pwd)
		  VALUES ('$username', '$password')";


if (!mysqli_query($link, $query)) {
	die('Error: ' . mysqli_error($link));
} else {
	echo "1 record added to login";
}


mysqli_close($link);
header("location:HR.php");

?>