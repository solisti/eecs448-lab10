<style> <?php include 'style.css'; ?></style>

<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "z506c523", "piKae3uH", "z506c523");

if($mysqli->connect_errno){
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$name = $_POST["user"];
$posts = "SELECT content FROM Posts WHERE author_id='$name'";
$result = $mysqli->query($posts);

echo '<body><table><tr><th>' .$name."'s Posts: </th></tr>";
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo '<tr><td>' .$row["content"]. '</td></tr>';
    }

    $result -> free();
}
echo '</table></body>';


$mysqli->close();
 ?>
