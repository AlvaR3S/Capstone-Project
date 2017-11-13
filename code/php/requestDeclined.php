
<?php
$id = $_GET['id'];

$db=mysqli_connect("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error());
//-select  the database to use
$mydb=mysqli_select_db($db,"corporate_directory");

$sql = "SELECT * FROM application_request WHERE reqid = '" . $id . "'";

$result = mysqli_query($db,$sql);

while ($row = mysqli_fetch_array($result)) {
	echo "Request Denied!";
	echo "<br>";	
	echo $row['reqid'];
	echo "<br>";
	echo $row['app_id'];
	echo "<br>";
	echo $row['e_id'];
	echo "<br>";	
}
 
$db=mysqli_connect("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error());
//-select  the database to use
$mydb=mysqli_select_db($db,"corporate_directory");

?>