<?php
$servername = "mysql-61193-db.mysql-61193:17324";
$username = "admin"; // For MYSQL the predifined username is root
$password = "AUokmAyE"; // For MYSQL the predifined password is " "(blank)

// Create connection
$conn = new mysqli($servername, $username, $password);

 
// Check connection

 if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

?>
