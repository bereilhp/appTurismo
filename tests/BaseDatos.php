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


CREATE DATABASE madway;
CREATE TABLE user (name VARCHAR(30) NOT NULL, surname VARCHAR(20) NOT NULL, email VARCHAR(50) NOT NULL, password VARCHAR(20) NOT NULL, PRIMARY KEY (email));
INSERT INTO user VALUES ('Patricia', 'Herrera', 'gp.herrera@ceu.es', 'contraseña');