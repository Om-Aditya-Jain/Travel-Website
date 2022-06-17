<?php
$hostname = "localhost";
$username = "root";
$password = " ";
$dbname = "user";

$conn = mysqli_connect($hostname,$username.,$password,$dbname);
if(!($conn)){
    echo "Error";
}

$sql = "INSERT INTO user (`username`, email, phone, `message`)
VALUES ('om','john@example.com','9999999999','hello chlo')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>