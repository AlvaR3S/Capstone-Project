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

$user = mysqli_real_escape_string($link, $_POST['delUsername']);

$sql = "DELETE FROM login WHERE username = '$user'";

if (!mysqli_query($link, $sql)) {
    die('Error: ' . mysqli_error($link)); 
} else {
	echo "employee credentials removed";
}

$query = "DELETE FROM employee WHERE username = '$user'";

if (!mysqli_query($link, $query)) {
    die('Error: ' . mysqli_error($link)); 
} else {
	echo "removed employee record";
}

mysqli_close($link);
header("location:HR.php");


?>