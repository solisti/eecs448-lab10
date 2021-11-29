<style> <?php include 'style.css'; ?></style>

<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "z506c523", "piKae3uH", "z506c523");

if($mysqli->connect_errno){
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$name = $_POST["user"];
$text = $_POST["postContent"];

$query = "SELECT * FROM Users WHERE user_id = '$name'";
$isUser = $mysqli->query($query);

if ($text == "") {
  echo "You cannot submit an empty post. ";
  exit();
}

if ($isUser->num_rows == 0) {
  echo "user does not exist";
  exit();
} else {
  $newpost = "INSERT INTO Posts (content, author_id) VALUES ('" . $text . "', '" . $name . "')";
  if ($mysqli->query($newpost)) {
    echo "Success! Content is now posted.";
  } else {
    echo "Posting failed.";
  }
}

$mysqli->close();
?>
