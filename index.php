<style>
  a, a:visited {
    color: blue;
  }
  table {
    width: 50%;
    border-collapse: collapse;
  }
  table td, table th {
    border: 1px solid #666;
    text-align: left;
    padding: 2px 4px;
  }
  table th {
    background: #CCC;
    color: #000;
  }
  li.checkit {
    margin-bottom: 1em;
  }
</style>

<h1>Practice It: PHP with MySQL</h1>

<p>This database table has been created with sample data.</p>

<table>
  <tr>
    <th colspan="6">Table: tasks</th>
  </tr>
  <tr>
    <th>Field</th>
    <th>Type</th>
    <th>Null</th>
    <th>Key</th>
    <th>Default</th>
    <th>Extra</th>
  </tr>
  <tr>
    <td>id</td>
    <td>int(11)</td>
    <td>NO</td>
    <td>PRI</td>
    <td></td>
    <td>auto_increment</td>
  </tr>
  <tr>
    <td>priority</td>
    <td>int(2)</td>
    <td>YES</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>completed</td>
    <td>tinyint(1)</td>
    <td>YES</td>
    <td></td>
    <td>0</td>
    <td></td>
  </tr>
  <tr>
    <td>description</td>
    <td>varchar(255)</td>
    <td>YES</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>

<p>There is a <a href="reference.md">PHP and SQL Reference Page</a> if you need help.</p>

<h2>Quick Links to View Coding Results</h2>
<ul>
  <li class="tryit">01_02 Try It: Use PHP to Display SQL Data - <a href="/01_02/tasks/show.php">Procedural</a> | <a href="/01_02/tasks_oop/show.php">OOP</a></li>
  <li class="checkit">01_03 Check It: Use PHP to Display SQL Data - <a href="/01_03_checkit/tasks/show.php">Procedural</a> | <a href="/01_03_checkit/tasks_oop/show.php">OOP</a></li>
  <li class="tryit">01_04 Try It: List Records - <a href="/01_04/tasks">Procedural</a> | <a href="/01_04/tasks_oop">OOP</a></li>
  <li class="checkit">01_05 Check It: List Records - <a href="/01_05_checkit/tasks">Procedural</a> | <a href="/01_05_checkit/tasks_oop">OOP</a></li>
  <li class="tryit">01_06 Try It: Filter Records By Criteria - <a href="/01_06/tasks">Procedural</a> | <a href="/01_06/tasks_oop">OOP</a></li>
  <li class="checkit">01_07 Check It: Filter Records By Criteria - <a href="/01_07_checkit/tasks">Procedural</a> | <a href="/01_07_checkit/tasks_oop">OOP</a></li>
  <li class="tryit">01_08 Try It: Find a Record by ID - <a href="/01_08/tasks">Procedural</a> | <a href="/01_08/tasks_oop">OOP</a></li>
  <li class="checkit">01_09 Check It: Find a Record by ID - <a href="/01_09_checkit/tasks">Procedural</a> | <a href="/01_09_checkit/tasks_oop">OOP</a></li>
  <li class="tryit">01_10 Try It: Create a Record - <a href="/01_10/tasks">Procedural</a> | <a href="/01_10/tasks_oop">OOP</a></li>
  <li class="checkit">01_11 Check It: Create a Record - <a href="/01_11_checkit/tasks">Procedural</a> | <a href="/01_11_checkit/tasks_oop">OOP</a></li>
  <li class="tryit">01_12 Try It: Update a Record - <a href="/01_12/tasks">Procedural</a> | <a href="/01_12/tasks_oop">OOP</a></li>
  <li class="checkit">01_13 Check It: Update a Record - <a href="/01_13_checkit/tasks">Procedural</a> | <a href="/01_13_checkit/tasks_oop">OOP</a></li>
  <li class="tryit">01_14 Try It: Delete a Record - <a href="/01_14/tasks">Procedural</a> | <a href="/01_14/tasks_oop">OOP</a></li>
  <li class="checkit">01_15 Check It: Delete a Record - <a href="/01_15_checkit/tasks">Procedural</a> | <a href="/01_15_checkit/tasks_oop">OOP</a></li>
</ul>
