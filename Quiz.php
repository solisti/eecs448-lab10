<?php

$q1 = $_POST["capital"];
$q2 = $_POST["hogwarts"];
$q3 = $_POST["Quidditch"];
$q4 = $_POST["capital2"];
$q5 = $_POST["thestral"];

$score = 0;

if ($q1 == "Lisbon") {
  $score += 1;
}

if ($q2 == "Gryffindor") {
  $score += 1;
}

if ($q3 == "Seeker") {
  $score += 1;
}

if ($q4 == "Madrid") {
  $score += 1;
}

if ($q5 == "An invisible winged horse") {
  $score += 1;
}

echo " Question 1: What is the Capital of Portugal? <br>";
echo "\t You answered: " . $q1 . "<br>";
echo "Correct answer: Lisbon <br>";
echo "<br>";

echo " Question 2: What Hogwarts house is Harry Potter sorted into? <br>";
echo "\t You answered: " . $q2 . "<br>";
echo "Correct answer: Gryffindor <br>";
echo "<br>";

echo " Question 3: What is Harry’s position in the wizarding sport Quidditch? <br>";
echo "\t You answered: " . $q3 . "<br>";
echo "Correct answer: Seeker <br>";
echo "<br>";

echo " Question 4: What is the Capital of Spain? <br>";
echo "\t You answered: " . $q4 . "<br>";
echo "Correct answer: Madrid <br>";
echo "<br>";

echo " Question 5: What is a thestral? <br>";
echo "\t You answered: " . $q5 . "<br>";
echo "Correct answer: An invisible winged horse <br>";
echo "<br>";

echo "<br>You answered " . $score . " questions correctly. <br>";
echo "<br>Your score is " . $score / 5 * 100 ."%. <br>";
?>
