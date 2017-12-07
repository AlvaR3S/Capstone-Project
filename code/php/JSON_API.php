




<?php
	
	
	// //fetch.php
		if(isset($_POST["id"]))
		{
		 $connect = mysqli_connect("localhost", "root", "", "corporate_directory");
		 $query = "SELECT * FROM employee WHERE id = '".$_POST["eid"]."'";
		 $result = mysqli_query($connect, $query);
		 while($row = mysqli_fetch_array($result))
		 {
		  $data["username"] = $row["username"];
		  $data["firstname"] = $row["firstname"];
		  $data["streetAddress"] = $row["streetAddress"];
		  $data["email"] = $row["email"];
		  $data["dob"] = $row["dob"];
		 }

	 	echo json_encode($data);
	}










		// header("Content-type: application/json");

		// $connect = mysqli_connect("localhost", "root", "", "corporate_directory");

		// if(!$connect) {
		// 	die('Could not connect: '.mysqli_error());
		// } else {
		// 	echo 'JSON.API';
		// }

		// $result = mysqli_query($connect, "SELECT * FROM employee");

		// while($row = mysqli_fetch_assoc($result)) {
		// 	$output[] = $row;
		// }

		// print(json_encode($output, JSON_PRETTY_PRINT));

		// mysqli_close($connect);

	
?>



