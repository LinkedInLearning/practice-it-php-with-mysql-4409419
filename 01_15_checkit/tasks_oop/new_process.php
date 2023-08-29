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

  // 1. Create a database connection
  $db = new mysqli("127.0.0.1", "mariadb", "mariadb", "mariadb", 3306);

  // Test if connection succeeded (recommended)
  if($db->connect_errno) {
    $msg = "Database connection failed: ";
    $msg .= $db->connect_error;
    $msg .= " (" . $db->connect_errno . ")";
    exit($msg);
  }

  // 2. Perform database query
  $sql = "INSERT INTO tasks (description, priority, completed) VALUES ";
  $sql .= "(";
  $sql .= "'" . $db->real_escape_string($task['description']) . "',";
  $sql .= "'" . $db->real_escape_string($task['priority']) . "',";
  $sql .= "'" . $db->real_escape_string($task['completed']) . "'";
  $sql .= ")";
  $result = $db->query($sql);

  // Test if query succeeded (recommended)
  // For INSERT statements, $result is true/false
  if(!$result) {
    echo 'Insert failed';
    exit;
  }

  // 3. Use returned data (if any)
  $new_id = $db->insert_id;

  // 4. Release returned data
  // No need. Result was true/false.

  // 5. Close database connection
  $db->close();

  redirect_to('show.php?id=' . $new_id);

}

?>
