<?php
    
$mysqli = new mysqli("localhost", "root", "", "corporate_directory");

 $result = $mysqli->query("SELECT * FROM employee");

while($row = $result->fetch_assoc()){
echo $row['firstname'] . '<br>';
}

?>
