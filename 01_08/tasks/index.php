<?php

// regulate input with an allow list to prevent SQL injection
$allowed = array("0", "1");
if (isset($_GET['completed']) && in_array($_GET['completed'], $allowed)) {
  $completed = $_GET['completed'];
}

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
$sql = "SELECT * FROM tasks ";
if (isset($completed)) {
  $sql .= "WHERE completed = {$completed} ";
}
$sql .= "ORDER BY priority";
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

      <p>
        <a href="index.php">All</a> | 
        <a href="index.php?completed=1">Complete</a> | 
        <a href="index.php?completed=0">Incomplete</a>
      </p>

    	<table>
    	  <tr>
          <th>ID</th>
          <th>Priority</th>
          <th>Completed</th>
    	    <th>Description</th>
    	    <th>&nbsp;</th>
    	  </tr>

        <?php while($task = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $task['id']; ?></td>
            <td><?php echo $task['priority']; ?></td>
            <td><?php echo $task['completed'] == 1 ? 'true' : 'false'; ?></td>
      	    <td><?php echo $task['description']; ?></td>
      	    <td><a href="show.php?id=">View</a></td>
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
