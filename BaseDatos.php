<?php

//Connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "madway";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
          echo "Name: " . $row["name"]. " - Email: " . $row["email"]. " - Password " . $row["password"]. "<br>";
  }
} 
else {
  echo "0 results";
}

$conn->close();

?>

