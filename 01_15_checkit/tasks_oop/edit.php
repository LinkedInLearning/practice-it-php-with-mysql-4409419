<?php

// Helper function
function redirect_to($location) {
  header("Location: " . $location);
  exit;
}

// typecast the value as an integer to prevent SQL injection
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

// 1. Create a database connection
$db = new mysqli("127.0.0.1", "mariadb", "mariadb", "mariadb", 3306);

// Test if connection succeeded (recommended)
if($db->connect_errno) {
  $msg = "Database connection failed: ";
  $msg .= $db->connect_error;
  $msg .= " (" . $db->connect_errno . ")";
  exit($msg);
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Gather form values
  $task = [];
  $task['description'] = $_POST['description'] ?? '';
  $task['priority'] = $_POST['priority'] ?? '10';
  $task['completed'] = $_POST['completed'] ?? '0';

  // 2. Perform database query
  $sql = "UPDATE tasks SET ";
  $sql .= "description='" . $db->real_escape_string($task['description']) . "', ";
  $sql .= "priority='" . $db->real_escape_string($task['priority']) . "', ";
  $sql .= "completed='" . $db->real_escape_string($task['completed']) . "' ";
  $sql .= "WHERE id={$id} ";
  $sql .= "LIMIT 1";
  $result = $db->query($sql);

  // Test if query succeeded (recommended)
  // For UPDATE statements, $result is true/false
  if(!$result) {
    echo 'Update failed';
    exit;
  }

  // 3. Use returned data (if any)
  redirect_to('edit.php?success=1&id=' . $id);

} else {

  if (isset($_GET['success']) && $_GET['success'] == "1") { $message = "Task updated."; }

  $sql = "SELECT * FROM tasks ";
  $sql .= "WHERE id = {$id} ";
  $sql .= "LIMIT 1";
  $result = $db->query($sql);

  // Test if query succeeded (recommended)
  if (!$result) {
  	exit("Database query failed.");
  }

  // 3. Use returned data (if any)
  $task = $result->fetch_object();
  if (is_null($task)) {
    exit("No task found.");
  }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Task Manager: Edit Task</title>
  </head>
  <body>

    <header>
      <h1>Task Manager</h1>
    </header>

    <nav>
      <a href="index.php">Task List</a>
    </nav>

    <section>
      <h1>Edit Task</h1>

      <?php if(isset($message)) { echo "<div>" . $message . "</div>"; } ?>

      <form action="edit.php?id=<?php echo $id; ?>" method="post">
        <dl>
          <dt>Description</dt>
          <dd><input type="text" name="description" value="<?php echo $task->description; ?>" /></dd>
        </dl>
        <dl>
          <dt>Priority</dt>
          <dd>
            <select name="priority">
            <?php
              for($i=1; $i <= 10; $i++) {
                echo "<option value=\"{$i}\"";
                if($task->priority == $i) {
                  echo " selected";
                }
                echo ">{$i}</option>";
              }
            ?>
            </select>
          </dd>
        </dl>
        <dl>
          <dt>Completed</dt>
          <dd>
            <input type="hidden" name='completed' value="0" />
            <input type="checkbox" name='completed' value="1"<?php if($task->completed == "1") { echo " checked"; } ?> />
          </dd>
        </dl>
        <div id="operations">
          <input type="submit" value="Edit Task" />
        </div>
      </form>

    </section>

  </body>
</html>

<?php
// 4. Release returned data
$result->free();

// 5. Close database connection
$db->close();
?>