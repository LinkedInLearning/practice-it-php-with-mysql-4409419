<?php

// Helper function
function redirect_to($location) {
  header("Location: " . $location);
  exit;
}

// typecast the value as an integer to prevent SQL injection
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  // hostname: "127.0.0.1"
  // username: "mariadb"
  // password: "mariadb"
  // database: "mariadb"
  // port:     3306

}

redirect_to('index.php');

?>
