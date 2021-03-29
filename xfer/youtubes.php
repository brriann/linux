<?php
$servername = "127.0.0.1";
$username = "NOCOMMIT";
$password = "NOCOMMIT";
$database = "lampdb";

print_r($_SERVER);

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Id, VidName, VidUrl FROM youtubes";
$result = $conn->query($sql);

if (mysqli_num_rows($result)) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["Id"]. " - Name: " . $row["VidName"]. " - Url: " . $row["VidUrl"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
