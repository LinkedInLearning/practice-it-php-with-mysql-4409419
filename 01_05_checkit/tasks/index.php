<?php

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
$sql = "SELECT * FROM tasks ORDER BY priority";
$result = mysqli_query($db, $sql);

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

        <?php while($task = mysqli_fetch_assoc($result)) { ?>
        <?php // or: foreach ($result as $task) ?>
          <tr>
            <td><?php echo $task['id']; ?></td>
            <td><?php echo $task['priority']; ?></td>
            <td><?php echo $task['completed'] == 1 ? 'true' : 'false'; ?></td>
      	    <td><?php echo $task['description']; ?></td>
      	  </tr>
        <?php } ?>
    	</table>

    </section>

  </body>
</html>

<?php
// 4. Release returned data
mysqli_free_result($result);

// 5. Close database connection
mysqli_close($db);
?>
