<?php

// Helper function
function redirect_to($location) {
  header("Location: " . $location);
  exit;
}

// typecast the value as an integer to prevent SQL injection
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

// hostname: "127.0.0.1"
// username: "mariadb"
// password: "mariadb"
// database: "mariadb"
// port:     3306

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Gather form values
  $task = [];
  $task['description'] = $_POST['description'] ?? '';
  $task['priority'] = $_POST['priority'] ?? '10';
  $task['completed'] = $_POST['completed'] ?? '0';


  redirect_to('edit.php?success=1&id=' . $id);

} else {

  if (isset($_GET['success']) && $_GET['success'] == "1") { $message = "Task updated."; }

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
          <dd><input type="text" name="description" value="" /></dd>
        </dl>
        <dl>
          <dt>Priority</dt>
          <dd>
            <select name="priority">
            <?php
              for($i=1; $i <= 10; $i++) {
                echo "<option value=\"{$i}\"";
                if(1 == 0) {
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
            <input type="checkbox" name='completed' value="1"<?php if(1 == 0) { echo " checked"; } ?> />
          </dd>
        </dl>
        <div id="operations">
          <input type="submit" value="Edit Task" />
        </div>
      </form>

    </section>

  </body>
</html>
