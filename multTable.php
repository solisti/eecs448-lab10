<style><?php include 'multTable.css'; ?></style>
<?php
echo "<table border=\"1\">";
echo "<tr>";
  echo "<td></td>";
  for ($x=1; $x <= 100 ; $x++) {
    echo "<th>" . $x . "</th>";
  }
echo "</tr>";

for ($i=1; $i <= 100; $i++) {
  echo '<tr>';

  echo "<th>" . $i . "</th>";
  for ($j=1; $j <= 100; $j++) {
    echo "<td> " . $i * $j . " </td>";
  }
  echo '</tr>';
}
echo "</table>";
?>
