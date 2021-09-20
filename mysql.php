<?php

$servername = "localhost";
$username = "tebraly_useree";
$password = "t]%{frq33omH";
$dbname = "tebraly_db";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//Encoding arabic using UTF8 
mysqli_set_charset($conn, "utf8");

$sql = "SELECT name FROM user";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
// output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Address: " . $row["name"]. "<br>";
  }
} 
else {
  echo "0 results";
}

// Close connection
$conn->close();
?> 
