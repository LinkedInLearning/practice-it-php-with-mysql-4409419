# Database Interaction

1. Create a database connection
   - Test if connection succeeded (recommended)

2. Perform database query
   - Test if query succeeded (recommended)

3. Use returned data (if any)

4. Release returned data

5. Close database connection


# PHP mysqli Functions

Complete function definitions are available at https://php.net

| Procedural Style                            | Object-Oriented Style                |
|---------------------------------------------|--------------------------------------|
| mysqli_affected_rows($mysqli)               | $mysqli->affected_rows               |
| mysqli_close($mysqli)                       | $mysqli->close()                     |
| mysqli_connect_errno($mysqli)               | $mysqli->connect_errno               |
| mysqli_connect_error($mysqli)               | $mysqli->connect_error               |
| mysqli_connect(...)                         | new mysqli(...)                      |
| mysqli_insert_id($mysqli)                   | $mysqli->insert_id                   |
| mysqli_query($mysqli, $string)              | $mysqli->query($string)              |
| mysqli_real_escape_string($mysqli, $string) | $mysqli->real_escape_string($string) |
|                                             |                                      |
| mysqli_fetch_array($result)                 | $result->fetch_array()               |
| mysqli_fetch_assoc($result)                 | $result->fetch_assoc()               |
| mysqli_fetch_object($result)                | $result->fetch_object()              |
| mysqli_fetch_row($result)                   | $result->fetch_row()                 |
| mysqli_free_result($result)                 | $result->free()                      |
| mysqli_num_rows($result)                    | $result->num_rows                    |

# Example SQL Statements

SELECT * FROM table_name  
WHERE column1 = 'beep'  
AND column2 = 'bam'  
ORDER BY column3 ASC  
LIMIT 20;

INSERT INTO table_name (column1, column2, column3)  
VALUES ('beep', 'bam', 'boop');

UPDATE table_name  
SET column1='beep', column2='bam', column3='boop';

DELETE FROM table_name  
WHERE column1='beep' 
LIMIT 1;
