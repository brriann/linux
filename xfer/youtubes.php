<?php
$servername = "locahost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Id, VidName, VidUrl FROM youtubes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["Id"]. " - Name: " . $row["VidName"]. " - Url: " . $row["VidUrl"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>