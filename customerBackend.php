<style><?php include 'style.css'; ?></style>
<?php

  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  $username = $_POST["Username"];
  $password = $_POST["Password"];

  $shipping = $_POST["ship"];
  $potato = $_POST["item1"];
  $tomato = $_POST["item2"];
  $penguin = $_POST["item3"];

  $ship_option;

  if ($shipping == 0) {
    $ship_option = "Free";
  } else if ($shipping == 50) {
    $ship_option = "Over night";
  } else {
    $ship_option = "Three day";
  }

  echo "Welcome, " . $username . "! <br>";
  echo "Your password is '" . $password . "'.<br>";

  echo "<br>";

  echo "Here is your receipt: ";

  echo "<div class = 'receipt'>";

  echo "<table border=\"1\">";

  echo "<tr>";
    echo "<td></td>";
    echo "<th>Quantity</th>";
    echo "<th>Cost Per Item</th>";
    echo "<th>Sub Total</th>";
  echo "</tr>";

  echo "<tr>";
    echo "<th><b>Potato</b></th>";
    echo "<td>" . $potato . "</td>";
    echo "<td>$425.00</td>";
    echo "<td>$" . $potato * 425 . "</th>";
  echo "</tr>";

  echo "<tr>";
    echo "<th><b>Tomato</b></th>";
    echo "<td>" . $tomato . "</td>";
    echo "<td>$128.00</td>";
    echo "<td>$" . $tomato * 128 . "</td>";
  echo "</tr>";

  echo "<tr>";
    echo "<th><b>Penguin</b></th>";
    echo "<td>" . $penguin . "</td>";
    echo "<td>$399.00</td>";
    echo "<td>$" . $penguin * 399 . "</td>";
  echo "</tr>";

  echo '<tr>';
      echo '<th>Shipping</th>';
      echo '<td colspan="2">'.$ship_option.'</td>';
      echo '<td>$'.$shipping.'</td>';
  echo '</tr>';

  $total = $shipping + $potato * 425 + $tomato * 128 + $penguin * 399 ;

  echo "<tr>";
    echo "<th colspan='3'><b> Total Cost</b></th>";
    echo "<td>$" . $total . "</td>";
  echo "</tr>";

  echo "</table>";

  echo "</div>";

 ?>
