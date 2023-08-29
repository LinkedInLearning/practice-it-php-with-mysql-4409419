<?php

// Helper function
function redirect_to($location) {
  header("Location: " . $location);
  exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $task = [];
  $task['description'] = $_POST['description'] ?? '';
  $task['priority'] = $_POST['priority'] ?? '10';
  $task['completed'] = $_POST['completed'] ?? '0';

  // hostname: "127.0.0.1"
  // username: "mariadb"
  // password: "mariadb"
  // database: "mariadb"
  // port:     3306

  $new_id = 1;

  redirect_to('show.php?id=' . $new_id);

}

?>
