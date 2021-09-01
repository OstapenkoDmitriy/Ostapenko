<?php
$servername = "baltaz.mysql.tools";
$username = "baltaz_db";
$password = "dzS3bL2q";
$dbname = "baltaz_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO invite_to_speach (name, organization, email, message, amount, date_of_create, id)
VALUES ('John', 'Doe', 'john@example.com', 'Doe', 123, '2021-09-01', 0)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
