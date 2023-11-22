<?php 
  if($_POST) {
  
  $servername = "localhost:3307";
  $username = "root";
  $password = "";
  $database = "student_login";
  
   
  // Database Connection
  $conn = new mysqli($servername, $username, $password, $database);
  
  // Check if error
  if($conn->connect_error) {
    echo "Connection Error";
  }
  
  // Username & Password
  $user = $_POST["username"];
  $pass = $_POST["password"];
  
  // Sql Query
  $sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
 
  if($conn->query($sql)) {
   echo "Thank you!!!!..  Details are submitted!";
  } else {
   echo "Something went wrong";
  }
   
   $conn->close();
  }
?>	


