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

$sql = "INSERT INTO invite_to_speeach (name, organization, email, message, amount, date_of_create, id)
VALUES (htmlspecialchars($_POST["user_name"]), htmlspecialchars($_POST["name_org"]),
 htmlspecialchars($_POST["user_mail"]), htmlspecialchars($_POST["user_message"]), htmlspecialchars($_POST["amount"]),
date('Y-m-d'), 0)";

if ($conn->query($sql) === TRUE) {
  echo "Спасибо за приглашение";
} else {
  echo "ошибка"; //$sql . "<br>" . $conn->error;
}

$conn->close();
?>
