<style> <?php include 'style.css'; ?></style>

<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$mysqli = new mysqli("mysql.eecs.ku.edu", "z506c523", "piKae3uH", "z506c523");

if($mysqli->connect_errno){
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

echo "hello";

$del = $_POST["post_id"];
$posts = "SELECT post_id FROM Posts";
$result = $mysqli->query($posts);

echo "Posts deleted:";

while ($row = $result -> fetch_assoc()) {
  $todelete = $_POST[$row["post_id"]];
  if ($todelete == "on") {
    $query = "DELETE FROM Posts WHERE post_id = '" .$row["post_id"]. "'";
    $remove = $mysqli->query($query);

    echo "Removed post" . $row["post_id"] . ".";
  }
}




$mysqli->close();
 ?>
