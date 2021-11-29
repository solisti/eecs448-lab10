<style> <?php include 'style.css'; ?></style>

<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "z506c523", "piKae3uH", "z506c523");

if($mysqli->connect_errno){
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$name = $_POST["user"];

$query = "SELECT * FROM Users WHERE user_id = '$name'";
$isUser = $mysqli->query($query);

if ($name == "") {
  echo "Please enter a username";
  exit();
}


if ($isUser->num_rows != 0) {
  echo "This user already exists";
} else {
  $newuser = "INSERT INTO Users (user_id) VALUES ('". $name ."')";
  if ($mysqli->query($newuser)) {
    echo "Account created";
  } else {
    echo "Account creation failed";
  }
}


$mysqli->close();
?>


<!-- CREATE TABLE Users
(
  user_id TEXT
); -->
