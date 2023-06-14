<?php
echo "Hello there.\n";
echo "The database says:\n";
$mysqli = new mysqli("127.0.0.1", "mariadb", "mariadb", "mariadb", 3306);

$result = $mysqli->query("SELECT * FROM MyTable");

foreach ($result as $row) {
  echo $row['ID'] . " = " . $row['Item'] . "\n";
}
