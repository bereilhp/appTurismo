<?php

// First test
$db = new Database();

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
?>


CREATE DATABASE;
CREATE TABLE user (name VARCHAR(30), surname VARCHAR(20), email VARCHAR(50), password VARCHAR(20));
INSERT INTO user VALUES ('Patricia', 'Herrera', 'gp.herrera@ceu.es', 'contraseña');