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
  $db = mysqli_connect("127.0.0.1", "mariadb", "mariadb", "mariadb", 3306);

  // Test if connection succeeded (recommended)
  if(mysqli_connect_errno()) {
    $msg = "Database connection failed: ";
    $msg .= mysqli_connect_error();
    $msg .= " (" . mysqli_connect_errno() . ")";
    exit($msg);
  }

  // 2. Perform database query
  $sql = "INSERT INTO tasks (description, priority, completed) VALUES ";
  $sql .= "(";
  $sql .= "'" . mysqli_real_escape_string($db, $task['description']) . "',";
  $sql .= "'" . mysqli_real_escape_string($db, $task['priority']) . "',";
  $sql .= "'" . mysqli_real_escape_string($db, $task['completed']) . "'";
  $sql .= ")";
  $result = mysqli_query($db, $sql);

  // Test if query succeeded (recommended)
  // For INSERT statements, $result is true/false
  if(!$result) {
    echo 'Insert failed';
    exit;
  }

  // 3. Use returned data (if any)
  $new_id = mysqli_insert_id($db);

  // 4. Release returned data
  // No need. Result was true/false.

  // 5. Close database connection
  mysqli_close($db);

  redirect_to('show.php?id=' . $new_id);

}

?>
