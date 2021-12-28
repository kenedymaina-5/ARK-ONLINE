<?php

$conn = new mysqli('mysql-63949-0.cloudclusters.net:18440', 'admin', '5jWbCUPL', 'genesis2');
if ($conn->connect_error) {
	echo 'Connection failed<br>';
}
else {
	//echo 'connection successfull<br>';
}
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password_1 = $_REQUEST['password_1'];
$password_2 = $_REQUEST['password_2'];

if ($password_1 != $password_2){
	header("Location: /account.html?message=Passwords do not match");
	
}

echo $username, $password_2, $password_1, $email;
$stmt ="INSERT INTO genesis2 (username, email, password_1, password_2) VALUES ('$username', '$email', '$password_1', '$password_2')";

if ($conn->query($stmt) == True){
	header('location: HOME.html');
}else{
	header('location: account.html');
}

// echo "registration successfull";
$conn->close();

?>
