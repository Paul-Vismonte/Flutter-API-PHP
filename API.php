<?php

require_once "dbcon.php";

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
	$data[] = $row;
  }
} else {
  echo "0 results";
}

echo $jsonData = json_encode($data);
$conn->close();
?>