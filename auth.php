<?php

$dbhost = "mysql-63949-0.cloudclusters.net:18440";
$dbusername = "admin";
$dbpassword = "5jWbCUPL";
$dbname = "genesis2";

$conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);


if ($conn->error){
   echo "Connection Failed";
}
else {
   echo "Welcome ";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $username = $_REQUEST["username"];
   $passwd = $_REQUEST["password_1"];
}
$smt = "SELECT * FROM genesis2 WHERE username='$username'";

$result = $conn->query($smt);
if ($result){
   
   $row = $result->fetch_assoc();
   $conpasswd = $row['password_1'];
   
    if ($passwd == $conpasswd){
      header("Location: /HOME.html");
      }else{
         header("Location: /account.html");
      }

   }else{
      echo "failed";
      header("location: /account.html");
   }




echo $username , $passwd;

$conn->close();
}
?>
