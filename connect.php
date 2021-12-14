<?php
$username = $_POST['username'];
$password = $_POST['password'];
$conn = new mysqli('localhost','root','','','login');
if($conn->connect_error){
  die('connection failed :'.$conn->connect_error);
}else {
  $stmt = $conn->prepare("insert into registration(username, password)");
  $stmt->bind_param("ss",$username,$password);
  $stmt->execute();
  echo "login successful!";
  $stmt->close();
  $conn->close();
}


?>
