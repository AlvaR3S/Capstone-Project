<?php
	
	header("Content-type: application/json");

	$connect = mysqli_connect("localhost", "root", "", "corporate_directory");

	if(!$connect) {
		die('Could not connect: '.mysqli_error());
	} else {
		echo 'JSON.API';
	}

	$result = mysqli_query($connect, "SELECT * FROM employee");

	while($row = mysqli_fetch_assoc($result)) {
		$output[] = $row;
	}

	print(json_encode($output, JSON_PRETTY_PRINT));

	mysqli_close($connect);
	
?>