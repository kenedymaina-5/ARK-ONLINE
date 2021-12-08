<?php

$conn = new mysqli('remotemysql.com', 'UtGp1ssC60', 'Yk917zbTBf', 'UtGp1ssC60');
if ($conn->connect_error) {
	echo 'Connection failed<br>';
}
else {
	echo 'connection successfull<br>';
}
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password_1 = $_REQUEST['password_1'];
$password_2 = $_REQUEST['password_2'];

if ($password_1 != $password_2){
	header("Location: /index.html?message=Passwords do not match");
	
}

echo $username, $password_2, $password_1, $email;
$stmt ="INSERT INTO genesis (username, email, password_1, password_2) VALUES ('$username', '$email', '$password_1', '$password_2')";

if ($conn->query($stmt) == True){
	header('location: HOME.html');
}else{
	header('location: index.html');
}

// echo "registration successfull";
$conn->close();

?>
