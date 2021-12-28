<?php

$conn = new mysqli('mysql-61193-0.cloudclusters.net:17324', 'admin', 'AUokmAyE', 'arc');
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
	header("Location: /account.html?message=Passwords do not match");
	
}

echo $username, $password_2, $password_1, $email;
$stmt ="INSERT INTO genesis (username, email, password_1, password_2) VALUES ('$username', '$email', '$password_1', '$password_2')";

if ($conn->query($stmt) == True){
	header('location: HOME.html');
}else{
	header('location: account.html');
}

// echo "registration successfull";
$conn->close();

?>
