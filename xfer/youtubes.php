<?php
$servername = "127.0.0.1";
$username = "NOCOMMIT"; 
$password = "NOCOMMIT"; 
$database = "lampdb";

// output server info
print_r($_SERVER);
echo "<br>" . "<br>" . "<br>" . "<br>"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// handle query parameters
if (isset($_GET["url"]) && isset($_GET["name"])) {
  $url = $_GET["url"];
  $name = $_GET["name"];
  echo "url: " . $url . "<br>";
  echo "name: " . $name . "<br>";
  echo "<br>" . "<br>" . "<br>"; 
  
  $fullUrl = "https://www.youtube.com/watch?v=" . $url;
  echo "fullUrl: " . $fullUrl . "<br>";
  
  $insertSql = "INSERT INTO `youtubes` (`VidName`, `VidUrl`, `DateAdded`) VALUES ('" . $name . "', '" . $fullUrl . "', NULL)";
  echo "insertSql: " . $insertSql . "<br>";
//   if ($conn->query($insertSql) === TRUE) {
//     echo "Inserted record from queryString params." . "<br>" . "<br>";
//   } else {
//       echo "Error inserting record from queryString" . "<br>" . "<br>";
//   }
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
