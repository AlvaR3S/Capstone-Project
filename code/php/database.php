<?php
    
$mysqli = new mysqli("10.10.7.168", "root", "password", "Corporate_Directory");

 $result = $mysqli->query("SELECT * FROM title");

while($row = $result->fetch_assoc()){
echo $row['posname'] . '<br>';
}

?>
