<?php
$servername = "mysql-63949-0.cloudclusters.net";
$username = "admin"; // For MYSQL the predifined username is root
$password = "5jWbCUPL"; // For MYSQL the predifined password is " "(blank)

// Create connection
$conn = new mysqli($servername, $username, $password);

 
// Check connection

 if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

?>
