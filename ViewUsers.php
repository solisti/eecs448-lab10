<style> <?php include 'style.css'; ?></style>

<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "z506c523", "piKae3uH", "z506c523");

if($mysqli->connect_errno){
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$user = "SELECT user_id FROM Users";
$result = $mysqli->query($user);

echo '<body><table><tr><th>Users: </th></tr>';

if ($result->num_rows>0) {
  while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["user_id"] . "</td></tr>";
  }

  $result->free();
}

echo '</table></body>';

$mysqli->close();
 ?>
