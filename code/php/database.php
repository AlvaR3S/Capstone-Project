<?php
$db_host = "10.10.7.169";
$db_name = "Corporate_Directory";
$username = "postgres";
$password = "password";
$dbconn = pg_connect("host=$db_host dbname=$db_name user=$username password=$password")
    or die('Could not connect: ' . pg_last_error());

$query = 'SELECT * FROM Employee';
$result = pg_query($query) or die('Query failed' . pg_last_error());
?>