<?php

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
$sql = "SELECT * FROM tasks ORDER BY priority";
$result = $db->query($sql);

// Test if query succeeded (recommended)
if (!$result) {
	exit("Database query failed.");
}

// 3. Use returned data (if any)

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Task Manager: Task List</title>
  </head>
  <body>

    <header>
      <h1>Task Manager</h1>
    </header>

    <section>

      <h1>Task List</h1>

    	<table>
    	  <tr>
          <th>ID</th>
          <th>Priority</th>
          <th>Completed</th>
    	    <th>Description</th>
    	  </tr>

        <?php while($task = $result->fetch_object()) { ?>
          <tr>
            <td><?php echo $task->id; ?></td>
            <td><?php echo $task->priority; ?></td>
            <td><?php echo $task->completed == 1 ? 'true' : 'false'; ?></td>
      	    <td><?php echo $task->description; ?></td>
      	  </tr>
        <?php } ?>
    	</table>

    </section>

  </body>
</html>

<?php
// 4. Release returned data
$result->free();

// 5. Close database connection
$db->close();
?>
