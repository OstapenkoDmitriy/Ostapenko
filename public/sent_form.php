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
$conn->set_charset("utf8mb4");
$name = htmlspecialchars($_POST["user_name"]);
$name_org = htmlspecialchars($_POST["name_org"]);
$user_mail = htmlspecialchars($_POST["user_mail"]);
$user_message = htmlspecialchars($_POST["user_message"]);
$amount = htmlspecialchars($_POST["amount"]);
$date = date('Y-m-d');
$sql = "INSERT INTO invite_to_speeach (name, organization, email, message, amount, date_of_create, id)
VALUES ('$name', '$name_org', '$user_mail', '$user_message', '$amount',
'$date', 0)";
$result = $conn->query($sql);
if (!$result) {
  echo "ошибка";
} else {
  echo "Спасибо за приглашение"; //$sql . "<br>" . $conn->error;
}

$conn->close();
?>
