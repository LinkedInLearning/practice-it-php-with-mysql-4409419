<?php

// Helper function
function redirect_to($location) {
  header("Location: " . $location);
  exit;
}

// typecast the value as an integer to prevent SQL injection
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if($_SERVER['REQUEST_METHOD'] == 'POST') {

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
  $sql = "DELETE FROM tasks ";
  $sql .= "WHERE id={$id} ";
  $sql .= "LIMIT 1";
  $result = mysqli_query($db, $sql);

  // Test if query succeeded (recommended)
  // For DELETE statements, $result is true/false
  if(!$result) {
    echo 'Delete failed';
    exit;
  }

  // 3. Use returned data (if any)

  // 4. Release returned data
  // No need. Result was true/false.

  // 5. Close database connection
  mysqli_close($db);

}

redirect_to('index.php');

?>
