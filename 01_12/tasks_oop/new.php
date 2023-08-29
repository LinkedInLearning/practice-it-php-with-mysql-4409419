<!doctype html>
<html lang="en">
  <head>
    <title>Task Manager: New Task</title>
  </head>
  <body>

    <header>
      <h1>Task Manager</h1>
    </header>

    <nav>
      <a href="index.php">Task List</a>
    </nav>

    <section>

      <h1>New Task</h1>

      <form action="new_process.php" method="post">
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
                echo "<option value=\"{$i}\">{$i}</option>";
              }
            ?>
            </select>
          </dd>
        </dl>
        <dl>
          <dt>Completed</dt>
          <dd>
            <input type="hidden" name="completed" value="0" />
            <input type="checkbox" name="completed" value="1" />
          </dd>
        </dl>
        <div id="operations">
          <input type="submit" value="Create Task" />
        </div>
      </form>

    </section>

  </body>
</html>
