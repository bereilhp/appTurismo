<html>
    <body>
<?php
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "madway";


// Create connection
$conn = new mysqli($servername, $username, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM place";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id_place"]. " - Desccription: ". $row["description_place"]. " Schedule: " . $row["schedule"]. " Icon_ID " . $row["id_icon"]. " Coordinates: " . $row["coordinates"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>