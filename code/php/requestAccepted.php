
<?php
$id = $_GET['id'];

$db=mysqli_connect("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error());
//-select  the database to use
$mydb=mysqli_select_db($db,"corporate_directory");

$sql = "SELECT * FROM application_request WHERE reqid = '" . $id . "'";

$result = mysqli_query($db,$sql);

while ($row = mysqli_fetch_array($result)) {
	$eid = $row['e_id'];
	$appid = $row['app_id'];
	$query = "INSERT INTO application_access_log (appid, eid) VALUES ('" . $appid . "', '" . $eid . "')";
	if(!mysqli_query($db,$query)) {
		echo "Oh no!: " . mysqli_error($db);
	} else {
		echo "Access granted. <br>";
	}

	$clean = "DELETE FROM application_request WHERE reqid = '" . $id . "'";
	if(!mysqli_query($db, $clean)) {
		echo "Oh no!: " . mysqli_error($db);
	} else {
		echo "Request processed.";
		header("location:Admin.php");
	}
}
?>